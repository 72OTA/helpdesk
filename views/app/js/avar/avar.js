function subirarchivoexcel() {
  $("#div_cargando").html($("#cargador").html());
  var formData = new FormData();
  formData.append("excel", document.getElementById("blindfile").files[0]);
  $.ajax({
    type: "POST",
    url: "api/cargar_excel_blindaje",
    contentType: false,
    processData: false,
    data: formData,
    success: function(json) {
      if (json.success == 1) {
        msg_box_alert(
          json.success,
          "Registro Guardado",
          json.message,
          "reload"
        );
      } else {
        msg_box_alert(json.success, "Error", json.message);
        $("#div_cargando").html(
          '<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>'
        );
      }
    },
    error: function(xhr, status) {
      $("#div_cargando").html(
        '<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>'
      );
      msg_box_alert(99, "Error", xhr.responseText);
    }
  });
}

$("#bloqueAvR").on("change", function() {
  var formData = new FormData();
  var bloque = $("#bloqueAvR").val();
  formData.append("select", bloque);
  $.ajax({
    type: "POST",
    url: "api/avar_traer_users",
    contentType: false,
    processData: false,
    data: formData,
    success: function(json) {
      if (json.success == 1) {
        var tbody = "<tbody><tr><td></td><td></td><td></td></tr></tbody>";
        $("#listar_bloque_ejecutivo").append(json.tabla);
        $("#tblN1").append();
      } else {
        msg_box_alert(json.success, "Error", json.message);
      }
    },
    error: function(xhr, status) {
      $("#div_cargando").html(
        '<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>'
      );
      msg_box_alert(99, "Error", xhr.responseText);
    }
  });
});
