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

class Avar extends Models implements IModels {
    
    // Contenido del modelo...
    use DBModel;
    
    /**
      * Devuelve un arreglo para la api
      *
      * @return array
    */
    public function verComunasAvar(string $select = '*'){
        return $this->db->select($select,'tblcomuna','avar =1');
    }
    public function verBloque(string $select = '*'){
        return $this->db->select($select,'tblbloque');
    }
    public function avar_reactivos(){
        $avarReac= $this->db->query_select("SELECT name,id_user,hora_ingreso,hora_salida FROM users u inner join tblturnos t on t.rut=u.rut_personal Where rol<>1 And t.fecha=date(now()) and upper(servicio)='BLINDAJE' And u.estado=1 order by hora_ingreso,name");
              $tabla = '<table class="table table-bordered table-striped" id="tblN1">'.
                            '<thead>'.
                                '<tr>'.
                                    '<th>Ejecutivos</th>'.
                                    '<th>Turno</th>'.
                                    '<th>Asignadas</th>'.
                                '</tr>'.
                            '</thead><tbody>';
                            foreach ($avarReac as $a => $value) {
                                $tabla.='<tr><td>'.$value['name'].'</td><td>'.$value['hora_ingreso'].'-'.$value['hora_salida'].'</td><td></td></tr>';
                            }
                       $tabla.= '</tbody><table>';
        return array('success' => 1, 'datos' => $avarReac,'tabla' => $tabla);
    }
    public function cargar_excel(){
        global $http;

        $file = $http->files->get('excel');
        $idusu = (new Model\Users)->getOwnerUser();
        
        $docname="";
        if (null !== $file ){
            $ext_doc = $file->getClientOriginalExtension();
            
            if ($ext_doc<>'xls' and $ext_doc<>'xlsx') return array('success' => 0, 'message' => "Debe seleccionar un archivo valido...");
            
            $docname = 'cargaturno.'.$ext_doc;

            $file->move(API_INTERFACE . 'views/app/temp/', $docname);

            $archivo = API_INTERFACE . 'views/app/temp/'. $docname;
            //carga del excelname
            $objReader = new PHPExcel_Reader_Excel2007();
            $objPHPExcel = $objReader->load($archivo);

            $i=2;
            $param=0;
            $celdablanco = 0;
            $this->db->query_select('truncate tbl_pendiente_blindaje_temp');
            while($param==0){
                try {
                        if ($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue()!=NULL)
                        {
                            $RUT = substr($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue(),0,12);
                            $DESC_ACTIV = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getvalue();
                            $LOCALIDAD = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getvalue();
                            $NMRO_ORDEN = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getvalue();
                            
                            $objPHPExcel->getActiveSheet()->getStyle('G'.$i)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD2);
                            $ano=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getFormattedValue();
                            $krr = explode('-',$ano);
                            $FECHA_COMPROMISO = implode("",$krr);
                            
                            $CODI_HORARIO = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getvalue();
                            $CONTEXTO = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getvalue();
                            $ESTD_ACTIV = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getvalue();
                            $DESC_AREAFUN = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getvalue();
                            
                            $objPHPExcel->getActiveSheet()->getStyle('AD'.$i)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD2);
                            $ano=$objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getFormattedValue();
                            $krr = explode('-',$ano);
                            $FECHA_OT = implode("",$krr);
                            
                            $COMUNA = $objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getvalue();
                            
                            $ACTIVIDAD = $objPHPExcel->getActiveSheet()->getCell('AL'.$i)->getvalue();
                            
                            $NODO = $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getvalue();
                            $SUBNODO = $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getvalue();
                            
                            $TIPO = $objPHPExcel->getActiveSheet()->getCell('AV'.$i)->getvalue();
                            

                            $this->db->Insert('tbl_pendiente_blindaje_temp', array(
                            'RUT'=>$RUT,
                            'DESC_ACTIV'=>$DESC_ACTIV,
                            'LOCALIDAD'=>$LOCALIDAD,
                            'NMRO_ORDEN'=>$NMRO_ORDEN,
                            'FECHA_COMPROMISO'=>$FECHA_COMPROMISO,
                            'CODI_HORARIO'=>$CODI_HORARIO,
                            'CONTEXTO'=>$CONTEXTO,
                            'ESTD_ACTIV'=>$ESTD_ACTIV,
                            'DESC_AREAFUN'=>$DESC_AREAFUN,
                            'FECHA_OT'=>$FECHA_OT,
                            'COMUNA'=>$COMUNA,
                            'ACTIVIDAD'=>$ACTIVIDAD,
                            'UBICACION'=> 'Nivel 1',
                            'NODO'=>$NODO,
                            'SUBNODO'=>$SUBNODO,
                            'marca'=> 'N',
                            'TIPO'=>$TIPO,
                            'REAGENDA'=>$ACTIVIDAD,
                            ));
                            $celdablanco = 0;

                            
                        }else {
                            $celdablanco++;
                        }if ($celdablanco>5) {
                            $param=1;
                        }

                        $i++;
                    } catch (\Exception $e) {
                        if (Files::delete_file(API_INTERFACE . 'views/app/temp/'.$docname)){
                            return array('success' => 0, 'message' => $e->getMessage() );
                        }
                    }
            }
            if($i>3){
                        $this->db->Insert('tbl_historialarchivoscargados', array(
                        'app'=>'Carga de Blindaje',
                        'nombre_archivo'=> $file->getClientOriginalName(),
                        'id_user'=> $idusu['id_user']
                        ));
                        //actualizo nuevas fechas de compromiso, bloque horario y estado flujo => ademas de la ubicacion y ejecutivo para ordenes reagendadas
                            $this->db->query_select("update tbl_pendiente_blindaje pb inner join tbl_pendiente_blindaje_temp pbt on pb.NMRO_ORDEN=pbt.NMRO_ORDEN Set pb.FECHA_COMPROMISO=pbt.FECHA_COMPROMISO,pb.ESTD_ACTIV=pbt.ESTD_ACTIV,pb.CODI_HORARIO=pbt.CODI_HORARIO ");
                            // $this->db->query_select("Insert into tbl_blindaje_hist_gestion_hd(ID_ORDEN,NMRO_ORDEN,FECHA,GESTION_HD,ACCION,OBSERVACION,IDUSUARIO,HORA) Select 0,NMRO_ORDEN,DATE(now()) Fecha,'S/GESTION','REAGENDAMIENTO',REAGENDA,'$idusu',time(now()) from tbl_pendiente_blindaje_temp Where REAGENDA<>'N'");
                            $this->db->query_select("update tbl_pendiente_blindaje Set Ubicacion='Nivel 10',Ejecutivo='' where FINAL<>'FINALIZADA' and fecha_compromiso>date(now()) and (ubicacion='Nivel 1' or Ubicacion='Nivel 2')");
                            $this->db->query_select("update tbl_pendiente_blindaje Set Ubicacion='Nivel 10',Ejecutivo='' where FINAL<>'FINALIZADA' and fecha_compromiso>=date(now()) and (Ubicacion='Nivel 2')");
                            $this->db->query_select("update tbl_pendiente_blindaje Set Ubicacion='Nivel 1',Ejecutivo='' where FINAL<>'FINALIZADA' and fecha_compromiso=date(now()) and ubicacion='Nivel 10'");

                            //Actualizo Nivel a ordenes cargadas para equipo elite
                            $nuevafecha = strtotime ( '-1 day' , strtotime ( date('Y-m-d') ) ) ;
                            $fecha_48 = date ( 'Ymd' , $nuevafecha );
                            $this->db->query_select("Update tbl_pendiente_blindaje_temp Set ubicacion='Nivel 2' where TIPO='NORMAL' AND Fecha_Compromiso<$fecha_48");

                            //envio todas las ordenes que tengan mayor cantidad de en nodo y sub nodo a redes
                            $res1 = $this->db->query_select("Select comuna,nodo,subnodo,count(*) q from tbl_pendiente_blindaje_temp where Actividad='Servicio Tecnico'  group by comuna,nodo,subnodo Order by q Desc");
                            $count=0;
                            foreach ($res1 as $r => $value){
                                if ($value['q'] >= 3){
                                    $this->db->query_select("Update tbl_pendiente_blindaje_temp Set marca='R' Where Actividad='Servicio Tecnico'");
                                }
                                else{
                                    $count++;
                                }
                                if ($count >5) break;
                            }
                            
                        
                            //Actualizo Nivel a ordenes cargadas para futuro    
                            $this->db->query_select("Update tbl_pendiente_blindaje_temp Set ubicacion='Nivel 10' where Fecha_Compromiso>date(now())");
                            
                            //CAMBIO DE EQUIPOS PROACTIVOS
                            $this->db->query_select("Update tbl_pendiente_blindaje_temp Set ubicacion='Nivel 4',marca='N' where TIPO='PROACTIVA'");
                        
                            
                            //finalizo estado flujo para ordenes que no estan en nuevo archivo y sean menor a la fecha de hoy
                            $this->db->query_select("Update tbl_pendiente_blindaje Set ESTD_ACTIV='F1'  where FECHA_COMPROMISO<=date(now()) And NMRO_ORDEN not in (Select NMRO_ORDEN from tbl_pendiente_blindaje_temp)");  
                            $this->db->query_select("Update tbl_pendiente_blindaje Set ESTD_ACTIV='F1'  where Ubicacion='Nivel 4' And NMRO_ORDEN not in (Select NMRO_ORDEN from tbl_pendiente_blindaje_temp)");  
                            
                            //borro todas las ordenes del archivo que ya tenemos cargadas
                            $this->db->query_select("Delete from tbl_pendiente_blindaje_temp where NMRO_ORDEN in (Select NMRO_ORDEN from tbl_pendiente_blindaje) ");  
                
                            $i=$i-2;
                            
                        if (Files::delete_file(API_INTERFACE . 'views/app/temp/'.$docname)){
                        return array('success' => 1, 'message' => "Datos cargados Exitosamente..." );
                    }
                    
                        }
        }else{
            return array('success' => 0, 'message' => "Debe seleccionar un archivo valido...");
            }

    }

    public function distribuye_OT_cargadas_n2(){
        //asigno ordenes nuevas a ejecutivos nivel 1
        $sqn2= $this->db->query_select("select bt.comuna,count(bt.comuna) cantidad from tbl_pendiente_blindaje_temp bt where ubicacion='Nivel 2' group by bt.comuna");
        foreach ($sqn2 as $r => $value){
            $sql= $this->db->query_select("select count(*) q from tbl_blindaje_bloque_ejecutivo where bloque='$row->comuna' And tarea='Nivel 2' And estado=1");
        $query_2=mysqli_query($link,$sql);
        $q = mysqli_fetch_object($query_2);
        if ($q->q > 0){
            $resultd=ceil($row->cantidad / $q->q);
            
            $sql="select bloque,idusuario from tbl_blindaje_bloque_ejecutivo where bloque='$row->comuna' And tarea='Nivel 2' And estado=1";
            $query_3=mysqli_query($link,$sql);
            $i=($q->q)-1;
            while ($r_comuna = mysqli_fetch_object($query_3)){
                $insert="insert into tbl_pendiente_blindaje (RUT,DESC_ACTIV,LOCALIDAD,NMRO_ORDEN,FECHA_COMPROMISO,CODI_HORARIO,CONTEXTO,ESTD_ACTIV,DESC_AREAFUN,FECHA_OT,COMUNA,ejecutivo,ACTIVIDAD,NODO,SUBNODO,MARCA,ubicacion) ";
                $sql="Select RUT,DESC_ACTIV,LOCALIDAD,NMRO_ORDEN,FECHA_COMPROMISO,CODI_HORARIO,CONTEXTO,ESTD_ACTIV,DESC_AREAFUN,FECHA_OT,COMUNA,'$r_comuna->idusuario',ACTIVIDAD,NODO,SUBNODO,MARCA,ubicacion from tbl_pendiente_blindaje_temp where ubicacion='Nivel 2' And comuna='".$r_comuna->bloque."' limit $i,$resultd";    
                
                $sql="Delete from tbl_pendiente_blindaje_temp where NMRO_ORDEN in (Select NMRO_ORDEN from tbl_pendiente_blindaje) ";  
                
                $i--;
            }
            mysqli_free_result($query_3);
        }
        mysqli_free_result($query_2);
     }
         $sql="Select count(*) q from tbl_pendiente_blindaje_temp where ubicacion='Nivel 2' limit 1";
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