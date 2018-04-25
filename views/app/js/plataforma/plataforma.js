function execute_accion_confirmacion(
  method,
  api_rest,
  formulario,
  accion,
  accion_redirect
) {
  switch (api_rest) {
    case "master_register_agenda":
      title = "Registra Nuevo Contacto";
      break;
    case "master_editar_agenda":
      title = "Modificar Comuna";
      break;
    case "master_registra_nueva_comuna":
      title = "Registro de Comuna";
      break;
    case "master_editar_comuna":
      title = "Modificar Comuna";
      break;
    case "master_registra_nueva_actividad":
      title = "Registro de Actividad";
      break;
    case "master_editar_actividad":
      title = "Modificar Actividad";
      break;
    case "master_registra_nueva_actividad":
      title = "Registro de Actividad";
      break;
    case "master_editar_actividad":
      title = "Modificar Actividad";
      break;
    case "master_registra_nueva_zona":
      title = "Registro de Zona";
      break;
    case "master_editar_zona":
      title = "Modificar Zona";
      break;
    case "master_registra_nuevo_casillero":
      title = "Registro de Casillero";
      break;
    case "master_editar_casillero":
      title = "Modificar Casillero";
      break;
  }
  $.ajax({
    type: method,
    url: "api/" + api_rest,
    data: $("#" + formulario).serialize(),
    success: function(json) {
      msg_box_alert(json.success, title, json.message, accion, accion_redirect);
    },
    error: function(xhr, status) {
      msg_box_alert(99, title, xhr.responseText);
    }
  });
}
$("#register_agenda").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_register_agenda",
    "register_agenda_form",
    "redirect",
    "plataforma/listar_agenda"
  );
});
$("#update_agenda").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_editar_agenda",
    "editar_estado_form",
    "redirect",
    "plataforma/listar_agenda"
  );
});
$("#register_comuna").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_registra_nueva_comuna",
    "register_comuna_form",
    "redirect",
    "plataforma/listar_comunas"
  );
});
$("#update_comuna").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_editar_comuna",
    "editar_comuna_form",
    "redirect",
    "plataforma/listar_comunas"
  );
});
$("#register_actividad").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_registra_nueva_actividad",
    "register_actividad_form",
    "redirect",
    "plataforma/listar_actividades"
  );
});
$("#update_actividad").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_editar_actividad",
    "editar_actividad_form",
    "redirect",
    "plataforma/listar_actividades"
  );
});
$("#register_zona").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_registra_nueva_zona",
    "register_zona_form",
    "redirect",
    "plataforma/listar_zonas"
  );
});
$("#update_zona").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_editar_zona",
    "editar_zona_form",
    "redirect",
    "plataforma/listar_zonas"
  );
});
$("#register_casillero").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_registra_nuevo_casillero",
    "register_casillero_form",
    "redirect",
    "plataforma/listar_casilleros"
  );
});
$("#update_casillero").click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion(
    "POST",
    "master_editar_casillero",
    "editar_casillero_form",
    "redirect",
    "plataforma/listar_casilleros"
  );
});
