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
 * Controlador portal/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class portalController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true
        ));
        global $config;

        $op = '0';
        switch($this->method){
            case 'perfil_usuario':
                echo $this->template->render('portal/perfil_usuario',array(
                    'menu_op' => $op
                ));
            break;
            default:
                echo $this->template->render('portal/portal',array(
                    'menu_op' => $op,
                    'getCumpleañosUsuarios' => (new Model\Varios)->getCumpleañosUsuarios()
                ));
            break;
          }
    }

}
