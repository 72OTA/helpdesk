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
 * Controlador redes/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class redesController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true
        ));
        global $config;

        $op = '4';
        $estatus = ['REDES','DESPACHO','FINALIZADA'];
        //opcion correspondiente a menú
        switch($this->method){
            case 'redes':
                echo $this->template->render('redes/principal',array(
                    'menu_op' => $op,
                    'user' => (new Model\Users)->getOwnerUser()
                ));
            break;
            case 'listar_redes':
                echo $this->template->render('redes/listar_redes',array(
                    'menu_op' => $op,
                    'user' => (new Model\Users)->getOwnerUser(),
                    'redes' => (new Model\Redes)->verOrdenesRedes()
                ));
            break;
            case 'editar':
            if($this->isset_id and false !== ($data = (new Model\Redes)->verOrdenesRedesById($router->getId(true)))) {
                echo $this->template->render('redes/editar',array(
                    'menu_op' => $op,
                    'comunas' => (new Model\Casilleros)->verComunas(),
                    'redes' => $data[0]
                ));
                } else {
                $this->functions->redir($config['site']['url'] . 'administracion/&error=true');
              }
            break;
            case 'agregar':
                echo $this->template->render('redes/agregar',array(
                    'menu_op' => $op,
                    'user' => (new Model\Users)->getOwnerUser(),
                    'comunas' => (new Model\Casilleros)->verComunas(),
                    'estatus' => $estatus
                    
                ));
            break;
            default:
                echo $this->template->render('redes/principal', array(
                    'menu_op' => $op,
                ));
            break;
        }

    }

}

