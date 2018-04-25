<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ocrend\Kernel\Controllers;

use app\models as Model;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Helpers\Functions;

/**
 * Clase para conectar todos los controladores del sistema y compartir la configuración.
 * Inicializa aspectos importantes de una página, como el sistema de plantillas twig.
 *
 * @author Brayan Narváez <prinick@ocrend.com>
 */

abstract class Controllers {

    /**
      * Obtiene el objeto del template
      *
      * @var \Twig_Environment
    */
    protected $template;

    /**
      * Verifica si está definida la ruta /id como un integer >= 1
      *
      * @var bool
    */
    protected $isset_id = false;

    /**
      * Tiene el valor de la ruta /método
      *
      * @var string|null
    */
    protected $method;

    /**
      * Contiene una instancia del helper para funciones
      *
      * @var \Ocrend\Kernel\Helpers\Functions
    */
    protected $functions;

    /**
      * Arreglo con la información del usuario conectado actualmente.
      * Arreglo con el menu del usuario conectado
      * @var array
    */
    protected $user = array();

    protected $menu_user = array();

    protected $empresa_db = array();

    /**
      * Contiene información sobre el estado del usuario, si está o no conectado.
      *
      * @var bool
    */
    private $is_logged = false;

    /**
      * Parámetros de configuración para el controlador con la forma:
      * 'parmáetro' => (bool) valor
      *
      * @var array
    */
    private $controllerConfig;

    /**
      * Configuración inicial de cualquier controlador
      *
      * @param IRouter $router: Instancia de un Router
      * @param array|null $configController: Arreglo de configuración con la forma
      *     'twig_cache_reload' => bool, # Configura el autoreload del caché de twig
      *     'users_logged' => bool, # Configura el controlador para solo ser visto por usuarios logeados
      *     'users_not_logged' => bool, # Configura el controlador para solo ser visto por !(usuarios logeados)
      *
    */
    protected function __construct(IRouter $router, $configController = null) {
        global $config, $http, $session;

        # Instanciar las funciones
        $this->functions = new Functions();

        # Verificar si está logeado el usuario
        //$this->is_logged = null != $session->get('user_id') && $session->get('unique_session') == $config['sessions']['unique'];
        $this->is_logged = null != $session->get($config['sessions']['unique'] . '_user_id');

        # Establecer la configuración para el controlador
        $this->setControllerConfig($configController);

        # Twig Engine http://gitnacho.github.io/Twig/
        $this->template = new \Twig_Environment(new \Twig_Loader_Filesystem('./app/templates/'), array(
            # ruta donde se guardan los archivos compilados
            'cache' => './app/templates/.cache/',
            # false para caché estricto, cero actualizaciones, recomendado para páginas 100% estáticas
            'auto_reload' => $this->controllerConfig['twig_cache_reload'],
            # en true, las plantillas generadas tienen un método __toString() para mostrar los nodos generados
            'debug' => $config['framework']['debug']
        ));

        # Request global
        $this->template->addGlobal('get', $http->query->all());
        $this->template->addGlobal('server', $http->server->all());
        $this->template->addGlobal('session', $session->all());
        $this->template->addGlobal('config', $config);
        $this->template->addGlobal('is_logged', $this->is_logged);


        # Datos del usuario actual
        if ($this->is_logged) {
          $this->user = (new Model\Users)->getOwnerUser();
          $this->template->addGlobal('owner_user', $this->user);

          if ($this->user['rol'] == 1)  $this->user_admin=true;

          $this->menu_user = (new Model\Users)->getMenuOwnerUser();
          $this->template->addGlobal('menu_user', $this->menu_user );

          $user = $this->user;
          (new Model\Users)->update_online_user($user['id_user'],'in');

        }

        $this->empresa_db = (new Model\Empresa)->get();
        $this->template->addGlobal('empresa_db', $this->empresa_db );



        # Extensiones
        $this->template->addExtension($this->functions);

        # Debug disponible en twig
        if($config['framework']['debug']) {
          $this->template->addExtension(new \Twig_Extension_Debug());
        }

        # Verificar para quién está permitido este controlador
        $this->knowVisitorPermissions();

        # Auxiliares
        $this->method = $router->getMethod();
        $this->isset_id = $router->getID(true);
    }

    /**
     * Establece los parámetros de configuración de un controlador
     *
     * @param IRouter $router: Instancia de un Router
     * @param array|null $config: Arreglo de configuración
     *
     * @return void
     */
    private function setControllerConfig($config) {
      # Configuración por defecto
      $this->controllerConfig['twig_cache_reload'] = true;
      $this->controllerConfig['users_logged'] = false;
      $this->controllerConfig['users_not_logged'] = false;
      $this->controllerConfig['only_admin'] = false;
      $this->controllerConfig['access_menu'] = false;

      # Establecer las configuraciones pasadas
      if (null != $config) {
        # Configura el autoreload del caché de twig
        if (array_key_exists('twig_cache_reload', $config)) {
          $this->controllerConfig['twig_cache_reload'] = (bool) $config['twig_cache_reload'];
        }
        # Configura el controlador para solo ser visto por usuarios logeados
        if (array_key_exists('users_logged', $config)) {
          $this->controllerConfig['users_logged'] = (bool) $config['users_logged'];
        }
        # Configura el controlador para solo ser visto por usuario no logeados
        if (array_key_exists('users_not_logged', $config)) {
          $this->controllerConfig['users_not_logged'] = (bool) $config['users_not_logged'];
        }

        # Configura el controlador para solo ser visto por usuario admin
        if (array_key_exists('only_admin', $config)) {
          $this->controllerConfig['only_admin'] = (bool) $config['only_admin'];
        }

        if (array_key_exists('access_menu', $config)) {
          $this->controllerConfig['access_menu'] = (array) $config['access_menu'];
        }

      }
    }

    /**
     * Acción que regula quién entra o no al controlador según la configuración
     *
     * @return void
     */
    private function knowVisitorPermissions() {
      global $config;
      # Sólamente usuarios logeados
      if ($this->controllerConfig['users_logged'] && !$this->is_logged) {
        $this->functions->redir();
      }

      # Sólamente usuarios no logeados
      if ($this->controllerConfig['users_not_logged'] && $this->is_logged) {
        $this->functions->redir();
      }
         
      if ($this->is_logged){
        # acceso a opción sólo admin   
        if ($this->controllerConfig['only_admin'] && $this->user['rol'] != 1 ){
          $this->functions->redir($config['site']['url'] . '&error=true');
        }
        # acceso opcion sólo si usuario tiene permiso en perfil
        if ($this->controllerConfig['access_menu']['access']){
          $flat = false;
          foreach ($this->menu_user as $key => $value) {
            if ($value['id_menu'] == $this->controllerConfig['access_menu']['id_menu'])
            {
              $flat=true;
              break;
            }
          }
          if ($flat == false){
            $this->functions->redir($config['site']['url'] . '&error=true');
          }
        }
      }


    }

}
