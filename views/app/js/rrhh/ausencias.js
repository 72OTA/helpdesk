/**
 * Ajax action to api rest
*/
function execute_accion_rrhh(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {
    case "registrar_ausencia":
      title='Guardar ausencia';
      break;
    case "modificar_ausencia":
      title='Modificar ausencia';
      break;
    case "verdatos":
      title='Observacion ';
      break;
  }

  $.ajax({
    type : method,
    url : 'api/'+api_rest,
    data : $('#'+ formulario).serialize(),
    success : function(json) {
      msg_box_alert(json.success,title,json.message,accion,accion_redirect);
    },
    error : function(xhr, status) {
      msg_box_alert(99,title,xhr.responseText);
    }
  });
}

$('#guardarregistro').click(function(e) {
    e.defaultPrevented;
    execute_accion_rrhh("post","registrar_ausencia",'form_ausencia','reload');
});
$('#modificaregistro').click(function(e) {
    e.defaultPrevented;
    execute_accion_rrhh("post","modificar_ausencia",'form_modificar','redirect','rrhh/revisarausencias');
});

$('#btn_exporta_excel_ausencias').click(function(e) {
    var desde=document.getElementById('revdesde').value;
    var hasta=document.getElementById('revhasta').value;
    var area=document.getElementById('textoarea').value;
    
    location.href = 'rrhh/exporta_excel_ausencias?area='+area+'&desde='+desde+'&hasta='+hasta;
    
    
});

function validacion_eliminar(idinasistencia){

    document.formrevisar.idprueba.value=idinasistencia;
    if (window.confirm("¿Está seguro que desea eliminar el registro seleccionado?")) {
        $.ajax({
            type : 'POST',
            url : 'api/validacion_eliminar',
            data : $('#formrevisar').serialize(),
            success : function(json) {
            if ( json.success == 1 ){
                msg_box_alert(1,'Eliminar Ausencia',json.message,'reload');
            }else{
                msg_box_alert(0,'Eliminar Ausencia',json.message);
            }
        },
            error : function(xhr, status) {
                msg_box_alert(99,title,xhr.responseText);
            }
        });
    }
}

function verdescripcion(verdatos){
    document.formrevisar.idprueba.value=verdatos;
    execute_accion_rrhh("POST","verdatos",'formrevisar');
}

function buscar_rut(){

    rut=document.form_buscar.busrut.value;
    if (rut != ""){   
        $.ajax({
        type : 'POST',
        url : 'api/buscar_rut',
        data : $('#form_buscar').serialize(),
        success : function(json) {
            if (json.success==0){
                $('#textnombre').val(json.message);
                $('#textrut').val(json.message1);
            }
            else{
                $('#textnombre').val(" ");
                $('#textrut').val(" ");
            }
        },
        error : function(xhr, status) {
            msg_box_alert(99,'Buscar Personal',xhr.responseText);
        }
        });
    }
}

function revisar_por_fecha(){
    $.ajax({
        type: "POST",
        url: "api/revisar_por_fecha",
        data : $('#formrevisar').serialize(),
        success : function(data){
            var table= $('#dataTables2').DataTable();
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
          msg_box_alert(99,'Filtrar Ausencias',xhr.responseText);
        }
    });
}

//------------------------------------------------------------------------------
