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
use Ocrend\Kernel\Helpers\Strings;
use Ocrend\Kernel\Helpers\Files;
/**
 * Modelo Empresa
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Empresa extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    // Contenido del modelo...


		/**
      * Obtiene elementos de Empresa en empresa
      *
      * @param string $select: Elementos de empresa a seleccionar
      *
      * @return false|array: false si no hay datos.
      *                     array con los datos.
    */
    final public function get(string $select = '*') {
      $empresa = $this->db->select($select,'empresa');
      return $empresa[0];
    }

    /**
     * Realiza la acción de actualización dentro del sistema
     *
     * @return array : Con información de éxito/falla al actualizar empresa.
     */
    public function update_empresa() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $nombre_empresa = $http->request->get('nombre_empresa');
            $telefono = $http->request->get('telefono');
            $email = $http->request->get('email');
            $impuesto = $http->request->get('impuesto');
            $tipo_moneda = $http->request->get('tipo_moneda');
            $direccion = $http->request->get('direccion');
            $ciudad = $http->request->get('ciudad');
            $comuna = $http->request->get('comuna');
            $region = $http->request->get('region');

            # Verificar que no están vacíos
            if ($this->functions->e($nombre_empresa, $impuesto, $tipo_moneda, $direccion, $ciudad, $comuna)) {
                throw new ModelsException('Todos los campos con <b>*</b> son necesarios');
            }


            # Verificar email
            if ($email != ""){
              if (!Strings::is_email($email)) {
                  throw new ModelsException('El email no tiene un formato válido.');
              }
            }

            $file = $http->files->get('logo');
            $ext_foto="";
            if (null !== $file && true == Files::is_image($file->getClientOriginalName()) ){
              $foto = 1;
              $ext_foto = $file->getClientOriginalExtension();
              $img_name = 'logo.'.$ext_foto;

              $file->move(API_INTERFACE . 'views/app/images/', $img_name);
            }

            # Actualiza empresa
            $this->db->update('empresa',array(
              'nombre' => $nombre_empresa,
              'email' => $email,
              'telefono' => $telefono,
              'impuesto' => $impuesto,
              'tipo_moneda' => $tipo_moneda,
              'direccion' => $direccion,
              'ciudad' => $ciudad,
              'comuna' => $comuna,
              'region' => $region
            ),"id_empresa = 1",'LIMIT 1');

            if ($ext_foto != "" ){
              $this->db->update('empresa',array(
                'ext_logo' => $ext_foto
              ),"id_empresa = 1",'LIMIT 1');
            }

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
      * __construct()
    */
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
    }

    /**
      * __destruct()
    */
    public function __destruct() {
        parent::__destruct();
        $this->endDBConexion();
    }
}
