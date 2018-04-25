<?php


namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Helpers\Strings;

/**
 * Modelo Areas
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class MdlPlataformaMaestros extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    public function getMotivosCasilleros(string $select = '*',int $id){
        $filtro='';
        if ($select != '*'){
            $filtro = 'id = '.$id;
        }
        return $this->db->query_select('select id,accion,descripcion,estado from tbl_plataforma_motivos_casilleros '.$filtro.' Order by Id');
    }
    public function getAllAgendaEPS(){
        return $this->db->query_select('select id,contacto,nombre_eps,correo,telefono,anexo,tipo_contacto,comuna from tblagendaeps Order by Id');
    }
    public function getAgendaEPSById(int $id, string $select = '*') {
        return $this->db->select($select,'tblagendaeps',"id='$id'",'LIMIT 1');
    }
    public function master_register_agenda(){
        try
        {
            global $http;
            # Obtener los datos $_POST
            $nombre_eps= $http->request->get('nombre_eps');
            $contacto= $http->request->get('contacto');
            $correo= $http->request->get('correo');
            $telefono= $http->request->get('telefono');
            $anexo= $http->request->get('anexo');
            $tipo_contacto= $http->request->get('tipo_contacto');

            if ($this->functions->e($nombre_eps,$contacto,$correo,$telefono,$tipo_contacto)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            if (!Strings::is_email($correo)) {
                throw new ModelsException('El email no tiene un formato válido.');
            }

            $this->db->insert('tblagendaeps', array(
                'nombre_eps'=> $nombre_eps,
                'contacto'=> $contacto,
                'correo'=> $correo,
                'telefono'=> $telefono,
                'anexo'=> $anexo,
                'tipo_contacto'=> $tipo_contacto
            ));


            return array('success' => 1, 'message' => 'Guardado con exito');

        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function master_editar_agenda(){
        try
        {
            global $http;
            # Obtener los datos $_POST
            $id= $http->request->get('id');
            $nombre_eps= $http->request->get('nombre_eps');
            $contacto= $http->request->get('contacto');
            $correo= $http->request->get('correo');
            $telefono= $http->request->get('telefono');
            $anexo= $http->request->get('anexo');
            $tipo_contacto= $http->request->get('tipo_contacto');

            if ($this->functions->e($nombre_eps,$contacto,$correo,$telefono,$tipo_contacto)) {
                throw new ModelsException('Todos los datos son necesarios...');
            }

            if (!Strings::is_email($correo)) {
                throw new ModelsException('El email no tiene un formato válido.');
            }

            $this->db->update('tblagendaeps', array(
                'nombre_eps'=> $nombre_eps,
                'contacto'=> $contacto,
                'correo'=> $correo,
                'telefono'=> $telefono,
                'anexo'=> $anexo,
                'tipo_contacto'=> $tipo_contacto
            ),"id='$id'");


            return array('success' => 1, 'message' => 'Guardado con exito');

        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function DeleteAgendaEPSByID($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("delete from tblagendaeps WHERE id=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'plataforma/listar_agenda');
    }
    public function verComunas(string $select = '*'){
        return $this->db->select($select,'tblcomuna');
    }
    public function getComunasById(int $id, string $select = '*') {
        return $this->db->select($select,'tblcomuna',"id_comuna='$id'",'LIMIT 1');
    }
    public function verZonas(string $select = '*'){
        return $this->db->select($select,'tblzona');
    }
    public function getZonasById(int $id, string $select = '*') {
        return $this->db->select($select,'tblzona',"id_zona='$id'",'LIMIT 1');
    }
    public function verCasilleros(){
        return $this->db->query_select("SELECT c.id_casilleros,c.nombre,c.id_zona,c.estado,z.id_zona,z.nombre_zona FROM tblcasilleros c JOIN tblzona z ON c.id_zona = z.id_zona");
    }
    public function verCasillerosById(int $id, string $select = '*') {
        return $this->db->select($select,'tblcasilleros',"id_casilleros='$id'",'LIMIT 1');
    }
    public function registra_nueva_comuna() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $comuna = $http->request->get('comuna');
            $zona = $http->request->get('zona');
            $subzona = $http->request->get('cod_sub_zona');
            $territorio = $http->request->get('territorio');
            $descripcion = $http->request->get('descripcion');
            $avar = $http->request->get('avar');
            if ($avar == 'si') {
                $avar = 1;
            }else {
                $avar = 0;
            }
            # Verificar que no están vacíos
            if ($this->functions->e($comuna,$zona,$subzona,$territorio,$descripcion)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblcomuna', array(
                'nombre' => strtoupper($comuna),
                'zona'=>strtoupper($zona),
                'cod_sub_zona'=>strtoupper($subzona),
                'territorio'=>strtoupper($territorio),
                'descripcion'=>strtoupper($descripcion),
                'avar'=>strtoupper($avar)
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_comuna(): array {
        try {
            global $http;

            #Obtener los datos $_POST
            $comuna = $http->request->get('comuna');
            $id_comuna = $http->request->get('id_comuna');
            $zona = $http->request->get('zona');
            $subzona = $http->request->get('cod_sub_zona');
            $descripcion = $http->request->get('descripcion');
            $territorio = $http->request->get('territorio');
            $avar = $http->request->get('avar');
            if ($avar == 'si') {
                $avar = 1;
            }else {
                $avar = 0;
            }
            if ($this->functions->e($comuna,$zona,$subzona,$territorio,$descripcion)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblcomuna',array(
            'nombre' => $comuna,
            'zona'=>strtoupper($zona),
            'cod_sub_zona'=>strtoupper($subzona),
            'territorio'=>strtoupper($territorio),
            'descripcion'=>strtoupper($descripcion),
            'avar'=>strtoupper($avar)
            ),"id_comuna='$id_comuna'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Comuna exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function update_estado_comuna($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblcomuna SET estado=if(estado=0,1,0) WHERE id_comuna=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'plataforma/listar_comunas');
    }
    public function verActividad(string $select = '*'){
        return $this->db->select($select,'tblactividad');
    }
    public function getActividadById(int $id, string $select = '*') {
        return $this->db->select($select,'tblactividad',"id_actividad='$id'",'LIMIT 1');
    }
    public function registra_nueva_actividad() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $actividad = $http->request->get('actividad');

            # Verificar que no están vacíos
            if ($this->functions->e($actividad)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblactividad', array(
                'actividad' => $actividad
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_actividad(): array {
        try {
            global $http;

            #Obtener los datos $_POST
            $id_actividad = $http->request->get('id_actividad');
            $actividad = $http->request->get('actividad');
            
            if ($this->functions->e($actividad)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblactividad',array(
            'actividad' => $actividad,
            ),"id_actividad='$id_actividad'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Actividad exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function update_estado_actividad($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblactividad SET estado=if(estado=0,1,0) WHERE id_actividad=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'plataforma/listar_actividades');
    }
    public function registra_nuevo_casillero() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $nombre = $http->request->get('nombre');
            $id_zona = $http->request->get('id_zona');

            # Verificar que no están vacíos
            if ($this->functions->e($nombre)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblcasilleros', array(
                'nombre' => $nombre,
                'id_zona' => $id_zona
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_casillero(): array {
        try {
            global $http;

            #Obtener los datos $_POST
            $id_casilleros = $http->request->get('id_casilleros');
            $nombre = $http->request->get('nombre');
            $id_zona = $http->request->get('id_zona');
            
            if ($this->functions->e($nombre)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblcasilleros',array(
            'nombre' => $nombre,
            'id_zona' => $id_zona
            ),"id_casilleros='$id_casilleros'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Casillero exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function update_estado_casilleros($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblcasilleros SET estado=if(estado=0,1,0) WHERE id_casilleros=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'plataforma/listar_casilleros');
    }
    public function registra_nueva_zona() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $nombre = $http->request->get('nombre');

            # Verificar que no están vacíos
            if ($this->functions->e($nombre)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblzona', array(
                'nombre_zona' => $nombre
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_zona(): array {
        try {
            global $http;

            #Obtener los datos $_POST
            $id_zona = $http->request->get('id_zona');
            $nombre = $http->request->get('nombre');
            
            if ($this->functions->e($nombre)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblzona',array(
            'nombre_zona' => $nombre,
            ),"id_zona='$id_zona'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Zona exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function update_estado_zona($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblzona SET estado=if(estado=0,1,0) WHERE id_zona=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'plataforma/listar_zonas');
    }
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
