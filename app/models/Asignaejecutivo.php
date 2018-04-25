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

/**
 * Modelo Asignaejecutivo
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Asignaejecutivo extends Models implements IModels {
    // Contenido del modelo...
    use DBModel;
    public function getPerfiles(){
        return $this->db->select('id,nombre','tblperfiles',"1=1 group by nombre order by nombre");
    }
    public function select_perfil(): array {
        global $http;
        $cargo = $http->request->get('select_perfil');

        $nombres = $this->db->select('id_user,name','users',"perfil='$cargo'");

        if ($nombres == true){
            return array('success' => 1, 'message' => $nombres);
        }else{
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }
    public function traer_usuarios(): array {
        try {
            global $http;
            $id_personal = $http->request->get('usuario');
            $seg = $http->request->get('seg');
            $cargo = $http->request->get('cargo');

            $cargos = $this->getPerfiles();
            $selectAsignados = $this->db->select('id_user,name','users',"estado=1 and id_super='$id_personal' order by name");
            $selectNoAsignados = $this->db->select('id_user,name','users',"estado=1 and id_super='0' and id_user<>'$id_personal' and perfil='$seg' order by name");

            return array('success' => 1, 'usuariosAsignados' => $selectAsignados,'usuariosNoAsignados' => $selectNoAsignados,'cargos' => $cargos);

        } catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }
    public function quitar_supervision(): array {
        try {
            global $http;

            $pendiente = "0";
            $id_personal = $http->request->get('mandoId');

            $this->db->update('users',array(
                'id_super' => $pendiente
            ),"id_user='$id_personal'",'LIMIT 1');

            return array('success' => 1, 'men' => $id_personal);
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function asignar_supervision(): array {
        try {
            global $http;
            $id_personal = $http->request->get('mandoId');
            $super = $http->request->get('mandoIdSuper');


            $this->db->update('users',array(
                'id_super' => $super
            ),"id_user='$id_personal'",'LIMIT 1');

            return array('success' => 1, 'men' => $id_personal);
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
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
