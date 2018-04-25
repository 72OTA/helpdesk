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
 * Controlador administracion/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class administracionController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'only_admin' => true
        ));
        global $config;

        $u = new Model\Users($router);
        $op = '99';
        switch($this->method){
          case 'empresa':
            echo $this->template->render('administracion/empresa', array(
              'menu_op' => $op
             ));
              break;
          case 'perfiles':
            echo $this->template->render('administracion/perfiles', array(
              'menu_op' => $op,
              'db_perfiles' => $u->getPerfiles()
             ));
              break;
          case 'usuario':
            echo $this->template->render('administracion/listado_usuarios', array(
              'menu_op' => $op,
              'db_users' => $u->getUsers('*','1=1 order by name')
            ));
              break;
          case 'registro_user': echo $this->template->render('administracion/usuarios', array(
            'menu_op' => $op,
            'db_perfiles' => $u->getPerfiles(),
            'db_menu' => $u->getAllMenu()
           ));
            break;
          case 'editar_user':
            if($this->isset_id and false !== ($data = $u->getUserById($router->getId(true)))) {
              echo $this->template->render('administracion/edit_user', array(
                'menu_op' => $op,
                'db_users' => $data[0],
                'db_perfiles' => $u->getPerfiles(),
                'db_menu' => $u->getAllMenu()
              ));
            } else {
              $this->functions->redir($config['site']['url'] . 'administracion/&error=true');
            }
            break;
          case 'editar_perfil_user':
              if($this->isset_id and false !== ($data = $u->getUserById($router->getId(true)))) {
                echo $this->template->render('administracion/editar_perfil_user', array(
                  'menu_op' => $op,
                  'db_users' => $data[0],
                  'db_all_menu' => $u->getAllMenu(),
                  'db_menu_user' => $u->getMenuUser($data[0]['id_user'])
                ));
              } else {
                $this->functions->redir($config['site']['url'] . 'administracion/&error=true');
              }
              break;
          case "estado_user":
              $u->update_estado_user();
              break;
          case "exporta_excel_users":
              $u->exporta_excel_users();
              break;
          case "generar_pdf_users":
              $u->generar_pdf_users();
              break;
          default:
            echo $this->template->render('administracion/administracion',array(
              'menu_op' => $op,
              'q_perfiles' => count($u->getPerfiles()),
              'q_users' => count($u->getUsers('*','estado = 1')),
              'q_users_online' => count($u->getUsers('*','online_fecha > 0')),
              'db_user_online' => $u->getUsers('name,email,perfil','online_fecha > 0'),
              'last_user' => $u->getUsers('name,email','estado = 1 order by id_user desc Limit 5')
             ));
            break;
        }
    }

}
