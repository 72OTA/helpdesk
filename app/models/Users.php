<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Helpers\Strings;
use Ocrend\Kernel\Helpers\Emails;
use Ocrend\Kernel\Helpers\Files;
use PHPExcel;
use PHPExcel_IOFactory;
use mPDF;

/**
 * Controla todos los aspectos de un usuario dentro del sistema.
 *
 * @author Brayan Narváez <prinick@ocrend.com>
 */

class Users extends Models implements IModels {
    /**
     * Característica para establecer conexión con base de datos.
     */
    use DBModel;

    /**
     * Máximos intentos de inincio de sesión de un usuario
     *
     * @var int
     */
    const MAX_ATTEMPTS = 5;

    /**
     * Tiempo entre máximos intentos en segundos
     *
     * @var int
     */
    const MAX_ATTEMPTS_TIME = 120; # (dos minutos)

    /**
     * Log de intentos recientes con la forma 'email' => (int) intentos
     *
     * @var array
     */
    private $recentAttempts = array();

      /**
       * Hace un set() a la sesión login_user_recentAttempts con el valor actualizado.
       *
       * @return void
       */
    private function updateSessionAttempts() {
        global $session;

        $session->set('login_user_recentAttempts', $this->recentAttempts);
    }

    /**
     * Genera la sesión con el id del usuario que ha iniciado
     *
     * @param string $pass : Contraseña sin encriptar
     * @param string $pass_repeat : Contraseña repetida sin encriptar
     *
     * @throws ModelsException cuando las contraseñas no coinciden
     */
    private function checkPassMatch(string $pass, string $pass_repeat) {
        if ($pass != $pass_repeat) {
            throw new ModelsException('Las contraseñas no coinciden.');
        }
    }

    /**
     * Restaura los intentos de un usuario al iniciar sesión
     *
     * @param string $email: Email del usuario a restaurar
     *
     * @throws ModelsException cuando hay un error de lógica utilizando este método
     * @return void
     */
    private function restoreAttempts(string $email) {
        if (array_key_exists($email, $this->recentAttempts)) {
            $this->recentAttempts[$email]['attempts'] = 0;
            $this->recentAttempts[$email]['time'] = null;
            $this->updateSessionAttempts();
        } else {
            throw new ModelsException('Error lógico');
        }

    }

    /**
     * Genera la sesión con el id del usuario que ha iniciado
     *
     * @param array $user_data: Arreglo con información de la base de datos, del usuario
     *
     * @return void
     */
    private function generateSession(array $user_data) {
        global $session, $config;

        //$session->set('user_id', (int) $user_data['id_user']);
        //$session->set('unique_session', $config['sessions']['unique']);
        $session->set($config['sessions']['unique'] . '_user_id',(int) $user_data['id_user']);
    }

    /**
     * Verifica en la base de datos, el email y contraseña ingresados por el usuario
     *
     * @param string $email: Email del usuario que intenta el login
     * @param string $pass: Contraseña sin encriptar del usuario que intenta el login
     *
     * @return bool true: Cuando el inicio de sesión es correcto
     *              false: Cuando el inicio de sesión no es correcto
     */
    private function authentication(string $email,string $pass) : bool {
        $email = $this->db->scape($email);
        $query = $this->db->select('id_user,pass,estado','users',"email='$email' or rut_personal='$email' ",'LIMIT 1');

        # Incio de sesión con éxito
        if(false !== $query && Strings::chash($query[0]['pass'],$pass) && $query[0]['estado'] == 1 ) {
            //

            # Restaurar intentos
            $this->restoreAttempts($email);

            # Generar la sesión
            $this->generateSession($query[0]);

            #registra online
            $this->update_online_user($query[0]['id_user'],'in');

            return true;
        }

        return false;
    }

    /**
     * Establece los intentos recientes desde la variable de sesión acumulativa
     *
     * @return void
     */
    private function setDefaultAttempts() {
        global $session;

        if (null != $session->get('login_user_recentAttempts')) {
            $this->recentAttempts = $session->get('login_user_recentAttempts');
        }
    }

    /**
     * Establece el intento del usuario actual o incrementa su cantidad si ya existe
     *
     * @param string $email: Email del usuario
     *
     * @return void
     */
    private function setNewAttempt(string $email) {
        if (!array_key_exists($email, $this->recentAttempts)) {
            $this->recentAttempts[$email] = array(
                'attempts' => 0, # Intentos
                'time' => null # Tiempo
            );
        }

        $this->recentAttempts[$email]['attempts']++;
        $this->updateSessionAttempts();
    }

    /**
     * Controla la cantidad de intentos permitidos máximos por usuario, si llega al límite,
     * el usuario podrá seguir intentando en self::MAX_ATTEMPTS_TIME segundos.
     *
     * @param string $email: Email del usuario
     *
     * @throws ModelsException cuando ya ha excedido self::MAX_ATTEMPTS
     * @return void
     */
    private function maximumAttempts(string $email) {
        if ($this->recentAttempts[$email]['attempts'] >= self::MAX_ATTEMPTS) {

            # Colocar timestamp para recuperar más adelante la posibilidad de acceso
            if (null == $this->recentAttempts[$email]['time']) {
                $this->recentAttempts[$email]['time'] = time() + self::MAX_ATTEMPTS_TIME;
            }

            if (time() < $this->recentAttempts[$email]['time']) {
                # Setear sesión
                $this->updateSessionAttempts();
                # Lanzar excepción
                throw new ModelsException('Ya ha superado el límite de intentos para iniciar sesión.');
            } else {
                $this->restoreAttempts($email);
            }
        }
    }

    /**
     * Realiza la acción de login dentro del sistema
     *
     * @return array : Con información de éxito/falla al inicio de sesión.
     */
    public function login() : array {
        try {
            global $http;

            # Definir de nuevo el control de intentos
            $this->setDefaultAttempts();

            # Obtener los datos $_POST
            $email = strtolower($http->request->get('email'));
            $pass = $http->request->get('pass');

            # Verificar que no están vacíos
            if ($this->functions->e($email, $pass)) {
                throw new ModelsException('Credenciales incompletas.');
            }
            # Verificar email
            // if (!Strings::is_email($email)) {
            //     throw new ModelsException('El email no tiene un formato válido.');
            // }

            # Añadir intentos
            $this->setNewAttempt($email);

            # Verificar intentos
            $this->maximumAttempts($email);

            # Autentificar
            if ($this->authentication($email, $pass)) {

                return array('success' => 1, 'message' => 'Conectado con éxito.');
            }

            throw new ModelsException('Credenciales incorrectas.');

        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    /**
     * Verifica el rut introducido, tanto el formato como su existencia en el sistema
     *
     * @param string $rut: Rut del trabajador
     *
     */
    private function checkRut(string $rut,string $id_user='0') {
        # Existencia de email
        if ($rut != '0' ){
          $rut = $this->db->scape($rut);
          $query = $this->db->select('rut_personal', 'users', "rut_personal='$rut' and id_user<>$id_user", 'LIMIT 1');
          if (false !== $query) {
              throw new ModelsException('El Rut introducido ya se encuentra asignado.');
          }
        }
    }

    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el usuario nuevo.
     */
    public function registra_nuevo_usuario() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $name = $http->request->get('name');
            $email = strtolower($http->request->get('email'));
            $fono = $http->request->get('fono');
            $cargo = $http->request->get('cargo');
            $rut_trabajador=$http->request->get('rut_trabajador');
            $pass = $http->request->get('pass');
            $pass_repeat = $http->request->get('pass_repeat');
            $perfil = $http->request->get('perfil');
            $pagina_inicio = $http->request->get('pagina_inicio');
            $rol = $http->request->get('rol');

            # Verificar que no están vacíos
            if ($this->functions->e($name, $email, $cargo, $pass, $pass_repeat)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            elseif ($perfil == '--'){
                throw new ModelsException('Debe seleccionar un perfil');
            }

            if (true == $rol) $rol =1; else $rol=0;

            # Verificar email
            (new Model\Varios)->checkEmailUser($email);

            # Verificar Router
            $this->checkRut($rut_trabajador);

            # Veriricar contraseñas
            $this->checkPassMatch($pass, $pass_repeat);

            # Registrar al usuario
            $this->db->insert('users', array(
                'name' => $name,
                'email' => $email,
                'fono' => $fono,
                'rut_personal' => $rut_trabajador,
                'cargo' => $cargo,
                'perfil' => $perfil,
                'pagina_inicio' => $pagina_inicio,
                'rol' => $rol,
                'pass' => Strings::hash($pass)
            ));

            // Asigna menu a usuario
            if ('DEFINIDO' != $perfil ){

              $id_user=$this->db->lastInsertId();

              $this->db->query("Delete from tblperfilesuser
              WHERE id_user='$id_user';");

              $this->db->query("Insert Into tblperfilesuser(id_user,id_menu,id_submenu)
              select '$id_user',id_menu,id_submenu from tblperfiles where nombre='$perfil';");
            }

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    /**
     * Realiza la acción de actualización dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el usuario nuevo.
     */
    public function update_usuario() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $id_user = $http->request->get('id_user');
            $name = $http->request->get('name');
            $email = $http->request->get('email');
            $cargo = $http->request->get('cargo');
            $fono = $http->request->get('fono');
            $rut_personal = $http->request->get('rut_personal');
            $rut_trabajador = $http->request->get('rut_trabajador');
            $perfil = $http->request->get('perfil');
            $pagina_inicio = $http->request->get('pagina_inicio');
            $rol = $http->request->get('rol');

            # Verificar que no están vacíos
            if ($this->functions->e($name, $cargo, $email)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            elseif ($perfil == '--'){
                throw new ModelsException('Debe seleccionar un perfil');
            }

            # Verificar email
            if (!Strings::is_email($email)) {
                throw new ModelsException('El email no tiene un formato válido.');
            }

            # Verificar Router
            $this->checkRut($rut_trabajador,$id_user);

            $file = $http->files->get('foto');
            $foto = 0;
            $img_name="";
            if (null !== $file && true == Files::is_image($file->getClientOriginalName()) ){
              $foto = 1;
              $ext_foto = $file->getClientOriginalExtension();
              $img_name = $id_user.'.'.$ext_foto;

              $file->move(API_INTERFACE . 'views/app/images/avatares/', $img_name);
            }

            # Actualiza usuario
            $this->db->update('users',array(
              'name' => $name,
              'email' => $email,
              'fono' => $fono,
              'cargo' => $cargo,
              'perfil' => $perfil,
              'rut_personal' => $rut_trabajador,
              'pagina_inicio' => $pagina_inicio,
              'rol' => $rol
            ),"id_user='$id_user'",'LIMIT 1');
            // Carga nueva imagen de usuario
            if ($img_name != "" ){
              $this->db->update('users',array(
                'foto' => $foto,
                'name_foto' => $img_name
              ),"id_user='$id_user'",'LIMIT 1');
            }
            // Asigna menu a usuario
            if ('DEFINIDO' != $perfil ){
              $this->db->query("Delete from tblperfilesuser
              WHERE id_user='$id_user';");

              $this->db->query("Insert Into tblperfilesuser(id_user,id_menu,id_submenu)
              select '$id_user',id_menu,id_submenu from tblperfiles where nombre='$perfil';");
            }
            //

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
      * Actualiza estado de usuario
      * y luego redirecciona a administracion/usuarios
      *
      * @return void
    */
    final public function update_estado_user() {
        global $config;

        # Actualiza Estado
        $this->db->query("UPDATE users SET estado=if(estado=0,1,0)
        WHERE id_user='$this->id' LIMIT 1;");

        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'administracion/usuario');
    }

    /**
      * Actualiza estado de usuario en linea
      * @param $id_user = corresponde a usuario que ingresa o sale de la aplicacion
      * @param $opcion = in|out, 'in' = para login, out = para logout
      * @return void
    */
    final public function update_online_user($id_user,$opcion) {
        global $config;

        // Actualiza Estado ON LINE
        $ahora = time();
        $limite = $ahora-24*60;
        $this->db->query("UPDATE users SET online_fecha=0 WHERE online_fecha < ".$limite);
        if ($opcion === 'in'){
          $this->db->query("UPDATE users SET online_fecha=".$ahora." WHERE id_user = '$id_user' LIMIT 1;");
        }
        else if ($opcion === 'out') {
          $this->db->query("UPDATE users SET online_fecha=0 WHERE id_user = '$id_user' LIMIT 1;");
        }

    }

    /**
      * Actualiza estado de usuario
      * y luego redirecciona a administracion/usuarios
      *
      * @return void
    */
    final public function update_peril_usuario() {
      try {
        global $http;

        $id_user = $http->request->get('id_user');

        $this->db->query("Delete from tblperfilesuser
        WHERE id_user='$id_user';");

        $p = $this->getAllMenu();
        foreach ($p as $value => $data) {

          $a = $http->request->get('check-'.$data['id_menu'].'-'.$data['id_submenu']);
          if (true == $a){
            $id_menu = $data['id_menu'];
            $id_submenu = $data['id_submenu'];
            $this->db->query("Insert tblperfilesuser(id_user,id_menu,id_submenu) value($id_user,$id_menu,$id_submenu);");
          }

        }

        $this->db->update('users',array(
          'perfil' => 'DEFINIDO'
        ),"id_user='$id_user'",'LIMIT 1');

        return array('success' => 1, 'message' => 'Registrado con éxito.');
      } catch (ModelsException $e) {
          return array('success' => 0, 'message' => $e->getMessage());
      }
    }

    /**
      * Actualiza estado de usuario
      * y luego redirecciona a administracion/usuarios
      *
      * @return void
    */
    final public function update_perfil() {
      try {
        global $http;

        $perfil = $http->request->get('perfil');

        $this->db->query("Delete from tblperfiles
        WHERE nombre='$perfil';");

        $p = $this->getAllMenu();
        foreach ($p as $value => $data) {
          $a = $http->request->get('check-'.$data['id_menu'].'-'.$data['id_submenu']);

          if (true == $a){
            $id_menu = $data['id_menu'];
            $id_submenu = $data['id_submenu'];
            $this->db->query("Insert tblperfiles(nombre,id_menu,id_submenu) value('$perfil',$id_menu,$id_submenu);");
          }
        }

        //regulariza todos los usuario con actalización de opciones
        $this->db->query("delete p from (users u inner join tblperfilesuser p on u.id_user=p.id_user )
        where u.perfil='$perfil';");

        $this->db->query("Insert Into tblperfilesuser(id_user,id_menu,id_submenu)
        select id_user,id_menu,id_submenu from (tblperfiles p inner join users u on p.nombre=u.perfil ) where p.nombre='$perfil';");
        //

        return array('success' => 1, 'message' => 'Registrado con éxito.' );
      } catch (ModelsException $e) {
          return array('success' => 0, 'message' => $e->getMessage());
      }
    }

    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el usuario nuevo.
     */
    public function registra_nuevo_perfil() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $new_perfil = strtoupper($http->request->get('new_perfil'));

            # Verificar que no están vacíos
            if ($this->functions->e($new_perfil)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            # Registrar perfil
            $this->db->insert('tblperfiles', array(
                'nombre' => $new_perfil,
                'id_menu' => 0,
                'id_submenu' => 0
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    /**
     * Realiza la acción de eliminación dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el usuario nuevo.
     */
    public function delete_perfil() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $perfil = $http->request->get('select_perfil');

            # Verificar que no están vacíos
            if ($this->functions->e($perfil)) {
                throw new ModelsException('Todos los datos son necesarios');
            }elseif ($perfil == '--'){
                throw new ModelsException('Debe seleccionar un perfil valido');
            }elseif ($perfil == 'DEFINIDO'){
                  throw new ModelsException('Perfil por defecto no puede ser eliminado');
            }
            # Elimina perfil
            $this->db->query("Delete from tblperfiles
            WHERE nombre='$perfil' LIMIT 1;");

            //actualiza como DEFINIDO a todos los usuarios para que no pierdan opciones
            $this->db->update('users',array(
              'perfil' => 'DEFINIDO'
            ),"perfil='$perfil'");

            return array('success' => 1, 'message' => 'Eliminación éxitosa.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }


    /**
     * Realiza la acción de modificar password de usuario logueado
     *
     * @return array : Con información de éxito/falla al registrar el usuario nuevo.
     */
    public function resetpass() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $id_user = $http->request->get('id_user');
            $pass = $http->request->get('pass');
            $pass_repeat = $http->request->get('pass_repeat');

            # Verificar que no están vacíos
            if ($this->functions->e($pass, $pass_repeat)) {
                throw new ModelsException('Todos los datos son necesarios');
            }

            # Veriricar contraseñas
            $this->checkPassMatch($pass, $pass_repeat);

            $pass = Strings::hash($pass);

            # Actualiza contraseña
            $this->db->query("UPDATE users SET pass='$pass', tmp_pass='', token=''
            WHERE id_user='$id_user' LIMIT 1;");

            return array('success' => 1, 'message' => 'Password actualizada con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    /**
      * Envía un correo electrónico al usuario que quiere recuperar la contraseña, con un token y una nueva contraseña.
      * Si el usuario no visita el enlace, el sistema no cambiará la contraseña.
      *
      * @return array<string,integer|string>
    */
    public function lostpass() {
        try {
            global $http, $config;

            # Obtener datos $_POST
            $email = $http->request->get('email');

            # Campo lleno
            if ($this->functions->emp($email)) {
                throw new ModelsException('El campo email debe estar lleno.');
            }

            # Filtro
            $email = $this->db->scape($email);

            # Obtener información del usuario
            $user_data = $this->db->select('id_user,name', 'users', "email='$email'", 'LIMIT 1');

            # Verificar correo en base de datos
            if (false === $user_data) {
                throw new ModelsException('El email no está registrado en el sistema.');
            }

            # Generar token y contraseña
            $token = md5(time());
            $pass = uniqid();

            # Construir mensaje y enviar mensaje
            $HTML = 'Hola <b>'. $user_data[0]['name'] .'</b>, ha solicitado recuperar su contraseña perdida, si no ha realizado esta acción no necesita hacer nada.
					<br />
					<br />
					Para cambiar su contraseña por <b>'. $pass .'</b> haga <a href="'. $config['site']['url'] . 'lostpass/cambiar/&token='.$token.'&user='.$user_data[0]['id_user'].'" target="_blank">clic aquí</a>.';

            # Enviar el correo electrónico
            $dest = array();
      			$dest[$email] = $user_data[0]['name'];
      			$email = Emails::send_mail($dest,Emails::plantilla($HTML),'Recuperar contraseña perdida');

            # Verificar si hubo algún problema con el envío del correo
            if(false === $email) {
                throw new ModelsException('No se ha podido enviar el correo electrónico.');
            }

            # Actualizar datos
            $id_user = $user_data[0]['id_user'];
            $this->db->update('users',array(
                'tmp_pass' => Strings::hash($pass),
                'token' => $token
            ),"id_user='$id_user'",'LIMIT 1');

            return array('success' => 1, 'message' => 'Se ha enviado un enlace a su correo electrónico.');
        } catch(ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    /**
     * Cambia la contraseña de un usuario en el sistema, luego de que éste haya solicitado cambiarla.
     * Luego retorna al sitio de inicio con la variable GET success=(bool)
     *
     * La URL debe tener la forma URL/lostpass/cambiar/&token=TOKEN&user=ID
     *
     * @return void
     */
    public function changeTemporalPass() {
        global $config, $http;

        # Obtener los datos $_GET
        $id_user = $http->query->get('user');
        $token = $http->query->get('token');

        if (!$this->functions->emp($token) && is_numeric($id_user) && $id_user >= 1) {
            # Filtros a los datos
            $id_user = $this->db->scape($id_user);
            $token = $this->db->scape($token);
            # Ejecutar el cambio
            $this->db->query("UPDATE users SET pass=tmp_pass, tmp_pass='', token=''
            WHERE id_user='$id_user' AND token='$token' LIMIT 1;");
            # Éxito
            $success = true;
        }

        # Devolover al sitio de inicio
        $this->functions->redir($config['site']['url'] . '?sucess=' . (int) isset($success));
    }

    /**
     * Desconecta a un usuario si éste está conectado, y lo devuelve al inicio
     *
     * @return void
     */
    public function logout() {
        global $session, $config;

        //if (null != $session->get('user_id')) {
        if(null != $session->get($config['sessions']['unique'] . '_user_id')) {

            $this->update_online_user($session->get($config['sessions']['unique'] . '_user_id'),'out');

            $session->remove($config['sessions']['unique'] . '_user_id');
        }

        $this->functions->redir();
    }

    /**
     * Exportar usuarios a un archivo excel
     *
     * @return void
     */
    public function exporta_excel_users() {
        global $config;

        $objPHPExcel = new PHPExcel();

        //Informacion del excel
        $objPHPExcel->getProperties() ->setCreator("Jorge Jara H.")
                                      ->setLastModifiedBy("JJH")
                                      ->setTitle("Usuarios");
        //encabezado
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'id');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'Nombre');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'E-Mail');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'Fono');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'Rol');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', 'Estado');

        $u = $this->getUsers('id_user,name,email,fono,Rol,Estado','1=1');
        $fila = 2;
        foreach ($u as $value => $data) {

          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$fila, $data['id_user']);
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$fila, $data['name']);
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$fila, $data['email']);
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$fila, $data['fono']);
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$fila, $data['Rol'] ? 'Admin':'Normal' );
          $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$fila, $data['Estado'] ? 'Activo':'Bloqueado' );

          $fila++;
        }

        //autisize para las columna
        foreach(range('A','E') as $columnID)
        {
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }

        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->setTitle('listado_usuarios');

        // Redirect output to a client’s web browser (Excel2007)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="listar_usuarios.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
    }

    /**
     * Exportar usuarios a un archivo excel
     *
     * @return void
     */
    public function generar_pdf_users() {
        global $config;

        $mpdf = new mPDF('c', 'A4-L');
        $mpdf->allow_charset_conversion=true;
        $mpdf->charset_in = 'iso-8859-4';

        $mpdf->SetDisplayMode('fullpage');
        $html="<html>";
        $html.="<head>
              <link href='views/app/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet' />
              </head>";
        $html.="<body>";
        $empresa = (new Model\Empresa)->get();
        $html.="<img style='vertical-align: top; opacity: 0.5' src='views/app/images/logo.".$empresa['ext_logo']."' width='80' />";

        $html.="<table class='table table-bordered'>";
        $html.="<caption><h1>Listado de Usuarios</h1></caption>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nombre</th>
                    <th>E-Mail</th>
                    <th>Fono</th>
                    <th>Cargo</th>
                    <th>Perfil</th>
                    <th>ROL</th>
                    <th>Estado</th>
                  </tr>
                </thead>
                <tbody>";

                $u = $this->getUsers('name,email,fono,perfil,rol,cargo,estado','1=1');
                $fila = 1;
                foreach ($u as $value => $data) {
                  $html.="<tr>
                          <td>".$fila."</td>
                          <td>".strtolower(utf8_decode($data['name']))."</td>
                          <td>".$data['email']."</td>
                          <td>".$data['fono']."</td>
                          <td>".$data['cargo']."</td>
                          <td>".$data['perfil']."</td>";
                          $data['rol'] ? $rol ="Admin":$rol = "User";
                  $html.="<td>".$rol."</td>";
                          $data['estado'] ? $estado ="Activo":$estado = "Bloqueado";
                  $html.="<td>".$estado ."</td>
                         </tr>";
                  $fila++;
                }

                $html.="</tbody>
                </table>";
          $html.="</div>";
        $html.="</body>";
        $html.="</html>";

        $mpdf->writeHTML($html);

        $mpdf->Output("test.pdf",'I');

    }



    /**
     * Obtiene datos de un usuario según su id en la base de datos
     *
     * @param int $id: Id del usuario a obtener
     * @param string $select : Por defecto es *, se usa para obtener sólo los parámetros necesarios
     *
     * @return false|array con información del usuario
     */
    public function getUserById(int $id, string $select = '*') {
        return $this->db->select($select,'users',"id_user='$id'",'LIMIT 1');
    }

    /**
     * Obtiene a todos los usuarios
     *
     * @param string $select : Por defecto es *, se usa para obtener sólo los parámetros necesarios
     *
     * @return false|array con información de los usuarios
     */
    public function getUsers(string $select = '*',string $filtro) {
        return $this->db->select($select,'users',$filtro);
    }

    /**
     * Obtiene el menu correspondiente al id_user
     *
     * rol=1 correspondiente a usuario administrador
     *
     * @return false|array con información de los usuarios
     */
    public function getMenuOwnerUser() {
        $usuario = $this->getOwnerUser();
        if ( $usuario['rol'] == 1 )
            $result = $this->getAllMenu();
        else
            $result = $this->getMenuUser($usuario['id_user']);
        return $result;
    }

    /**
     * Obtiene Todos los menus y sub menus registrados
     *
     * @return false|array con información de los usuarios
     */
    public function getAllMenu() {
        return $this->db->query_select("select m.id_menu,m.descripcion menu,m.glyphicon,sm.id_submenu,sm.descripcion submenu,sm.url from tblmenu m inner join tblsubmenu sm on m.id_menu=sm.id_menu  where sm.estado=1  order by m.PosI,sm.PosS");
    }

    /**
     * Obtiene el perfil correspondiente al id_user
     *
     * @return false|array con información de los usuarios
     */
    public function getMenuUser($id_user) {
        return $this->db->query_select("select m.id_menu,m.descripcion menu,m.glyphicon,sm.id_submenu,sm.descripcion submenu,sm.url from (tblperfilesuser pu inner join tblmenu m on pu.id_menu=m.id_menu) inner join tblsubmenu sm on pu.id_menu=sm.id_menu and pu.id_submenu=sm.id_submenu where pu.id_user=$id_user order by m.PosI,sm.PosS");
    }

    /**
     * Obtiene los perfiles
     *
     * @param string $select : Por defecto es *, se usa para obtener sólo los parámetros necesarios
     *
     * @return false|array con información de los perfiles
     */
    public function getPerfiles(string $select = '*') {

        if ($select === '*')
        {
            $perfiles = $this->db->query_select('Select nombre from tblperfiles group by nombre order by nombre');
            return $perfiles;
        }else{
            $perfiles = $this->db->select($select,'tblperfiles',"",'Limit 1');
            return $perfiles[0];
        }
    }
    /**
     * Obtiene las opciones de un perfil especifico
     *
     * @return array con información de los perfiles
     */
    public function mostar_datos_perfil() : array {
      global $http;

      # Obtener los datos $_POST
      $perfil = $http->request->get('select_perfil');

      $p = $this->getAllMenu();

      if(false === $p) {
        return array('success' => 0, 'message' => 'No se encontraron opciones para el perfil');
      }else{
        $html = "<form id='form_opciones_perfil' name='form_opciones_perfil' role='form' method='POST' enctype='multipart/form-data'>";
        $html .="<div class='form-group'>
          <label>
            <div class='panel-footer text-center'>
              <button type='button' id='update_perfil' class='btn btn-sm btn-success' onclick=\"execute_accion_administracion('POST','update_perfil','form_opciones_perfil','reload'); return false\" ><i class='glyphicon glyphicon-refresh'></i> Actualizar datos</button>
            </div>
          </label>
        </div>";
        $html .= "<input type='hidden' name='perfil' id='peril' value='$perfil'>
        <ul>";
        $id = 0; $cont = 0;
        $opciones = $this->db->select('id_menu,id_submenu','tblperfiles',"nombre='$perfil'");

        foreach ($p as $value => $data) {
          if ( $id != $data['id_menu'] ){
              if ( $cont >= 1 ){
              $html .= "</ul>
          </li>";
              }

          $html .= "<li>
                  <i class='fa ".$data['glyphicon']."'></i>
                  <span>
                    ".utf8_encode($data['menu'])."
                  </span>
              <ul>";
          }
          $html .= "<li>
                      <div class='checkbox'>
                        <label>";
                          $flat = 0;
                          if(false !== $opciones) {
                            foreach ($opciones as $value2 => $rs) {
                              if ( $data['id_menu'] == $rs['id_menu'] && $data['id_submenu'] == $rs['id_submenu']){
                                   $flat = 1;
                                   $html .= "<input name='check-".$data['id_menu']."-".$data['id_submenu']."' type='checkbox' id='check-".$data['id_menu']."-".$data['id_submenu']."' checked='checked'>";
                              }
                            }
                          }
                          if ($flat == 0){
                              $html .= "<input name='check-".$data['id_menu']."-".$data['id_submenu']."' type='checkbox' id='check-".$data['id_menu']."-".$data['id_submenu']."'>";
                          }
                          $html .= $data['submenu']."
                        </label>
                      </div>
                    </li>";
          $id=$data['id_menu'];
          $cont =  $cont + 1;
        }

        $html .= "</ul>
        </form>";
        return array('success' => 1, 'message' => $html);
      }
    }

    /**
     * Obtiene datos del usuario conectado actualmente
     *
     * @param string $select : Por defecto es *, se usa para obtener sólo los parámetros necesarios
     *
     * @throws ModelsException si el usuario no está logeado
     * @return array con datos del usuario conectado
     */
    public function getOwnerUser(string $select = '*') : array {
        if(null !== $this->id_user) {

            $user = $this->db->select($select,'users',"id_user='$this->id_user'",'LIMIT 1');

            # Si se borra al usuario desde la base de datos y sigue con la sesión activa
            if(false === $user) {
                $this->logout();
            }

            return $user[0];
        }

        throw new \RuntimeException('El usuario no está logeado.');
    }

    /**
     * __construct()
     */
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
    }

    /**
     * __destruct()
     */
    public function __destruct() {
        parent::__destruct();
        $this->endDBConexion();
    }

}
