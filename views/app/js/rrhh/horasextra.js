/**
 * Ajax action to api rest
 */
function execute_accion_solicitudes_horas_extra(method, api_rest, formulario, accion, accion_redirect) {
  switch (api_rest) {
    // case "hora_extra":
    //   title = 'Hora Extra';
    //   break;
    // case "revisar":
    //   title = 'Revisar Solicitud';
    //   break;
    // case "modificar":
    //   title = 'Modificar Solicitud';
    //   break;
    // case "aprobar":
    //   title = 'Aprobar Solicitud';
    //   break;
    // case "rechazar":
    //   title = 'Rechazar Solicitud';
    //   break;
    // case "eliminar":
    //   title = 'Eliminar Solicitud';
    //   break;
    // case "buscar_coincidencia":
    //   title = 'buscar_coincidencia';
    //   break;
    case "tmp_hora_extra":
      title = 'Peticion horas extra temporal';
      break;
    // case "eliminar_peticiones":
    //   title = 'Eliminar Peticiones de horas extra';
    //   break;
    // case "eliminar_solicitud_mod":
    //   title = 'Eliminar Usuario';
    //   break;
    // case "agregar_usuario_he":
    //   title = 'Agregar Usuario';
    //   break;
  }
  $.ajax({
    type: method,
    url: 'api/' + api_rest,
    data: $('#' + formulario).serialize(),
    success: function(json) {
      msg_box_alert(json.success, title, json.message, accion, accion_redirect);
    },
    error: function(xhr, status) {
      msg_box_alert(99, title, 'Ha ocurrido un problema.' + xhr.responsetext);
    }
  });
}

//Este botón es para hacer la solicitud de horas extra correspondiente.
// $('#btn_horaextra').click(function(e) {
//   e.defaultPrevented;
//   execute_accion_solicitudes_horas_extra("POST", "hora_extra", 'form_horax', 'redirect', 'rrhh/revisar_horas_extra')
// });

//Acción para agregar los datos desde la tabla temporal a las tablas tbl_enc_horas_extr y tbl_det_horas_extra
$('#btn_tmp_horaextra').click(function(e) {
  e.defaultPrevented;
  execute_accion_solicitudes_horas_extra("POST", "tmp_hora_extra", 'form_buscar', 'reload')
});
//
// //Acción para agregar usuarios en la tabla: tbl_det_hora_extra
// $('#btn_agregar_usuario').click(function(e) {
//   e.defaultPrevented;
//   execute_accion_solicitudes_horas_extra("POST", "agregar_usuario_he", 'form_modificar', 'reload')
// });
//
// //Acción para modificar las solicitudes creadas en la tabla: tbl_enc_horas_extra y tambien agregar o eliminar usuarios en la tabla tbl_det_horas_extra
// $('#btn_modificar').click(function(e) {
//   e.defaultPrevented;
//   execute_accion_solicitudes_horas_extra("POST", "modificar", 'form_modificar', 'redirect', 'rrhh/revisar_horas_extra')
// });
//
// //Acción para aprobar de manera automática las solicitudes en la base de datos.
// $('#btn_aprobar').click(function(e) {
//   e.defaultPrevented;
//   execute_accion_solicitudes_horas_extra("POST", "aprobar", 'form_respuesta', 'redirect', 'rrhh/revisar_horas_extras_pendientes')
// });
//
// //Acción para rechazar de manera automática las solicitudes en la base de datos.
// $('#btn_rechazar').click(function(e) {
//   e.defaultPrevented;
//   execute_accion_solicitudes_horas_extra("POST", "rechazar", 'form_respuesta', 'redirect', 'rrhh/revisar_horas_extras_pendientes')
// });
//
// //Esta función elimina a los usuarios que se estan agregando para hacer la solicitud de horas extra en la tabla tmp_horasextra
// function eliminar_solicitud(id) {
//   if (window.confirm("¿Esta seguro que desea eliminar la solicitud?")) {
//     document.getElementById("id_solicitudhx").value = id;
//     execute_accion_solicitudes_horas_extra("POST", 'eliminar', 'form_id', 'redirect', 'rrhh/horasextra')
//   } else {
//     alert("No eliminado");
//   }
// }
//
// //Esta función elimina la peticion completa desde las tablas : tbl_det_hora_extra y tbl_enc_hora_extra
// function eliminar_peticiones(id) {
//   if (window.confirm("¿Esta seguro que desea eliminar la solicitud?")) {
//     document.getElementById("id_peticion").value = id;
//     execute_accion_solicitudes_horas_extra("POST", 'eliminar_peticiones', 'form_id_peticion', 'redirect', 'rrhh/revisar_horas_extra')
//   } else {
//     alert("No eliminado");
//   }
// }
//
// //Esta función elimina a las personas que ya estan ingresadas en la tabla: tbl_det_hora_extra
// function eliminar_solicitud_mod(id) {
//   if (window.confirm("¿Esta seguro que desea eliminar esta persona?")) {
//     document.getElementById("id_hx_mod").value = id;
//     execute_accion_solicitudes_horas_extra("POST", 'eliminar_solicitud_mod', 'form_id_mod', 'reload')
//   } else {
//     alert("No eliminado");
//   }
// }
//
// //Función para hacer aparecer modal donde se respondera la solicitud de horas extra por el jefe.
// function modal_responder_solicitud(id) {
//   $('#modal_responder_solicitud').modal('show');
//   document.getElementById('id_respuesta').value = id
// }

//Función para buscar coincidencias en la db y autocompletar campo input.
function buscar_coincidencia() {
  if (busca.value != '') {
    $.ajax({
      type: 'POST',
      url: 'api/buscar_coincidencia',
      data: $('#form_buscar').serialize(),
      success: function(json) {
        if (json.success == 1) {
          $('#rut').attr("placeholder", json.message);
        } else {
          $('#rut').val(json.rut);
        }
      },
      error: function( /*xhr, status*/ ) {
        msg_box_alert(xhr.responsetext);
      }
    });
  }
}
