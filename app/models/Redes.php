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
use Ocrend\Kernel\Helpers\Files;
use PHPExcel;
use PHPExcel_IOFactory;
use PHPExcel_Reader_Excel2007;
use PHPExcel_Style_NumberFormat;
/**
 * Modelo Avar
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Redes extends Models implements IModels {
    
    // Contenido del modelo...
    use DBModel;
    
    /**
      * Devuelve un arreglo para la api
      *
      * @return array
    */
  
    public function verOrdenesRedes(){
        try{
            $fecha = date('Y-m-d');
            $consulta = $this->db->query_select("SELECT *
            FROM tbl_orden_redes
            WHERE fecha='$fecha'");
            if($consulta == false){
                return "No hay datos";
            }else{
                return $consulta;
            }
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
        
    }

    public function verOrdenesRedesById(int $id, string $select = '*'){
        return $this->db->select($select,'tbl_orden_redes',"id_redes='$id'",'LIMIT 1');
    }
   
    public function visualizarRedes($select = '*'){
        global $http;
        $nOrden = $http->request->get('Norden');
        $consulta = $this->db->select($select,'tbl_orden_redes',"id_redes='$nOrden'",'LIMIT 1');
        $fecha = $consulta[0]['fecha'];
        $usuario = $consulta[0]['analista'];
        $user = $this->db->select('*','users',"id_user='$usuario'",'LIMIT 1');
        $user = $user[0]['name'];
        return array('success' => 1, 'cas'=>$consulta,'fecha'=>$fecha,'usuario'=>$user);
    }
    public function eliminarRedes(){
        try{
            global $http;
            $nOrden = $http->request->get('Norden');
            $this->db->delete('tbl_orden_redes',"id_redes='$nOrden'",'LIMIT 1');
            return array('success' => 1, 'message'=> 'Orden de Redes Eliminada.');
        }catch (ModelsException $e) {
             return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    public function agregarRedes(){
        try{
            global $http;

            $rutC = $http->request->get('rutC');
            $nOrden = $http->request->get('nOrden');
            $nodo = $http->request->get('nodo');
            $idTec = $http->request->get('idTec');
            $idRed = $http->request->get('idRed');
            $nameSup = $http->request->get('nameSup');
            $comuna = $http->request->get('comuna');
            $corresponde = $http->request->get('corresponde');
            $estatus = $http->request->get('estatus');
            $observacion = $http->request->get('observacion');
            $usucompa = (new Model\Users)->getOwnerUser();
            $usuario= $usucompa[0];
            $dia = date('Y-m-d');

            # Verificar que no están vacíos
            if ($this->functions->e($observacion,$rutC,$nOrden,$nodo,$idTec,$idRed,$nameSup)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            elseif ($comuna == '--' || $corresponde == '--' || $estatus == '--'){
                throw new ModelsException('Debe seleccionar una opcion y no dejar la opcion "--" ');
            }
            $consulta=$this->db->query_select("SELECT n_orden FROM tbl_orden_redes WHERE n_orden='$nOrden'");
            if($consulta!=false){
            return array('success' => 0, 'message' => 'No se puede ingresar ya que existe ese número de orden');
            }
             $this->db->insert('tbl_orden_redes', array(
                'rut_cliente'=> $rutC,
                'n_orden'=> $nOrden,
                'nodo_cuadrante'=> $nodo,
                'comuna'=> $comuna,
                'id_tecnico_ops'=> $idTec,
                'id_tecnico_red'=> $idRed,
                'nombre_super'=> $nameSup,
                'estatus_orden'=> $estatus,
                'corresponde'=> $corresponde,
                'observacion'=> $observacion,
                'analista' => $usuario,
                'fecha' => $dia
            ));

            return array('success' => 1, 'message' => 'Guardado con exito');
        }catch (ModelsException $e) {
             return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editarCasillero(){
        try{
            global $http;

            $nOrden = $http->request->get('nOrden');
            $rut = $http->request->get('rut');
            $comuna = $http->request->get('comuna');
            $actividad = $http->request->get('actividad');
            $accion = $http->request->get('accion');
            $observacion = $http->request->get('observacion');
            $id = $http->request->get('id');
            $casillero = $http->request->get('casillero');
            

            # Verificar que no están vacíos
            if ($this->functions->e($observacion,$rut,$nOrden)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            elseif ($comuna == '--' || $actividad == '--' || $accion == '--'){
                throw new ModelsException('Debe seleccionar una opcion y no dejar la opcion "--" ');
            }

             $this->db->update('tbl_orden_casilleros', array(
                'n_orden'=> $nOrden,
                'rut'=> $rut,
                'comuna'=> $comuna,
                'actividad'=> $actividad,
                'accion'=> $accion,
                'observacion'=> $observacion,
                'casillero'=> $casillero
            ),"id='$id'");

            return array('success' => 1, 'message' => 'Casillero modificado con exito');
            }catch (ModelsException $e) {
                return array('success' => 0, 'message' => $e->getMessage());
            }
    }
  
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
    }
    public function __destruct() {
        parent::__destruct();
        $this->endDBConexion();
    }
}