    function execute_accion_despacho(method,api_rest,formulario,accion,accion_redirect){
        switch(api_rest) {
            case "Mdldespacho_registra_nuevo_estado":
                title='Registro de Estado';
            break;
            case "Mdldespacho_modificar_estado":
                title='Modificar Estado';
            break;
        }
        $.ajax({
            type : method,
            url : 'api/'+api_rest,
            data : $('#'+ formulario).serialize(),
            success : function(json) {
                msg_box_alert(json.success,title,json.message,accion,accion_redirect);
            },error : function(xhr, status) {
                msg_box_alert(99,title,xhr.responseText);
            }
        });
    }

    function mover_tab_3(idusuario,comuna,opcion){
        $("#tab3").attr("onclick",'');
        $("#tab3").attr("onclick",'actualizar_tabla_ordenes("'+idusuario+'","'+comuna+'","'+opcion+'");');
        $("#tab3").trigger("click");
        $("#tab3").attr("onclick",'');
        $("#tab3").attr("onclick",'actualizar_tabla_ordenes("'+idusuario+'","*","'+opcion+'");');
    }

    $('#register_estado').click(function(e){
        e.defaultPrevented;
        execute_accion_despacho("POST","Mdldespacho_registra_nuevo_estado",'register_estado_form','redirect','despacho/listar_estados');
    });
    $('#update_estado').click(function(e){
        e.defaultPrevented;
        execute_accion_despacho("POST","Mdldespacho_modificar_estado",'editar_estado_form','redirect','despacho/listar_estados');
    });

    function carga_ordenes_comuna_seguimiento(){
        var formData=new FormData();
        formData.append('comuna', document.getElementById('comuna_Seguimiento').value);
        $.ajax({
            type : "POST",
            url : 'api/Mdldespacho_carga_ordenes_comuna_seguimiento',
            contentType:false,
            processData:false,
            data : formData,
            success : function(data) {
                var table= $('#tblseguimiento').DataTable();
                table.clear().draw();
                if(data.success==1){
                    var ruta="views/app/temp/"+data.message;
                    var request = $.ajax(ruta,{dataType:'json'});
                    request.done(function (resultado) {
                        table.rows.add(resultado.aaData).draw();
                    });
                }
            },error : function(xhr, status) {
                msg_box_alert(99,title,xhr.responseText);
            }
        });
    }
    function asignar(dat){
        num="id-"+dat;
        num2=document.getElementById(num).value

        var formData=new FormData();
        formData.append('orden',dat);
        formData.append('tecnicos',num2);
        $.ajax({
            type : "POST",
            url : 'api/Mdldespacho_asignar_tecnico',
            contentType:false,
            processData:false,
            data : formData,
            success : function(json) {
                if(json.success==1){
                    var dax= json.message2
                    if (num2!=0){
                        $("#idasignar-"+dax).val(2);
                    }else{
                        $("#idasignar-"+dax).val(1);
                    }
                    $("#idasignar-"+dax).prop('disabled',false);
                    $("#idoperacion-"+dax).prop('disabled',false);
                }else{
                    msg_box_alert(json.success,'Atencion',json.message);
                    var dax=json.message2;
                    $("#id-"+dax).val('0');
                }
            },error : function(xhr, status) {
                msg_box_alert(99,title,xhr.responseText);
            }
        });
    }
    function asignarestado(asig){
        var formPost=new FormData();
        formPost.append('orden', asig);
        formPost.append('estado', document.getElementById("idasignar-"+asig).value);
        $.ajax({
            type : "POST",
            url : 'api/Mdldespacho_cambiar_estado',
            contentType:false,
            processData:false,
            data : formPost,
            success : function(json) {
                if(json.success == 0 ){
                    msg_box_alert(json.success,'datos',json.message);
                }
            },error : function(xhr, status) {
                msg_box_alert(99,'error',xhr.responseText);
            }
        });
    }
    function asignar_ejecutivo(id,idusuario){
        var formData = new FormData();
        formData.append('n_orden', id);
        formData.append('tec', idusuario);
        $.ajax({
            type: "POST",
            url: "api/Mdldespacho_cambiar_eje",
            contentType:false,
            processData:false,
            data : formData,
            success: function (data) {
                if (data.success == 1) {
                    // $.alert({
                    //     type: 'green',
                    //     icon: 'glyphicon glyphicon-warning-sign',
                    //     title: 'Asignacion:',
                    //     content: '<h4 class="text-center">'+data.msg+'</h4>',
                    //     autoClose: 'Ok|1000',
                    //      buttons: {
                    //          Ok: function () {
                    //          }
                    //      }
                    // })
                    actualizar_tabla_ordenes(idusuario,'*','sin_asignar');
                }
                else {
                    $.alert('No se puede mover orden');
                }
            },
            error: function (xhr, status) {
                msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
            }
        });
    }
    function actualizar_tablas_resumenes(idusuario,opcion){
        var formData=new FormData();
        formData.append('idusuario',idusuario);
        formData.append('opcion',opcion);
        $.ajax({
            type : "POST",
            url : 'api/Mdldespacho_recargar_tabla_resumen_tecnico',
            contentType:false,
            processData:false,
            data : formData,
            success : function(json) {
                if(json.success==1){
                    $('#div_contenedor_tecnicos_asignados').html(json.message);
                }
            },error : function(xhr, status) {
                msg_box_alert(99,'error',xhr.responseText);
            }
        });
        $.ajax({
          type : "POST",
          url : 'api/Mdldespacho_recargar_tabla_resumen_ordenes',
          contentType:false,
          processData:false,
          data : formData,
          success : function(json) {
              if(json.success==1){
                  $('#div_contenedor_resumen_ordenes').html(json.html);
              }
          },error : function(xhr, status) {
              msg_box_alert(99,'error',xhr.responseText);
          }
      });
    }
    function seleccionaroperacion(idorden,orden,cod_tecnico){
        idoperacion="idoperacion-"+idorden;
        validoperacion=document.getElementById(idoperacion).value;
        var formData=new FormData();
        formData.append('orden', idorden);
        formData.append('opcion', validoperacion);
        $.ajax({
            type : "POST",
            url : 'api/Mdldespacho_escalar',
            contentType:false,
            processData:false,
            data : formData,
            success : function(json) {
                if(json.success==1){
                    if(json.message=="CIERRE"){
                        $.confirm({
                        title: 'Operaciones',
                        content: json.html,
                        type: 'blue',
                        buttons: {
                            formSubmit: {
                                text: 'Enviar a Cierre',
                                btnClass: 'btn-green',
                                action: function () {
                                    var fomr = new FormData();
                                    fomr.append('idorden', idorden);
                                    fomr.append('n_orden', orden);
                                    fomr.append('opcion', validoperacion);
                                    fomr.append('id_tecnico', cod_tecnico);
                                    $.ajax({
                                        type : "POST",
                                        url : 'api/Mdldespacho_guardar_escalamiento',
                                        contentType:false,
                                        processData:false,
                                        data : fomr,
                                        success : function(json) {
                                            if(json.success==1){
                                                msg_box_alert(json.success,'Orden',json.message);
                                                carga_ordenes_comuna_seguimiento();
                                            }else{
                                                msg_box_alert(json.success,'Orden',json.message);
                                            }
                                        },error : function(xhr, status) {
                                            msg_box_alert(99,'error',xhr.responseText);
                                        }
                                    });
                                }
                            },cancel: {
                                text: 'Cancelar',
                                action: function () {
                                    $('#idoperacion-'+idorden).val("OPCIONES");
                                }
                            }
                        }
                    });
                    }else if(json.message=="FINALIZADO"){
                        $.confirm({
                            title: 'Operaciones',
                            content: json.html,
                            type: 'blue',
                            buttons: {
                                formSubmit: {
                                    text: 'Finalizar',
                                    btnClass: 'btn-green',
                                    action: function () {
                                        var fomr = new FormData();
                                        fomr.append('idorden', idorden);
                                        fomr.append('n_orden', orden);
                                        fomr.append('opcion', validoperacion);
                                        fomr.append('id_tecnico', cod_tecnico);
                                        $.ajax({
                                            type : "POST",
                                            url : 'api/Mdldespacho_guardar_escalamiento',
                                            contentType:false,
                                            processData:false,
                                            data : fomr,
                                            success : function(json) {
                                                if(json.success==1){
                                                    msg_box_alert(json.success,'Orden',json.message);

                                                    carga_ordenes_comuna_seguimiento();
                                                }else{
                                                    msg_box_alert(json.success,'Orden',json.message);
                                                }
                                            },error : function(xhr, status) {
                                                msg_box_alert(99,'error',xhr.responseText);
                                            }
                                        });
                                }
                                },cancel: {
                                    text: 'Cancelar',
                                    action: function () {
                                        $('#idoperacion-'+idorden).val("OPCIONES");
                                    }
                                }
                            }
                        });
                    }else{
                        $.confirm({
                            title: 'Operaciones',
                            content: json.html,
                            type: 'blue',
                            buttons: {
                                formSubmit: {
                                    text: 'Finalizar',
                                    btnClass: 'btn-green',
                                    action: function () {
                                        var fomr = new FormData();
                                        fomr.append('valopcion',document.getElementById('selectopcion').value);
                                        fomr.append('observacion',document.getElementById('textobservacion').value);
                                        fomr.append('idorden', idorden);
                                        fomr.append('n_orden', orden);
                                        fomr.append('opcion', validoperacion);
                                        fomr.append('id_tecnico', cod_tecnico);
                                        $.ajax({
                                            type : "POST",
                                            url : 'api/Mdldespacho_guardar_escalamiento',
                                            contentType:false,
                                            processData:false,
                                            data : fomr,
                                            success : function(json) {
                                                if(json.success==1){
                                                    msg_box_alert(json.success,'Orden',json.message);
                                                    carga_ordenes_comuna_seguimiento();
                                                }else{
                                                    msg_box_alert(json.success,'Orden',json.message);
                                                }
                                            },error : function(xhr, status) {
                                                msg_box_alert(99,'error',xhr.responseText);
                                            }
                                        });
                                    }
                                },cancel: {
                                    text: 'Cancelar',
                                    action: function () {
                                        $('#idoperacion-'+idorden).val("OPCIONES");
                                    }
                                }
                            },
                        });
                    }
                }
            }
        });
    }
    function actualizar_tabla_ordenes(idusuario,comuna,opcion){
        var fomr = new FormData();
        fomr.append('idusuario',idusuario);
        fomr.append('comuna',comuna);
        if (opcion == 'usuario'){
            APIs_URL="api/Mdldespacho_actualizar_tabla_ordenes";
            tabla = "#tblordenes";
        }else if(opcion == 'sin_asignar'){
            APIs_URL="api/Mdldespacho_actualizar_tabla_ordenes_sin_asignar";
            tabla = "#tblordenes_sin_asignar";
        }else{
            APIs_URL="api/Mdldespacho_actualizar_tabla_ordenes_super";
            tabla = "#tblordenes";
        }
        $.ajax({
            type: "POST",
            url: APIs_URL,
            contentType:false,
            processData:false,
            data : fomr,
            success : function(data){
                var table= $(tabla).DataTable();
                table.clear().draw();
                if(data.success==1){
                    var ruta="views/app/temp/" + data.message;
                    var request = $.ajax( ruta , {dataType:'json'} );
                    request.done(function (resultado) {
                        table.rows.add(resultado.aaData).draw();
                    });
                }
            },
            error : function(xhr, status) {
              msg_box_alert(99,'Filtrar Ordenes',xhr.responseText);
            }
        });
    }
    function guardar_comuna_tecnico(idtecnico){

        comuna=document.getElementById('select_comuna-'+idtecnico).value;

        var formData=new FormData();
        formData.append('tecnico',idtecnico);
        formData.append('comuna',comuna);
        $.ajax({
              type : "POST",
              url : 'api/Mdldespacho_guardar_comuna_tecnico',
              contentType:false,
              processData:false,
              data : formData,
              success : function(json) {
              msg_box_alert(json.success,'datos',json.message);
              },
              error : function(xhr, status) {
                msg_box_alert(99,'error',xhr.responseText);
              }
        });
    }
    function guardar_asistencia_tecnico(idtecnico){

        estado=document.getElementById('select_estado_tecnico-'+idtecnico).value;

        var formData=new FormData();
        formData.append('tecnico',idtecnico);
        formData.append('estado',estado);
        $.ajax({
              type : "POST",
              url : 'api/Mdldespacho_guardar_asistencia_tecnico',
              contentType:false,
              processData:false,
              data : formData,
              success : function(json) {
              msg_box_alert(json.success,'datos',json.message);
              },
              error : function(xhr, status) {
                msg_box_alert(99,'error',xhr.responseText);
              }
        });
    }

    function cambiar_ejecutivo(id,idusuario,comuna) {
        var formData = new FormData();
        formData.append('n_ord', id);
        $.ajax({
            type: "POST",
            url: "api/Mdldespacho_traer_eje",
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                if (data.success == 1) {
                    $.confirm({
                        theme: 'supervan',
                        icon: 'fa fa-random',
                        title: 'Pasar OT a otro ejecutivo!',
                        content: data.msg,
                        type: 'green',
                        typeAnimated: true,
                        buttons: {
                            formSubmit: {
                                text: '<h3>Actualizar.</h3>',
                                btnClass: 'btn-green',
                                action: function () {
                                    $.ajax({
                                        type: "POST",
                                        url: "api/Mdldespacho_cambiar_eje",
                                        data: $('#formeje').serialize(),
                                        success: function (data) {
                                            if (data.success == 1) {
                                                $.alert(data.msg)
                                                actualizar_tabla_ordenes(idusuario,comuna,'super');
                                            }
                                            else {
                                                $.alert('No se puede mover orden');
                                            }
                                        },
                                        error: function (xhr, status) {
                                            msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
                                        }
                                    });
                                }
                            },
                            cancel: {
                                text: '<h3>Cancelar</h3>',
                                btnClass: 'btn-red',
                                action: function () {

                                }
                            }
                        },
                    });
                }
                else {
                    $.alert('No se logro hacer un cierre seguro');
                }
            },
            error: function (xhr, status) {
                msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
            }
        });
    }
    function cambiar_prioridad(id) {
        var vl =  $("#" + id +" option:selected").val();
        var formData = new FormData();
        formData.append('id', id);
        formData.append('prio', vl);
        $.ajax({
            type: "POST",
            url: 'api/Mdldespacho_cambiar_prioridad',
            contentType: false,
            processData: false,
            data: formData,
            success: function (json) {
                $.alert({
                    theme: 'supervan',
                    icon: 'fa fa-refresh',
                    title: 'Actualizacion',
                    content: '<h3>Dato '+json.msg+'</h3>'
                });
            }, error: function (xhr, status) {
                alert(99, 'error', xhr.responseText);
            }
        });
    };
