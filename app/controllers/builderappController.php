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

class builderappController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'only_admin' => true
        ));
        global $config;

        $op = '98';
        switch($this->method){
            case 'constructor':
                echo $this->template->render('builderapp/constructor',array(
                    'menu_ppal' => (new model\Varios)->getMenuPPAL(),
                    'detalle_tmp' => (new model\Builderapp)->getTmpdetalle(),
                    'menu_op' => $op
                ));
            break;
            default:
                echo $this->template->render('builderapp/principal',array(
                    'menu_op' => $op
                ));
            break;
        }

    }

}
