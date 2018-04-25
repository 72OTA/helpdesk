<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace app\controllers;

use app\models as Model;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;

/**
 * Controlador rrhh/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class rrhhController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 2, 'access' => true]
        ));
        global $config;
        $op = '2';

        switch($this->method){
// Asigna Ejecutivo-----------------------------------------------------------------------------------------------------------------
            case 'asignar_ejecutivo':
                echo $this->template->render('rrhh/asignar_ejecutivo/asignar_ejecutivo', array(
                    'menu_op' => $op,
                    'perfiles' => (new Model\Asignaejecutivo)->getPerfiles()
                ));
            break;
// Horas Extras---------------------------------------------------------------------------------------------------------------------
            case 'revisar_horas_extra':
                echo $this->template->render('rrhh/horasextra/revisar_horas_extra', array(
                    'menu_op' => $op,
                    'opcion' => 'RRHH',
                    'horas_extras' => (new Model\Horasextra)->rev_hx(),
                ));
            break;
            case 'registra_horasextra':
                $user = (new Model\Users)->getOwnerUser();
                echo $this->template->render('rrhh/horasextra/ingreso_horas_extra', array(
                    'menu_op' => $op,
                    'db_users'=>(new Model\Horasextra)->getdatos('*','estado=1'),
                    'horas_extras' => (new Model\Horasextra)->gethxtmp($user['id_user']),
                    'ultimo_id' => (new Model\Horasextra)->get_lastid($user['id_user'])
                ));
            break;
            case 'modificar':
                if($this->isset_id and false != ($dato=(new Model\Horasextra)->gethxid($router->getId()))){
                    echo $this->template->render('rrhh/horasextra/modificar_solicitud_hora_extra', array(
                        'menu_op' => $op,
                        'horas_extras' => (new Model\Horasextra)->get_hx_users(),
                        'db_users'=> (new Model\Horasextra)->getdatos('*','estado=1'),
                        'modifica_hx' => $dato[0])
                    );
                }
            break;
            case 'mostrar_hora_extra':
                if($this->isset_id and false != ($dato=(new Model\Horasextra)->gethxid($router->getId()))){
                    echo $this->template->render('rrhh/horasextra/mostrar_hora_extra', array(
                        'opcion' => 'RRHH',
                        'horas_extras' => (new Model\Horasextra)->get_hx_users(),
                        'id' => $dato[0]
                    ));
                }
            break;
            case 'revisar_horas_extras_pendientes':
                echo $this->template->render('rrhh/horasextra/revisar_horas_extras_pendientes', array(
                    'opcion' => 'RRHH',
                    'horas_extras' => (new Model\Horasextra)->gethx('*',"estado='Pendiente'"),
                ));
            break;
// Horas Extras---------------------------------------------------------------------------------------------------------------------
// ausencias------------------------------------------------------------------------------------------------------------------------
            case 'revisarausencias':
                echo $this->template->render('rrhh/ausencias/revisarausencias', array(
                    'menu_op' => $op,
                    'db_inasistencias' => (new Model\Ausencias)->getAllAusencias(date('Y-m-d'),date('Y-m-d'))
                ));
            break;
            case 'ausencias':
                echo $this->template->render('rrhh/ausencias/ausencias', array(
                    'menu_op' => $op,
                    'db_users'=>(new Model\Ausencias)->getdatospersonal('*','estado=1')
                ));
            break;
            case 'modificarausencia':
                if($this->isset_id and false !== ($dato=(new Model\Ausencias)->get_ausencia_byId($router->getId(true)))){
                    echo $this->template->render('rrhh/ausencias/modificarausencia', array(
                        'menu_op' => $op,
                        'db_modifica'=> $dato[0]
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'rrhh/&error=true');
                }
            break;
            case "exporta_excel_ausencias":
                (new Model\Ausencias)->exporta_excel_ausencias();
            break;
//-------------------------------------------------------------------------------------------------------------------------------
//Turnos ------------------------------------------------------------------------------------------------------------------------
            case 'cargar_turnos':
                echo $this->template->render('rrhh/turnos/carga_de_turnos', array(
                    'menu_op' => $op,
                    'db_archivos' => (new Model\Varios)->listar_archivos_cargados('Carga de Turnos')
                ));
            break;
            case 'revisar_turnos_plataforma':
                echo $this->template->render('rrhh/turnos/revisar_turnos', array(
                    'menu_op' => $op,
                    'cargar_turnos'=>(new Model\Turnos)->getAllTurnosDia(date('Y-m-d')),
                    'getEjecutivosFull' => (new Model\Turnos)->getEjecutivosFull()
                ));
            break;
            case 'exportar_turnos_plataforma_excel':
                (new Model\Turnos)->exportar_excel_turno_plataforma();
            break;
            case 'ver_turno_propio':
                $actual = strtotime(date('d-m-Y'));
                $actual = strtotime("1 month", $actual);
                $mesmenos = date("Y-m-d", strtotime("-4 month", $actual));
                $nmeses = (new Model\Varios)->diferencia_meses($mesmenos,date('Y-m-d'));
                $nmeses = intval($nmeses[0]);

                for ($i=0; $i<=$nmeses; $i++){
                    if ($i != 0 ) $actual = strtotime("-1 month", $actual);
                    $fechas[]=array('mesano_print' => date("M-Y", $actual),'mesano' => date("Y-m", $actual), 'ano' =>date("Y", $actual),'mes' =>date("m", $actual) );
                }

                $u = (new Model\Users)->getOwnerUser();
                echo $this->template->render('rrhh/turnos/turno_propio', array(
                    'menu_op' => $op,
                    'carga_turno'=>(new Model\Turnos)->GetTurnoPropio($u['rut_personal'],date('Y-m')),
                    'super'=>(new Model\Turnos)->GetSupervisorUsuario($u['id_super']),
                    'fechas_db'=>$fechas
                ));
            break;
            case 'revisar_turno_equipo_dia':
                $u = (new Model\Users)->getOwnerUser();
                echo $this->template->render('rrhh/turnos/turno_equipo_asignado', array(
                    'menu_op' => $op,
                    'getTurnoEquipoAsignado'=>(new Model\Turnos)->getTurnoEquipoAsignado($u['id_user'],date('Y-m-d')),
                    'getDatosEquipoAsignado'=>(new Model\Turnos)->getDatosEquipoAsignado($u['id_user'])
                ));
            break;
//-------------------------------------------------------------------------------------------------------------------------------
            default:
                echo $this->template->render('rrhh/rrhh', array(
                    'menu_op' => $op,
                    'getAllTurnosDia' => (new Model\Turnos)->getAllTurnosDia(date('Y-m-d'),'p.name'),
                    'GetAllTurnoDiaResumen' => (new Model\Turnos)->GetAllTurnoDiaResumen(date('Y-m-d'))
                ));
            break;
        }

    }

}
