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

class casillerosController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
        ));
        global $config;

        $op = '3';
        $accion = ['Anulacion','Finalizacion','Escalamiento EPS','Falta de Protocolo'];
        $actividad = ['Altas','SSTT','Pet Varias','Traslados'];
        $ordenes = ['Administrativas','Tecnico','TRASLADO,REVERSAS'];
        switch($this->method){
            case 'listar_casilleros':
                echo $this->template->render('casilleros/listar_casilleros',array(
                    'menu_op' => $op,
                    'casilleros' => (new Model\Casilleros)->verOrdenesCasilleros(),
                    'user' => (new Model\Users)->getOwnerUser()
                ));
            break;
            case 'agregar':
                echo $this->template->render('casilleros/nuevo_casillero',array(
                    'menu_op' => $op,
                    'comunas' => (new Model\Casilleros)->verComunas(),
                    'casilleros' => (new Model\MdlPlataformaMaestros)->verCasilleros(),
                    'accion' => $accion,
                    'actividad' => $actividad,
                ));
            break;
            case 'editar':
            if($this->isset_id and false !== ($data = (new Model\Casilleros)->verOrdenesCasillerosById($router->getId(true)))) {
                echo $this->template->render('casilleros/editar_casillero',array(
                    'menu_op' => $op,
                    'comunas' => (new Model\Casilleros)->verComunas(),
                    'casilleros' => $data[0],
                    'accion' => $accion
                ));
                } else {
                $this->functions->redir($config['site']['url'] . 'administracion/&error=true');
              }
            break;
            case 'excell':
                echo $this->template->render('casilleros/excell',array(
                    'menu_op' => $op,
                    'casilleros' => (new Model\Casilleros)->verOrdenesCasillerosAll(),
                    'user' => (new Model\Users)->getOwnerUser(),
                    'fecha' => date('Y-m-d')
                ));
            break;
            case 'exportar':
               (new Model\Casilleros)->exporta_excel_casilleros();
            break;
            case 'ajedrez':
                echo $this->template->render('casilleros/chess',array(
                ));
            break;
            default:
                echo $this->template->render('casilleros/principal',array(
                    'menu_op' => $op,
                    'casilleroQ' => (new Model\Casilleros)->contarOrdenesCasilleros(),
                    'casilleros' => (new Model\MdlPlataformaMaestros)->verCasilleros(),
                    'zona' => (new Model\MdlPlataformaMaestros)->verZonas(),
                    'ordenes' => $ordenes
                ));
            break;
        }

    }

}