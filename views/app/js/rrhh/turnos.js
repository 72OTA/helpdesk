    function subirarchivoexcel(){
        $("#div_cargando").html($("#cargador").html());
        var formData = new FormData();
        formData.append('excel',document.getElementById('imagefile').files[0]);
        $.ajax({
            type : 'POST',
            url : 'api/cargar_excel_turnos',
            contentType:false,
            processData:false,
            data : formData,
            success : function(json) {
                if ( json.success == 1 ){
                    msg_box_alert(json.success,"Registro Guardado",json.message,'reload');
                }else{
                    msg_box_alert(json.success,"Error",json.message);
                    $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
                }
            },
            error : function(xhr, status) {
                $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
              msg_box_alert(99,"Error",xhr.responseText);
            }
        });
    }
    function revisar_turno_por_fecha(){
        $.ajax({
            type: "POST",
            url: "api/revisar_turno_por_fecha",
            data : $('#formbuscaturno').serialize(),
            success : function(data){
                var table= $('#dataTables3').DataTable();
                table.clear().draw();
                if(data.success==1){
                    var ruta="views/app/temp/"+data.message;
                    var request = $.ajax(ruta,{dataType:'json'});
                    request.done(function (resultado) {
                        table.rows.add(resultado.aaData).draw();
                    });
                }
            },
            error : function(xhr, status) {
                msg_box_alert(99,"Error",xhr.responseText);
            }
        });
    }
    $('#btn_exporta_excel_turno_plataforma').click(function(e) {
        var fecha=document.getElementById('fechaturno').value;
        location.href = 'rrhh/exportar_turnos_plataforma_excel?fecha='+fecha;
    });
    function verturnomes(rutcliente,mesano){
        $("a > i").removeClass("rojo");
        $("#"+mesano).addClass("rojo");
        var formData = new FormData();
        formData.append('rut_personal',rutcliente);
        formData.append('mesano',mesano);

        $.ajax({
            type: "POST",
            url: "api/verturnomes",
            contentType:false,
            processData:false,
            data : formData,
            success : function(data){
                var table= $('#dataTables4').DataTable();
                table.clear().draw();
                if(data.success==1){
                    var ruta="views/app/temp/"+data.message;
                    var request = $.ajax(ruta,{dataType:'json'});
                    request.done(function (resultado) {
                        table.rows.add(resultado.aaData).draw();
                    });
                }
            },
            error : function(xhr, status) {
                msg_box_alert(99,"Error",xhr.responseText);
            }
        });
    }
    function updateDatosEquipoAsignado(id){
        var formData = new FormData();
        formData.append('id',id);
        formData.append('name',$("#name-"+id).val());
        formData.append('fecha_nacimiento',$("#fecha_nacimiento-"+id).val());
        formData.append('fono',$("#fono-"+id).val());
        formData.append('email',$("#email-"+id).val());
        formData.append('tango',$("#tango-"+id).val());
        formData.append('red',$("#red-"+id).val());
        formData.append('nnoc',$("#nnoc-"+id).val());
        $.ajax({
            type: "POST",
            url: "api/updateDatosEquipoAsignado",
            contentType:false,
            processData:false,
            data : formData,
            success : function(json){
                if ( json.success == 0 ){
                    msg_box_alert(json.success,"Error",json.message);
                }
            },
            error : function(xhr, status) {
                msg_box_alert(99,"Error",xhr.responseText);
            }
        });
    }
    function getTurnoSemanaCompleta(){
        $.ajax({
            type: "POST",
            url: "api/getTurnoSemanaCompleta",
            data : $('#formbuscaturno_s').serialize(),
            success : function(data){
                $("#semana").html(data.semana);

                var table= $('#dataTables1').DataTable();
                table.clear().draw();
                if(data.success==1){
                    var ruta="views/app/temp/"+data.message;
                    var request = $.ajax(ruta,{dataType:'json'});
                    request.done(function (resultado) {
                        table.rows.add(resultado.aaData).draw();
                    });
                }
            },
            error : function(xhr, status) {
                msg_box_alert(99,"Error",xhr.responseText);
            }
        });
    }
