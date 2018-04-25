function cierre_asegurado(id) {
  $.confirm({
    theme: 'supervan',
     icon: 'fa fa-phone',
     title: 'Cierre Asegurado!',
     content:  '<form id="Formcierre" name="Formcierre" class="form-signin" >'+
     '<h2><select class="form-control" name="tec" id="tec">'+
       '<option value="sin tecnico en el domicilio">SIN TECNICO EN EL DOMICILIO</option>'+
       '<option value="con tecnico en el domicilio">CON TECNICO EN EL DOMICILIO</option>'+
     '</select></h2>' +
         '<h2><select class="form-control" name="opcion" id="opcion">' +
           '<option value="ok cierre">CIERRE OK</option>'+
           '<option value="no acepta ivr">NO ACEPTA IVR</option>'+
           '<option value="ivr caido">IVR CAIDO</option>'+
         '</select></h2>' +
         '<input type="hidden" id="id" name="id" value='+id+'>'+
     '</form>',
     type: 'purple',
     typeAnimated: true,
     buttons: {
       formSubmit: {
         text: '<h3>Actualizar.</h3>',
           btnClass: 'btn-green',
         action: function () {
           $.ajax({
               type: "POST",
               url: "api/Mdlcierre_cierre_asegurado",
               data : $('#Formcierre').serialize(),
               success : function(data){
                   if(data.success==1){
                     // INGRESAR QUE WEA
                     $.alert('ORDEN CERRADA DE MANERA SEGURA')
                     location.reload();

                   }
                   else {
                     $.alert('No se logro hacer un cierre seguro');
                   }
               },
               error : function(xhr, status) {
                 msg_box_alert(99,'Filtrar Ordenes',xhr.responseText);
               }
           });
         }
       },
       cancel: {
         text: '<h3>Cancelar</h3>',
           btnClass: 'btn-red',
         action: function () {
           //close
         }
       }
     },
  });
}
function subir_certificacion(id){
  var div = '<h2><label for="file">Seleccione la foto de la certificacion</label></h2>' +
    '<input style="border-radius:15px;" type="file" id="fileinput" accept=".jpg, .jpeg, .png" class="form-control"/><br>'+
  '<iframe width="1050" height="450" style="position:relative;" src="https://192.168.17.20/fieldview/app?page=Menu&service=page" frameborder="0" allowfullscreen></iframe>';
$.confirm({
  theme: 'supervan',
    icon: 'glyphicon glyphicon-scale',
    title: 'Certificacion!',
    type: 'purple',
  columnClass: 'col-md-12',
    typeAnimated: true,
    content: div,
    buttons: {
        confirmar: {
          text: '<h3>Subir Cert.</h3>',
            btnClass: 'btn-green',
          action: function () {
           var formData = new FormData();
           formData.append('fileinput', document.getElementById('fileinput').files[0]);
           formData.append('id', id);
                $.ajax({
                  type: "POST",
                  url: "api/Mdlcierre_certificacion",
                  contentType: false,
                  processData: false,
                  data: formData,
                  success: function (data) {
                    if (data.success == 1) {
                      location.reload();
                    }
                  },
                  error: function (xhr, status) {
                    msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
                  }
                });

              }},
        cancelar: {
          text: '<h3>Cancelar</h3>',
          btnClass: 'btn-red',
          action: function () {
        }},
    }
});
}
    function subir_st(id,opcion){
        var div = '<h2><label for="file">Seleccione la foto del speed test</label></h2>' +
        '<h2><input style="border-radius:15px;" type="file" id="fileinput" accept=".jpg, .jpeg, .png" class="form-control"/></h2>';

        $.confirm({
            theme: 'supervan',
            icon: 'glyphicon glyphicon-camera',
            title: 'Subir Speed Test',
            type: 'purple',
            typeAnimated: true,
            content: div,
            buttons: {
                confirmar:{
                    text: '<h3>Subir ST.</h3>',
                    btnClass: 'btn-green',
                    action: function () {
                        var formData = new FormData();
                        formData.append('fileinput', document.getElementById('fileinput').files[0]);
                        formData.append('id', id);
                        $.ajax({
                            type: "POST",
                            url: "api/Mdlcierre_speed_test",
                            contentType: false,
                            processData: false,
                            data: formData,
                            success: function (data) {
                                if(data.success== 1){
                                    if(opcion == 'seguimiento'){
                                        $('#comuna_Seguimiento').trigger('onchange');
                                    }else{
                                        location.reload();
                                    }
                                } else {
                                    $.alert('Es necesario subir una imagen ');
                                }
                            },
                            error: function (xhr, status) {
                                msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
                            }
                        });
                    }
                },
                cancelar:{
                    text: '<h3>Cancelar</h3>',
                    btnClass: 'btn-red',
                    action: function () {
                    }
                }
            }
        });
    }
    function seguro(id) {
        $.confirm({
            theme: 'supervan',
            icon: 'glyphicon glyphicon-warning-sign',
            title: 'Confirmación!',
            content: '<h2>¿Esta seguro que desea finalizar esta orden?</h2>',
            type: 'red',
            buttons: {
                confirmar:{
                    text: '<h3>Finalizar OT.</h3>',
                    btnClass: 'btn-green',
                    action: function () {
                        location.href = 'despacho/finalizar/'+id;
                    }
                },
                cancel: {
                    text: '<h3>Cancelar</h3>',
                    btnClass: 'btn-red',
                    action: function () {}
                }
            }
        })
    }
    function mostrar_st(id,opcion) {
        var foto = id + "_st";
        var tabla = '<table width="1050" height="350">' +
        '<tr>' +
        ' <td><h2>Ultima imagen de la orden n°: '+id+'</h2></td>' +
        '  <td><img class="zoom" src="views/app/disco/speedtest/' + foto + '.jpg?"' + new Date().getTime()+'; alt="speed test n° orden: '+id+'" ismap></td>' +
        '</tr>' +
        '</table>';
        $.confirm({
            theme: 'supervan',
            icon: 'glyphicon glyphicon-camera',
            title: 'Speed Test!',
            content: tabla,
            type: 'green',
            columnClass: 'col-md-12',
            typeAnimated: true,
            buttons: {
                confirmar: {
                    text: '<h3>Subir otra imagen.</h3>',
                    btnClass: 'btn-green',
                    action: function () {
                        subir_st(id,opcion);
                    }
                },
                cancel: {
                    text: '<h3>Cancelar</h3>',
                    btnClass: 'btn-red',
                    action: function () {}
                }
            }
        })
    }
