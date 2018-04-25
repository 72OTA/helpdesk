<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

use app\models as Model;

/**
    * Inicio de sesión
    *
    * @return json
*/
$app->post('/login', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->login());
});

/**
    * Modifica password usuario
    *
    * @return json
*/
$app->post('/resetpass', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->resetpass());
});

/**
    * Inicio de sesión
    *
    * @return json
*/
$app->post('/logout', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->logout());
});

/**
    * Registro de un usuario
    *
    * @return json
*/
$app->post('/registra_nuevo_usuario', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->registra_nuevo_usuario());
});
/**
    * Registro de un usuario
    *
    * @return json
*/
$app->post('/update_usuario', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->update_usuario());
});
/**
    * Recuperar contraseña perdida
    *
    * @return json
*/
$app->post('/lostpass', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->lostpass());
});

/**
    * Recuperar contraseña perdida
    *
    * @return json
*/
$app->post('/registra_nuevo_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->registra_nuevo_perfil());
});
/**
    * Elimina perfil seleccionado
    *
    * @return json
*/
$app->post('/delete_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->delete_perfil());
});
/**
    * Elimina perfil seleccionado
    *
    * @return json
*/
$app->post('/reset_pass_user', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->resetpass());
});
/**
    * Actualiza perfil de usuario modificado directamente
    *
    * @return json
*/
$app->post('/update_peril_usuario', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->update_peril_usuario());
});
/**
    * Actualiza perfil de usuario modificado directamente
    *
    * @return json
*/
$app->post('/mostar_datos_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->mostar_datos_perfil());
});
/**
    * Actualiza perfil de usuario modificado directamente
    *
    * @return json
*/
$app->post('/update_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->update_perfil());
});
/**
    * Actualiza perfil datos de empresa
    *
    * @return json
*/
$app->post('/update_empresa', function() use($app) {
    $e = new Model\Empresa;

    return $app->json($e->update_empresa());
});

//////// CONTROLER RRHH ////////////////
/// HORAS EXTRAS
$app->post('/buscar_coincidencia', function() use($app) {
    $e = new Model\Horasextra;

    return $app->json($e->buscar_coincidencia());
});
$app->post('/hora_extra', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->hora_extra());
});
$app->post('/tmp_hora_extra', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->tmp_hora_extra());
});
$app->post('/revisar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->revisar());
});
$app->post('/modificar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->modificar());
});
$app->post('/agregar_usuario_he', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->agregar_usuario());
});
$app->post('/aprobar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->aprobar());
});
$app->post('/rechazar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->rechazar());
});
$app->post('/eliminar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->eliminar());
});
$app->post('/eliminar_solicitud_mod', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->eliminar_solicitud_mod());
});
$app->post('/eliminar_peticiones', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->eliminar_peticiones());
});

//ausencias---------------------------------------------------------------------
$app->post('/registrar_ausencia', function() use($app) {
    $u = new Model\Ausencias;
    return $app->json($u->registrar_ausencia());
});
$app->post('/modificar_ausencia', function() use($app) {
    $u = new Model\Ausencias;

    return $app->json($u->modificar_ausencia());
});
$app->post('/verdatos', function() use($app) {

    $u = new Model\Ausencias;

    return $app->json($u->ver_observacion_ausencias());

});
$app->post('/validacion_eliminar', function() use($app) {

    $u = new Model\Ausencias;

    return $app->json($u->validacion_eliminar());

});
$app->post('/buscar_rut', function() use($app) {

    $u = new Model\Ausencias;

    return $app->json($u->buscar_rut());

});
$app->post('/revisar_por_fecha', function() use($app) {

    $u = new Model\Ausencias;

    return $app->json($u->revisar_por_fecha());

});
//ausencias---------------------------------------------------------------------
//ASIGNAR SUPERVISOR------------------------------------------------------------
$app->post('/Asignaejecutivo_select_perfil', function() use($app) {
    $u = new Model\Asignaejecutivo;
    return $app->json($u->select_perfil());
});
$app->post('/Asignaejecutivo_traer_usuarios', function() use($app) {
    $u = new Model\Asignaejecutivo;
    return $app->json($u->traer_usuarios());
});
$app->post('/Asignaejecutivo_asignar_supervision', function() use($app) {
    $u = new Model\Asignaejecutivo;
    return $app->json($u->asignar_supervision());
});
$app->post('/Asignaejecutivo_quitar_supervision', function() use($app) {
    $u = new Model\Asignaejecutivo;
    return $app->json($u->quitar_supervision());
});
//ASIGNAR SUPERVISOR------------------------------------------------------------
//Turnos------------------------------------------------------------------------
$app->post('/cargar_excel_turnos', function() use($app) {
    $u = new Model\Turnos;
    return $app->json($u->cargar_excel());
});
$app->post('/revisar_turno_por_fecha', function() use($app) {
    $u = new Model\Turnos;
    return $app->json($u->revisar_turno_por_fecha());
});
$app->post('/mensaje', function() use($app) {
    $u = new Model\Turnos;
    return $app->json($u->mensaje());
});
$app->post('/verturnomes', function() use($app) {
    $u = new Model\Turnos;
    return $app->json($u->verturnomes());
});
$app->post('/updateDatosEquipoAsignado', function() use($app) {
    $u = new Model\Turnos;
    return $app->json($u->updateDatosEquipoAsignado());
});
$app->post('/getTurnoSemanaCompleta', function() use($app) {
    $u = new Model\Turnos;
    return $app->json($u->getTurnoSemanaCompleta());
});
//Turnos------------------------------------------------------------------------
//CRUD MASTER PLATAFORMA--------------------------------------------------------
$app->post('/master_register_agenda', function() use($app) {
    $u = new Model\MdlPlataformaMaestros;
    return $app->json($u->master_register_agenda());
});
$app->post('/master_editar_agenda', function() use($app) {
    $u = new Model\MdlPlataformaMaestros;
    return $app->json($u->master_editar_agenda());
});
$app->post('/master_registra_nueva_comuna', function() use($app) {
    $e = new Model\MdlPlataformaMaestros;
    return $app->json($e->registra_nueva_comuna());
});
$app->post('/master_editar_comuna', function() use($app) {
    $e = new Model\MdlPlataformaMaestros;
    return $app->json($e->editar_comuna());
});
//CRUD MASTER PLATAFORMA--------------------------------------------------------

// AVAR
$app->post('/cargar_excel_blindaje', function() use($app) {
    $u = new Model\Avar;
    return $app->json($u->cargar_excel());
});
$app->post('/avar_traer_users', function() use($app) {
    $u = new Model\Avar;
    return $app->json($u->avar_reactivos());
});
//CASILLEROS--------------------------------------------------------------------
$app->post('/agregar_casillero', function() use($app) {
    $u = new Model\Casilleros;
    return $app->json($u->agregarCasillero());
});
$app->post('/editar_casillero', function() use($app) {
    $u = new Model\Casilleros;
    return $app->json($u->editarCasillero());
});
$app->post('/visualizar_casillero', function() use($app) {
    $u = new Model\Casilleros;
    return $app->json($u->visualizarCasillero());
});
$app->post('/eliminar_casillero', function() use($app) {
    $u = new Model\Casilleros;
    return $app->json($u->eliminarCasillero());
});
//CRUD MASTER PLATAFORMA ACTIVIDAD--------------------------------------------------------
$app->post('/master_registra_nueva_actividad', function() use($app) {
    $u = new Model\MdlPlataformaMaestros;
    return $app->json($u->registra_nueva_actividad());
});
$app->post('/master_editar_actividad', function() use($app) {
    $u = new Model\MdlPlataformaMaestros;
    return $app->json($u->editar_actividad());
});
//CRUD MASTER PLATAFORMA ZONAS--------------------------------------------------------
$app->post('/master_registra_nueva_zona', function() use($app) {
    $u = new Model\MdlPlataformaMaestros;
    return $app->json($u->registra_nueva_zona());
});
$app->post('/master_editar_zona', function() use($app) {
    $u = new Model\MdlPlataformaMaestros;
    return $app->json($u->editar_zona());
});
//CRUD MASTER PLATAFORMA CASILLEROS--------------------------------------------------------
$app->post('/master_registra_nuevo_casillero', function() use($app) {
    $u = new Model\MdlPlataformaMaestros;
    return $app->json($u->registra_nuevo_casillero());
});
$app->post('/master_editar_casillero', function() use($app) {
    $u = new Model\MdlPlataformaMaestros;
    return $app->json($u->editar_casillero());
});
//REDES------------------------------------------------------------------------------------
$app->post('/agregar_ot_redes', function() use($app) {
    $u = new Model\Redes;
    return $app->json($u->agregarRedes());
});
$app->post('/eliminar_ot_redes', function() use($app) {
    $u = new Model\Redes;
    return $app->json($u->eliminarRedes());
});
$app->post('/visualizar_ot_redes', function() use($app) {
    $u = new Model\Redes;
    return $app->json($u->visualizarRedes());
});
$app->post('/editar_ot_redes', function() use($app) {
    $u = new Model\Redes;
    return $app->json($u->editarRedes());
});