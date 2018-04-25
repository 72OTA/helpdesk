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

/**
 * Modelo Horasextra
 *
 * @author Felipe Andrade V. <jjara@wys.cl>
 */

class Horasextra extends Models implements IModels {
  /**
   * Característica para establecer conexión con base de datos.
   */
  use DBModel;

    // Contenido del modelo...

    public function hora_extra() : array {
        try{

        global $http;
        $id_user = $http->request->get('iduser');

        // INSERT a la tabla tbl_enc_hora_extra
        $this->db->query("INSERT INTO tbl_enc_hora_extra(id_enc_hx, fecha_creacion, fecha_solicitud, id_user, motivo_solicitud, hora_desde, hora_hasta)
        SELECT id_enc_hx, fecha_creacion, fecha_solicitud, id_user, motivo, hora_desde, hora_hasta
        FROM tmp_horasextra WHERE id_user='$id_user' LIMIT 1
        ;");

        // INSERT a la tabla tbl_det_hora_extra
        $this->db->query("INSERT INTO tbl_det_hora_extra(id_enc_hx, rut)
        SELECT id_enc_hx, rut
        FROM tmp_horasextra WHERE id_user='$id_user'
        ;");

        // DELETE a la tabla tmp_horasextra
        $this->db->query("DELETE FROM tmp_horasextra WHERE id_user='$id_user';");

        return array('success' => 1, 'message' => 'Peticion de horas extra exitosa');
        } catch (ModelsException $e) {
        return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function tmp_hora_extra() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $fecha_solicitud = $http->request->get('fecha_solicitud');
            $rut = $http->request->get('rut');
            $hora_desde = $http->request->get('hora_desde');
            $hora_hasta = $http->request->get('hora_hasta');
            $motivo = $http->request->get('motivo');
            $dato1=(new Model\Users)->getOwnerUser();
            $iduser = $dato1['id_user'];

            if ($this->functions->e($rut)) {
                throw new ModelsException('Todos los datos son necesarios');
            }

            # Verificar Rut
            $this->checkRut($rut);

            #inserta la solicitud a la tbl temporal
            $this->db->insert('tmp_horasextra',array(
                'fecha_solicitud'=> $fecha_solicitud,
                'rut' => $rut,
                'hora_desde' => $hora_desde,
                'hora_hasta' => $hora_hasta,
                'motivo' => $motivo,
                'id_user' => $iduser
            ));
            return array('success' => 1, 'message' => 'Peticion de horas extra exitosa');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    public function modificar(): array {
    try {
      global $http;


      #Obtener los datos $_POST
      $fecha_solicitud = $http->request->get('fecha_solicitud');
      $hora_desde = $http->request->get('hora_desde');
      $hora_hasta = $http->request->get('hora_hasta');
      $motivo = $http->request->get('motivo_solicitud');
      $id_enc_hx = $http->request->get('id_enc_hx');


      if ($this->functions->e($motivo, $hora_desde, $hora_hasta)) {
          throw new ModelsException('Todos los datos son necesarios');
      }
      $this->db->update('tbl_enc_hora_extra',array(
        'fecha_solicitud'=> $fecha_solicitud,
        'hora_desde' => $hora_desde,
        'hora_hasta' => $hora_hasta,
        'motivo_solicitud' => $motivo
      ),"id_enc_hx='$id_enc_hx'");
      //
      return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
    }catch (ModelsException $e) {
        return array('success' => 0, 'message' => $e->getMessage());
    }
  }
    public function aprobar(): array {
  try {
    global $http;


    #Obtener los datos $_POST
    $respuesta = "Aprobada";
    $motivo = $http->request->get('motivo_respuesta');
    $id = $http->request->get('id_respuesta');


    if ($this->functions->e($motivo)) {
        throw new ModelsException('Ingrese un motivo');
    }
    $this->db->update('tbl_enc_hora_extra',array(
      'estado' => $respuesta,
      'motivo_respuesta' => $motivo
    ),"id_enc_hx='$id'",'LIMIT 1');
    //
    return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
  }catch (ModelsException $e) {
      return array('success' => 0, 'message' => $e->getMessage());
    }
  }
    public function agregar_usuario(): array{
    try{
      global $http;

      $rut = $http->request->get('rut');
      $id_enc_hx = $http->request->get('id_enc_hx');

    if ($this->functions->e($rut)) {
        throw new ModelsException('Todos los datos son necesarios');
    }
    $this->db->insert('tbl_det_hora_extra', array(
      'rut' => $rut,
      'id_enc_hx' => $id_enc_hx
    ));
    return array('success' => 1, 'message' => 'Usuario agregado de manera exitosa');
  }catch (ModelsException $e) {
      return array('success' => 0, 'message' => $e->getMessage());
    }
  }
    public function rechazar(): array {
  try {
    global $http;


    #Obtener los datos $_POST
    $respuesta = "Rechazada";
    $motivo = $http->request->get('motivo_respuesta');
    $id = $http->request->get('id_respuesta');


    if ($this->functions->e($motivo)) {
        throw new ModelsException('Ingrese un motivo');
    }
    $this->db->update('tbl_enc_hora_extra',array(
      'estado' => $respuesta,
      'motivo_respuesta' => $motivo
    ),"id_enc_hx='$id'",'LIMIT 1');
    //
    return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
  }catch (ModelsException $e) {
      return array('success' => 0, 'message' => $e->getMessage());
    }
  }
    public function eliminar() : array {
      try {
          global $http;

          # Obtener los datos $_POST
          $id = $http->request->get('id_solicitudhx');

          # Elimina perfil
          $this->db->delete('tmp_horasextra',"id='$id'"," LIMIT 1");

          //return array('success' => 1, 'message' => 'Eliminación éxitosa.');
          return array('success' => 1, 'message' => 'Eliminación éxitosa.');
      } catch (ModelsException $e) {
          return array('success' => 0, 'message' => $e->getMessage());
      }
  }
    public function eliminar_peticiones() : array {
      try {
          global $http;

          # Obtener los datos $_POST
          $id = $http->request->get('id_peticion');

          # Elimina perfil
          $this->db->query(" DELETE FROM tbl_enc_hora_extra WHERE id_enc_hx='$id'");
          $this->db->query(" DELETE FROM tbl_det_hora_extra WHERE id_enc_hx='$id'");

          //return array('success' => 1, 'message' => 'Eliminación éxitosa.');
          return array('success' => 1, 'message' => 'Eliminación éxitosa.');
      } catch (ModelsException $e) {
          return array('success' => 0, 'message' => $e->getMessage());
      }
  }
    public function eliminar_solicitud_mod() : array {
      try {
          global $http;

          # Obtener los datos $_POST
          $id = $http->request->get('id_hx_mod');

          # Elimina perfil
          $this->db->query(" DELETE FROM tbl_det_hora_extra WHERE id_det='$id'");

          //return array('success' => 1, 'message' => 'Eliminación éxitosa.');
          return array('success' => 1, 'message' => 'Eliminación éxitosa.');
      } catch (ModelsException $e) {
          return array('success' => 0, 'message' => $e->getMessage());
      }
    }
    public function gethx(string $select = '*',string $condicion = '1=1'){
      if ($select === '*')
      {
        return $this->db->select($select,'tbl_enc_hora_extra',$condicion,'ORDER BY id_enc_hx DESC');
      }else{
        return $this->db->select($select,'tbl_enc_hora_extra',$condicion,'LIMIT 1');
      }
    }
    public function gethxtmp(string $id_user){
        return $this->db->query_select("select tmp.*,p.nombres from tmp_horasextra tmp inner join tblpersonal p on tmp.rut=p.rut  where tmp.id_user='$id_user' ORDER BY tmp.id DESC");
    }
    public function get_hx_users(){
        return $this->db->select('*','tbl_det_hora_extra');
    }
    public function get_lastid(){
        return $this->db->select('id_enc_hx','tbl_enc_hora_extra',"id_enc_hx != ''",'ORDER BY id_enc_hx DESC');
    }
    public function gethxid(int $id,string $select = '*'){
      return $this->db->select($select,'tbl_enc_hora_extra',"id_enc_hx='$id'",'LIMIT 1');
    }
    public function buscar_coincidencia(){
        global $http;
        $busqueda=$http->request->get('busca');

        $query=$this->db->query_select("select * from tblpersonal where rut like '$busqueda%' || nombres like '%$busqueda%' limit 1 ");
        if ($query == true){
          return array('success' => 0, 'nombre' => $query[0][2], 'rut' => $query[0][1]);
          # code...
        }else{
        return array('success' => 1, 'message' => 'Datos no encontrados');
        }
    }
    public function getdatos(string $select = '*',string $filtro) {
        return $this->db->select($select,'tblpersonal',$filtro);
    }
    public function rev_hx() {
      global $http;
      return $this->db->query("SELECT * FROM tbl_enc_hora_extra GROUP BY id_enc_hx");
    }
    private function checkRut(string $rut) {
        $rut = $this->db->scape($rut);
        $query = $this->db->select('rut', 'tmp_horasextra', "rut='$rut'", 'LIMIT 1');
        if (false !== $query) {
            throw new ModelsException('El Rut introducido ya existe.');
        }
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
