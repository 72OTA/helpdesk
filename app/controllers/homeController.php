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
 * Controlador home/
 *
 * @author Brayan Narváez <prinick@ocrend.com>
*/

class homeController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router);
        global $config;

        if (!isset($this->user['id_user']))
            echo $this->template->render('home/home');
        else{
            //redirecciona a pagina de inicio de usuario
            $this->functions->redir($config['site']['url'] . $this->user['pagina_inicio']);
        }

    }

}
