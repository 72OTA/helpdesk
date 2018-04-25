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

class Casilleros extends Models implements IModels {
    
    // Contenido del modelo...
    use DBModel;
    
    /**
      * Devuelve un arreglo para la api
      *
      * @return array
    */
    public function verComunas(string $select = '*'){
        return $this->db->select($select,'tblcomuna');
    }
    public function verOrdenesCasilleros(){
        $fecha = date('Y-m-d');
        return $this->db->query_select("SELECT 
        c.id,
        c.n_orden,
        c.rut,
        c.comuna,
        c.actividad,
        c.accion,
        c.observacion,
        c.fecha,
        c.casillero,
        c.id_user,
        c.dia,
        z.descripcion,
        z.id_comuna 
        FROM tbl_orden_casilleros c 
        JOIN tblcomuna z 
        ON c.comuna = z.id_comuna
        WHERE dia='$fecha'");
    }
    public function verOrdenesCasillerosAll(){
        $fecha = date('Y-m-d');
        return $this->db->query_select("SELECT 
        c.id,
        c.n_orden,
        c.rut,
        c.comuna,
        c.actividad,
        c.accion,
        c.observacion,
        c.fecha,
        c.casillero,
        c.id_user,
        c.dia,
        z.descripcion,
        z.id_comuna 
        FROM tbl_orden_casilleros c 
        JOIN tblcomuna z 
        ON c.comuna = z.id_comuna");
    }
    public function verOrdenesCasillerosById(int $id, string $select = '*'){
        return $this->db->select($select,'tbl_orden_casilleros',"id='$id'",'LIMIT 1');
    }
    public function contarOrdenesCasilleros(){
        return $this->db->query_select("SELECT COUNT(*) FROM tbl_orden_casilleros WHERE `dia` = CURRENT_DATE");
    }
    public function visualizarCasillero($select = '*'){
        global $http;
        $nOrden = $http->request->get('Norden');
        $consulta = $this->db->select($select,'tbl_orden_casilleros',"id='$nOrden'",'LIMIT 1');
        $timestamp = $consulta[0]['fecha'];
        $usuario = $consulta[0]['id_user'];
        $user = $this->db->select('*','users',"id_user='$usuario'",'LIMIT 1');
        $user = $user[0]['name'];
        $splitTimeStamp = explode(" ",$timestamp);
        $fecha = $splitTimeStamp[0];
        $hora = $splitTimeStamp[1];
        return array('success' => 1, 'cas'=>$consulta,'fecha'=>$fecha,'hora'=>$hora,'usuario'=>$user);
    }
    public function eliminarCasillero(){
        try{
            global $http;
            $nOrden = $http->request->get('Norden');
            $this->db->delete('tbl_orden_casilleros',"id='$nOrden'",'LIMIT 1');
            return array('success' => 1, 'message'=> 'Casillero Eliminado.');
        }catch (ModelsException $e) {
             return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    public function agregarCasillero(){
        try{
            global $http;

            $nOrden = $http->request->get('nOrden');
            $rut = $http->request->get('rut');
            $comuna = $http->request->get('comuna');
            $actividad = $http->request->get('actividad');
            $accion = $http->request->get('accion');
            $observacion = $http->request->get('observacion');
            $casillero = $http->request->get('casillero');
            $usucompa = (new Model\Users)->getOwnerUser();
            $usuario= $usucompa[0];
            $dia = date('Y-m-d');

            # Verificar que no están vacíos
            if ($this->functions->e($observacion,$rut,$nOrden)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            elseif ($comuna == '--' || $actividad == '--' || $accion == '--'){
                throw new ModelsException('Debe seleccionar una opcion y no dejar la opcion "--" ');
            }
            $consulta=$this->db->query_select("SELECT n_orden FROM tbl_orden_casilleros WHERE n_orden='$nOrden'");
            if($consulta!=false){
            return array('success' => 0, 'message' => 'No se puede ingresar ya que existe ese número de orden');
            }
             $this->db->insert('tbl_orden_casilleros', array(
                'n_orden'=> $nOrden,
                'rut	'=> $rut,
                'comuna'=> $comuna,
                'actividad'=> $actividad,
                'accion'=> $accion,
                'observacion'=> $observacion,
                'casillero'=> $casillero,
                'id_user' => $usuario,
                'dia' => $dia
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
      /**
     * Exportar usuarios a un archivo excel
     *
     * @return void
     */
    public function exporta_excel_casilleros() {
        global $config;

        $objPHPExcel = new PHPExcel();

        //Informacion del excel
        $objPHPExcel->getProperties() ->setCreator("Felipe Andrade V.")
                                      ->setLastModifiedBy("FAV")
                                      ->setTitle("Casilleros");
        //encabezado
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'Numero Orden')
                                            ->setCellValue('B1', 'RUT Cliente')
                                            ->setCellValue('C1', 'Comuna')
                                            ->setCellValue('D1', 'Actividad')
                                            ->setCellValue('E1', 'Accion')
                                            ->setCellValue('F1', 'Observacion')
                                            ->setCellValue('G1', 'Casillero')
                                            ->setCellValue('H1', 'Dia');
        $objPHPExcel->getActiveSheet()->setTitle('Listado Casilleros');
        $u = $this->verOrdenesCasillerosAll();
        $fila = 2;
        foreach ($u as $value => $data) {

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$fila, $data['n_orden'])
                                            ->setCellValue('B'.$fila, $data['rut'])
                                            ->setCellValue('C'.$fila, $data['descripcion'])
                                            ->setCellValue('D'.$fila, $data['actividad'])
                                            ->setCellValue('E'.$fila, $data['accion'])
                                            ->setCellValue('F'.$fila, $data['observacion'])
                                            ->setCellValue('G'.$fila, $data['casillero'])
                                            ->setCellValue('H'.$fila, $data['dia']);
          $fila++;
        }

        //autisize para las columna
        foreach(range('A','H') as $columnID)
        {
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }

        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->setTitle('listado_casilleros');

        // Redirect output to a client’s web browser (Excel2007)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="listado_casilleros.xlsx"');
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

    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
    }
    public function __destruct() {
        parent::__destruct();
        $this->endDBConexion();
    }
}