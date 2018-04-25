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
 * Controlador plataforma/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class plataformaController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 10, 'access' => true]
        ));

        $op = '10';
        switch($this->method){
            case 'mantenedores_crud_masters':
                echo $this->template->render('plataforma/mantenedores_crud_masters/mantenedores_crud_masters', array(
                    'menu_op' => $op
                ));
            break;
            case 'listar_motivos':
                 echo $this->template->render('plataforma/mantenedores_crud_masters/motivos_casilleros/listar_motivos', array(
                    'menu_op' => $op,
                    'motivos_db' => (new Model\MdlPlataformaMaestros)->getMotivosCasilleros('*')
                 ));
                break;
            case 'nuevo_motivos':
                 echo $this->template->render('despacho/estado/nuevo_estado', array(
                     'menu_op' => $op,
                     'db_ubicacion' => $Ubicacion
                 ));
                break;
            case 'editar_motivos':
                 if($this->isset_id and false !== ($data = (new Model\Mdldespacho)->getEstadosById($router->getId()))) {
                     echo $this->template->render('despacho/estado/editar_estado', array(
                        'menu_op' => $op,
                        'db_ubicacion' => $Ubicacion,
                        'db_estado' => $data[0]
                     ));
                 } else {
                     $this->functions->redir($config['site']['url'] . 'despacho/&error=true');
                 }
             break;
            case 'estado_motivos':
                 (new Model\MdlPlataformaMaestros)->update_estado_estado($router->getId(true));
                break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_agenda':
                 echo $this->template->render('plataforma/mantenedores_crud_masters/agendaeps/listar_agenda', array(
                    'menu_op' => $op,
                    'getAllAgendaEPS' => (new Model\MdlPlataformaMaestros)->getAllAgendaEPS()
                 ));
                break;
            case 'nuevo_agenda':
                 echo $this->template->render('plataforma/mantenedores_crud_masters/agendaeps/nuevo_agenda', array(
                     'menu_op' => $op
                 ));
                break;
            case 'editar_agenda':
                 if($this->isset_id and false !== ($data = (new Model\MdlPlataformaMaestros)->getAgendaEPSById($router->getId()))) {
                     echo $this->template->render('plataforma/mantenedores_crud_masters/agendaeps/editar_agenda', array(
                        'menu_op' => $op,
                        'db_agendaeps' => $data[0]
                     ));
                 } else {
                     $this->functions->redir($config['site']['url'] . 'plataforma/&error=true');
                 }
                break;
            case 'estado_agenda':
                 (new Model\MdlPlataformaMaestros)->DeleteAgendaEPSByID($router->getId(true));
                break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_comunas':
                echo $this->template->render('plataforma/mantenedores_crud_masters/comuna/listar_comuna', array(
                    'menu_op' => $op,
                    'comunas_db' => (new Model\MdlPlataformaMaestros)->verComunas()
                ));
                break;
            case 'nueva_comuna':
                echo $this->template->render('plataforma/mantenedores_crud_masters/comuna/nueva_comuna', array(
                    'menu_op' => $op
                ));
                break;
            case 'editar_comuna':
                if($this->isset_id and false !== ($data = (new Model\MdlPlataformaMaestros)->getComunasById($router->getId()))) {
                echo $this->template->render('plataforma/mantenedores_crud_masters/comuna/editar_comuna', array(
                'menu_op' => $op,
                'db_comuna' => $data[0]
                ));
                } else {
                $this->functions->redir($config['site']['url'] . 'plataforma/mantenedores_crud_masters/&error=true');
                }
                break;
            case 'estado_comuna':
                (new Model\MdlPlataformaMaestros)->update_estado_comuna($router->getId(true));
                break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_actividades':
                echo $this->template->render('plataforma/mantenedores_crud_masters/actividad/listar_actividad', array(
                    'menu_op' => $op,
                    'actividades_db' => (new Model\MdlPlataformaMaestros)->verActividad()
                ));
                break;
            case 'nueva_actividad':
                echo $this->template->render('plataforma/mantenedores_crud_masters/actividad/nueva_actividad', array(
                    'menu_op' => $op
                ));
                break;
            case 'editar_actividad':
                if($this->isset_id and false !== ($data = (new Model\MdlPlataformaMaestros)->getActividadById($router->getId()))) {
                echo $this->template->render('plataforma/mantenedores_crud_masters/actividad/editar_actividad', array(
                'menu_op' => $op,
                'db_actividad' => $data[0]
                ));
                } else {
                $this->functions->redir($config['site']['url'] . 'plataforma/mantenedores_crud_masters/&error=true');
                }
                break;
            case 'estado_actividad':
                (new Model\MdlPlataformaMaestros)->update_estado_actividad($router->getId(true));
                break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_zonas':
                echo $this->template->render('plataforma/mantenedores_crud_masters/zona/listar_zona', array(
                    'menu_op' => $op,
                    'zona_db' => (new Model\MdlPlataformaMaestros)->verZonas()
                ));
                break;
            case 'nueva_zona':
                echo $this->template->render('plataforma/mantenedores_crud_masters/zona/nueva_zona', array(
                    'menu_op' => $op
                ));
                break;
            case 'editar_zona':
                if($this->isset_id and false !== ($data = (new Model\MdlPlataformaMaestros)->getZonasById($router->getId()))) {
                echo $this->template->render('plataforma/mantenedores_crud_masters/zona/editar_zona', array(
                'menu_op' => $op,
                'zona_db' => $data[0]
                ));
                } else {
                $this->functions->redir($config['site']['url'] . 'plataforma/mantenedores_crud_masters/&error=true');
                }
                break;
            case 'estado_zona':
                (new Model\MdlPlataformaMaestros)->update_estado_zona($router->getId(true));
                break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_casilleros':
                echo $this->template->render('plataforma/mantenedores_crud_masters/casilleros/listar_casilleros', array(
                    'menu_op' => $op,
                    'casilleros_db' => (new Model\MdlPlataformaMaestros)->verCasilleros(),
                    'zonas_db' => (new Model\MdlPlataformaMaestros)->verZonas(),
                ));
                break;
            case 'nuevo_casillero':
                echo $this->template->render('plataforma/mantenedores_crud_masters/casilleros/nuevo_casillero', array(
                    'menu_op' => $op,
                    'zonas' => (new Model\MdlPlataformaMaestros)->verZonas()
                ));
                break;
            case 'editar_casilleros':
                if($this->isset_id and false !== ($data = (new Model\MdlPlataformaMaestros)->verCasillerosById($router->getId()))) {
                echo $this->template->render('plataforma/mantenedores_crud_masters/casilleros/editar_casilleros', array(
                'menu_op' => $op,
                'casilleros_db' => $data[0],
                 'zonas' => (new Model\MdlPlataformaMaestros)->verZonas()
                ));
                } else {
                $this->functions->redir($config['site']['url'] . 'plataforma/mantenedores_crud_masters/&error=true');
                }
                break;
            case 'estado_casilleros':
                (new Model\MdlPlataformaMaestros)->update_estado_casilleros($router->getId(true));
                break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            default:
                echo $this->template->render('plataforma/plataforma', array(
                    'menu_op' => $op
                ));
            break;
        }

    }

}
