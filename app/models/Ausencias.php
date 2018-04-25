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
use PHPExcel;
use PHPExcel_IOFactory;

/**
 * Modelo Ausencias
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Ausencias extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

	// registra nueva ausencia
    // OK JJARA
    public function registrar_ausencia() : array {
        global $http;
        try
        {
            # Obtener los datos $_POST
            $rut= $http->request->get('textrut');
            $nombre= $http->request->get('textnombre');
            $tipolicencia=$http->request->get('selectinasistencias');
            $descripcion=$http->get('txtdescripcion');
            $datedesde=$http->get('iddesde');
            $datehasta=$http->get('idhasta');
            $usuarioregistra=$http->get('valorusu');
            $fechaoculta=$http->get('fechaoculta');
            $id_area=$http->get('area');

            if ($this->functions->e($descripcion,$datedesde,$datehasta,$rut,$nombre)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            elseif($rut == 'Seleccione Nombre'){
                throw new ModelsException('Debe seleccionar un usuario');
            }

            $this->db->insert('tblausencias', array(
                'rut'=> $rut,
                'tipo_ausencia'=> $tipolicencia,
                'observacion'=> $descripcion,
                'desde'=> $datedesde,
                'hasta'=> $datehasta,
                'usu_registra'=> $usuarioregistra,
                'id_area'=> $id_area
            ));


            return array('success' => 1, 'message' => 'Guardado con exito');

        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    // Modifica ausencia
    // OK JJARA
    public function modificar_ausencia() : array {
        global $http;

        try
        {
            # Obtener los datos $_POST
            $modificaid=$http->request->get('modificaid');
            $modtipolicencia=$http->request->get('selectmodificar');
            $moddescripcion=$http->get('modificardescripcion');
            $moddesde=$http->get('modificardesde');
            $modhasta=$http->get('modificarhasta');
            $fechamod=$http->request->get('fechaoculta2');

            if ($this->functions->e($moddescripcion)) {
                throw new ModelsException('Todos los datos son necesarios'.$modificaid);
            }
            $this->db->query("UPDATE tblausencias set tipo_ausencia='$modtipolicencia', observacion='$moddescripcion', desde='$moddesde', hasta='$modhasta'
            WHERE id_tblausencias='$modificaid'");

            return array('success' => 1, 'message' => "Datos Modificados Correctamente");
        }
            catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    // Obtiene Datos Tabla personal para busqueda autocomplete
    // OK JJARA
    public function getdatospersonal(){
        return $this->db->query_select("select rut_personal,name from users where rut_personal>0 and estado=1 order by name");
    }
    // Obtiene Datos de ausencia para modifcar
    // OK JJARA
    public function get_ausencia_byId(int $id){
        return $this->db->query_select("select tblausencias.*, users.name from
        tblausencias inner join users on tblausencias.rut=users.rut_personal where id_tblausencias='$id' limit 1");
    }
    // Listar todas las Ausencias hasta las 60 ultimas
    // OK JJARA
    public function getAllAusencias($fechadesde,$fechahasta){
        return  $this->db->query_select("select @rownum:=@rownum+1 as rownum,id_tblausencias,a.rut,tipo_ausencia,desde,hasta,fechamod,u.name,p.name nombres,usu_registra,observacion from (select @rownum:=0) r,(tblausencias a inner join users p on a.rut=p.rut_personal) inner join users u on a.usu_registra=u.id_user where (desde<='$fechadesde' and hasta>='$fechadesde') or (desde<='$fechahasta' and hasta>='$fechahasta') ");
    }
    // Muestra Observacion correspondiente a ausencia seleccionada
    // OK JJARA
    public function ver_observacion_ausencias(){
        global $http;
        $id=$http->request->get('idprueba');
        $verdatos=$this->db->query_select("select observacion from tblausencias where id_tblausencias='$id'");

        return array('success' => 1, 'message' => $verdatos[0]['observacion']);
    }
    // Carga rut y nombre en inputs correspondientes al registro de ausencias
    // OK JJARA
    public function buscar_rut(){

        global $http;
        $rut=$http->request->get('busrut');
        $dat2=$this->db->query_select("select rut_personal,name from users where (rut_personal like '$rut%' || name like '%$rut%') limit 1 ");
        if ($dat2 == false){
            return array('success' => 1, 'message' => 'Datos no encontrados');
        }else{
            return array('success' => 0, 'message' => $dat2[0]['name'], 'message1' => $dat2[0]['rut_personal']);
        }
    }
    // Valida si el usuario es el creador de la ausencia y luego elimina
    // OK JJARA
    public function validacion_eliminar() {
        global $http;
        $usuario=$usucompa = (new Model\Users)->getOwnerUser();
        $idausencias=$http->request->get('idprueba');

        $consulta=$this->db->select('*','tblausencias',"id_tblausencias='$idausencias' and usu_registra='".$usuario['id_user']."'","limit 1");
        if ($consulta==true){
            $this->db->query("delete from tblausencias where id_tblausencias='$idausencias';");
            return array('success' => 1, 'message' => "Registro eliminado");
        }else{
            return array('success' => 0, 'message' => 'Usted no tiene privilegios para eliminar esta ausencia');
        }
    }
    // filtra ausencias correspondientes a la fecha especificada
    // OK JJARA
    public function revisar_por_fecha(){
        global $http;

        $fechadesde=$http->request->get('revdesde');
        $fechahasta=$http->request->get('revhasta');

        $usucompa = (new Model\Users)->getOwnerUser();

        $datosfecha=$this->getAllAusencias($fechadesde,$fechahasta);

        if ($datosfecha === false){
            return array('success' => 0, 'message' => $fechadesde);
        }else{
            $json = array(
            "aaData"=>array(
            )
            );
            foreach ($datosfecha as $key => $value) {

                if ($value['usu_registra'] == $usucompa['id_user']){
                    $html='<a data-toggle="tooltip" data-placement="top" title="Modificar" class="btn btn-warning btn-sm" href="rrhh/modificarausencia/'.$value['id_tblausencias'].'">
                    <i class="glyphicon glyphicon-edit""></i></a>
                    <a data-toggle="tooltip" data-placement="top" name="btneliminar" onclick="validacion_eliminar('.$value['id_tblausencias'].')"
                    class="btn btn-danger btn-sm">
                    <i class="glyphicon glyphicon-remove"></i>
                    </a>';
                }else{
                    $html='<a data-toggle="tooltip" data-placement="top" title="Modificar" disabled="true" class="btn btn-warning btn-sm"">
                    <i class="glyphicon glyphicon-edit""></i></a>
                    <a data-toggle="tooltip" data-placement="top" disabled="true" name="btneliminar""
                    class="btn btn-danger btn-sm">
                    <i class="glyphicon glyphicon-remove"></i>
                    </a>';
                }
                $html.=' <a data-toggle="tooltip" data-placement="top" name="btnver" class="btn btn-success btn-sm" onclick="verdescripcion('.$value['id_tblausencias'].')">
                    <i class="glyphicon glyphicon-eye-open"></i>
                    </a>';

                $json['aaData'][] = array($value['rownum'],$value['nombres'],$value['tipo_ausencia'],$value['desde'],$value['hasta'],$value['name'],$value['fechamod'], $html );
            }


            $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
            $fh = fopen(API_INTERFACE . "views/app/temp/result_cons_".$usucompa['id_user'].".dbj", 'w');
            fwrite($fh, $jsonencoded);
            fclose($fh);
            return array('success' => 1, 'message' => "result_cons_".$usucompa['id_user'].".dbj" );
        }
    }
    // Exporta a excel ausencias segun filtro por fechas
    // OK JJARA
    public function exporta_excel_ausencias() {

        global $http,$config;
        $desde=$http->query->get('desde');
        $hasta=$http->query->get('hasta');

        $u = $this->getAllAusencias($desde,$hasta);

        if ( $u != false ){

            $objPHPExcel = new PHPExcel();

            //Informacion del excel
            $objPHPExcel->getProperties() ->setCreator("Jorge Jara H.")
                                          ->setLastModifiedBy("JJH")
                                          ->setTitle("Ausencias");
            //encabezado
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'Rut');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'Nombre');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'Tipo Ausencia');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'Desde');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'Hasta');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', 'Observacion');

            $fila = 2;
            foreach ($u as $value => $data) {

              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$fila, $data['rut']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$fila, $data['nombres']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$fila, $data['tipo_ausencia']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$fila, $data['desde']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$fila, $data['hasta']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$fila, $data['observacion'] );

              $fila++;
            }

            //autisize para las columna
            foreach(range('A','F') as $columnID)
            {
                $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
            }

            $objPHPExcel->setActiveSheetIndex(0);

            $objPHPExcel->getActiveSheet()->setTitle('listado_ausencias');

            // Redirect output to a client’s web browser (Excel2007)
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="listado_ausencias.xlsx"');
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
        else{
            # Redireccionar a la página principal del controlador
            $this->functions->redir($config['site']['url'] . 'rrhh/revisarausencias');
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
