$("#agregarCasillero").on("click", function() {
  $.ajax({
    type: "POST",
    url: "api/agregar_casillero",
    data: $("#form_casillero").serialize(),
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
    url: "api/visualizar_casillero",
    contentType: false,
    processData: false,
    data: formData,
    success: function(data) {
      if (data.success == 1) {
        $.confirm({
          escapeKey: "formSubmit",
          icon: "glyphicon glyphicon-list-alt",
          title: "Observacion Casillero",
          content:
            "<h4 class='text-center'>" +
            data.cas[0]["observacion"] +
            "</h4><br><h4>" +
            "<br>Usuario: " +
            data.usuario +
            "<br>Fecha: " +
            data.fecha +
            "<br>Hora: " +
            data.hora +
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
          title: "Observacion Casillero",
          content: "<h4>No se pudo visualizar el casillero</h4>",
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
    url: "api/eliminar_casillero",
    contentType: false,
    processData: false,
    data: formData,
    success: function(data) {
      if (data.success == 1) {
        $.confirm({
          escapeKey: "formSubmit",
          icon: "glyphicon glyphicon-list-alt",
          title: "Observacion Casillero",
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
          title: "Observacion Casillero",
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
