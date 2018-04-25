$("#agregarOT").on("click", function() {
  $.ajax({
    type: "POST",
    url: "api/agregar_ot_redes",
    data: $("#form_redes").serialize(),
    success: function(json) {
      if (json.success == 1) {
        $.alert({
          icon: "fa fa-warning",
          title: "Redes",
          content: json.message,
          type: "green",
          typeAnimated: true,
          autoClose: "ok|3000",
          buttons: {
            ok: function() {
              location.href = "redes/listar_redes";
            }
          }
        });
      } else {
        $.alert({
          icon: "fa fa-warning",
          title: "Redes",
          content: json.message,
          type: "red",
          typeAnimated: true,
          autoClose: "ok|3000",
          buttons: {
            ok: function() {}
          }
        });
      }
    },
    error: function(xhr, status) {
      msg_box_alert(99, "title", xhr.responseText);
    }
  });
});
$("#modificarCasillero").on("click", function() {
  $.ajax({
    type: "POST",
    url: "api/editar_casillero",
    data: $("#form_editar_casillero").serialize(),
    success: function(json) {
      if (json.success == 1) {
        $.alert({
          icon: "fa fa-warning",
          title: "Casillero",
          content: json.message,
          type: "green",
          typeAnimated: true,
          autoClose: "ok|3000",
          buttons: {
            ok: function() {
              location.href = "casilleros/listar_casilleros";
            }
          }
        });
      } else {
        $.alert({
          icon: "fa fa-warning",
          title: "Casillero",
          content: json.message,
          type: "red",
          typeAnimated: true,
          autoClose: "ok|3000",
          buttons: {
            ok: function() {}
          }
        });
      }
    },
    error: function(xhr, status) {
      msg_box_alert(99, "title", xhr.responseText);
    }
  });
});
function visualizar(Norden) {
  var formData = new FormData();
  formData.append("Norden", Norden);
  $.ajax({
    type: "POST",
    url: "api/visualizar_ot_redes",
    contentType: false,
    processData: false,
    data: formData,
    success: function(data) {
      if (data.success == 1) {
        $.confirm({
          escapeKey: "formSubmit",
          icon: "glyphicon glyphicon-list-alt",
          title: "Observacion OT Redes",
          content:
            "<h4 class='text-center'>" +
            data.cas[0]["observacion"] +
            "</h4><br><h4>" +
            "<br>Usuario: " +
            data.usuario +
            "<br>Fecha: " +
            data.fecha +
            "</h4>",
          type: "green",
          buttons: {
            formSubmit: {
              text: "Aceptar",
              btnClass: "btn-default",
              action: function() {}
            }
          }
        });
      } else {
        $.confirm({
          escapeKey: "formSubmit",
          icon: "glyphicon glyphicon-remove",
          title: "Observacion OT Redes",
          content: "<h4>No se pudo visualizar la OT</h4>",
          type: "red",
          buttons: {
            formSubmit: {
              text: "Aceptar",
              btnClass: "btn-green",
              action: function() {}
            }
          }
        });
      }
    },
    error: function(xhr, status) {
      msg_box_alert(99, "Filtrar Ordenes", xhr.responseText);
    }
  });
}
function eliminar(Norden) {
  var formData = new FormData();
  formData.append("Norden", Norden);
  $.ajax({
    type: "POST",
    url: "api/eliminar_ot_redes",
    contentType: false,
    processData: false,
    data: formData,
    success: function(data) {
      if (data.success == 1) {
        $.confirm({
          escapeKey: "formSubmit",
          icon: "glyphicon glyphicon-list-alt",
          title: "Orden Redes",
          content: data.message,
          type: "green",
          autoClose: "formSubmit|3000",
          buttons: {
            formSubmit: {
              text: "Aceptar",
              btnClass: "btn-default",
              action: function() {
                location.reload();
              }
            }
          }
        });
      } else {
        $.confirm({
          escapeKey: "formSubmit",
          icon: "glyphicon glyphicon-remove",
          title: "Orden redes",
          content: data.message,
          type: "red",
          buttons: {
            formSubmit: {
              text: "Aceptar",
              btnClass: "btn-green",
              action: function() {}
            }
          }
        });
      }
    },
    error: function(xhr, status) {
      msg_box_alert(99, "Filtrar Ordenes", xhr.responseText);
    }
  });
}
// $("#exportar").on("click",function(){

// });
