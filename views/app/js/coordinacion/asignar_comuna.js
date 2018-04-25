
$('#select_ejecutivo').on('change', function select_ejecutivo(){

    $('#form_usuario').remove();
    $('#comunasNoAsignadas').remove();
    $('#comunasAsignadas').remove();
    $('#resultado option').remove();
    $('#usuario').remove();
    $('#caja_secundaria').remove();
    $('#ejecutivos').append('<option>--</option>')

    $.ajax({
        type: 'POST',
        url: 'api/Mdlcoordinacion_select_ejecutivo',
        data: $('#select_ejecutivo').serialize(),
        success: function(json) {
            if (json.success == 1) {
                var mes = json.message;
                var inp = $('<form id="form_usuario" name="form_usuario"><input type="hidden" id="usuario" name="usuario"><input type="hidden" id="name" name="name"></form>')

                for (var i = 0; i < mes.length; i++) {
                    $('#ejecutivos').append('<option class="opcion animated fadeIn" value="' + mes[i][0] + '">' + mes[i][1] + '</option>');
                }
                $('#resultado').append(inp);
                $('#ejecutivos').on('change', function() {
                    $('#ejecutivos option:selected').each(function() {
                        var str = "";
                        var nme = "";
                        nme += $(this).text();
                        str += $(this).val();
                        $('#usuario').val(str);
                        $('#name').val(nme);
                    });
                })
            } else {
                // $('#mostrarDatos').remove();
                // $('#mostrardatosdiv').append('<div id="mostrarDatos"></div>');

            }
        },error: function( /*xhr, status*/ ) {
            msg_box_alert(xhr.responsetext);
        }
    });
});

// seleccion de cargo
$('#select_ejecutivo').one('click', function crear_select() {
    var sel = $('<select class="form-control"></select>');
    var lab = $('<label><strong>Asignar ejecutivos a Supervisor</strong></label><br>');
    $('#resultado').append(lab);
    $('#resultado').append(sel);
    sel.attr('id', 'ejecutivos');
    $('#ejecutivos').append('<option>--</option>')
});


if ($('#caja_secundaria').length > 0) {
    $('#caja_secundaria').remove();
} else {
    $(document).on('change', '#ejecutivos', function traer_comuna() {
        var select = $('#ejecutivos option:selected').text();
        if (select == '--') {
            msg_box_alert('0', 'Seleccione un ejecutivo', 'No hay ejecutivos seleccionados');
        } else {
            $.ajax({
                type: 'POST',
                url: 'api/Mdlcoordinacion_traer_comuna',
                data: $('#form_usuario').serialize(),
                success: function(json) {
                    if (json.success == 1) {
                        var comunasNoAsignadas = json.comunasNoAsignadas;
                        var comunasAsignadas = json.comunasAsignadas;
                        var valor = json.valor;
                        var user = $('#name').val();
                        var mostrarTodo = $('<!-- Default box --><div class="animated fadeIn" id="caja_secundaria"><!-- Custom Tabs (Pulled to the right) --><div class="nav-tabs-custom"><ul class="nav nav-tabs pull-rigth"><li class="active"><a href="#tab_2-2" data-toggle="tab"><label for="">' + user + '</label></a></li><li class="pull-left header"></li></ul><div class="tab-content"><div class="tab-pane active" id="tab_1-1"><div class="row">  <div class="col-md-2"></div><div class="col-md-4"><label for="">Usuarios no asignados</label><table id="comunasNoAsignadas" class="table table-bordered"><form id="idBtn"></table></div><div class="col-md-2"></div><div class="col-md-4"><label for="">Usuarios asignados</label><table id="comunasAsignadas" class="table table-bordered"></table><form></div></div></div><!-- /.tab-pane --></div></div></div>');
                        if ($('#caja_secundaria').length > 0) {
                            $('#caja_secundaria').remove();
                            $('#mostrarDatos').prepend(mostrarTodo);
                        } else {
                            $('#mostrarDatos').prepend(mostrarTodo);
                        }
                        var user_id = $('#usuario').val();
                        for (var i = 0; i < comunasNoAsignadas.length; i++) {
                            $('#comunasNoAsignadas').append('<tr><td><a data-placement="top" title="Asignar Supervisión" id='+comunasNoAsignadas[i]['id_comuna']+' onclick=\'asignar_comuna("' +comunasNoAsignadas[i]['nombre'] +'","' +user_id +'")\' class="btn btn-success btn-md" ><i class="fa fa-user-plus" ></i></a></td><td class="opcion" value="' + comunasNoAsignadas[i]['nombre'] + '">' + comunasNoAsignadas[i]['nombre'] + '</td></tr>');
                        }
                        if (comunasAsignadas != undefined) {
                            for (var i = 0; i < comunasAsignadas.length; i++) {
                                $('#comunasAsignadas').append('<tr><td><a data-placement="top" title="Quitar Supervisión"  class="btn btn-danger btn-md btnDesasignar" id="' + comunasAsignadas[i][2] + '"  onclick=\'quitar_comuna("' +comunasAsignadas[i][2] +'","' +user_id +'")\' ><i class="fa fa-user-times"></i></a></td><td class="opcion" value="' + comunasAsignadas[i][2] + '">' + comunasAsignadas[i][2] + '</td></tr> ');
                            }
                        }
                        // AQUI PONER EL ELSE DE LA WEA
                    }
                },error: function(xhr, status) {
                    msg_box_alert(xhr.responsetext);
                }
            });
        }
    });
}

function quitar_comuna(comuna,usuario) {
    var formData = new FormData();
    formData.append('comuna', comuna);
    formData.append('usuario', usuario);

    $.ajax({
        type: 'POST',
        url: 'api/Mdlcoordinacion_quitar_comuna',
        contentType: false,
        processData: false,
        data: formData,
        success: function(json) {
            if (json.success == 1) {
                $('#caja_secundaria').remove();
                $('#comunasAsignadas').remove();
                $('#comunasNoAsignadas').remove();
                $("#ejecutivos").trigger('change');
            } else {
                msg_box_alert('Error');
            }
        }
    });
}

function asignar_comuna(comuna,usuario) {
    var formData = new FormData();
    formData.append('comuna', comuna);
    formData.append('usuario', usuario);

    $.ajax({
        type: 'POST',
        url: 'api/Mdlcoordinacion_asignar_comuna',
        contentType: false,
        processData: false,
        data: formData,
        success: function(json) {
            if (json.success == 1) {
                $('#caja_secundaria').remove();
                $("#ejecutivos").trigger('change');
            } else {
                msg_box_alert('Error');
            }
        }
    });
}
