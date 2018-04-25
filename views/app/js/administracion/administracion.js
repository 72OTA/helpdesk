/**
 * Ajax action to api rest
*/
function execute_accion_administracion(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {
    case "registra_nuevo_usuario":
      title='Registro de usuario';
      break;
    case "registra_nuevo_perfil":
      title='Registro de nuevo perfil';
      break;
    case "delete_perfil":
      title='Elimina Perfil';
      break;
    case "resetpass":
      title='Actualiza Password Usuario';
      break;
    case "update_usuario":
      title='Actualiza Usuario';
      break;
    case "update_peril_usuario":
      title='Actualiza Perfil Usuario';
      break;
    case "update_perfil":
      title='Actualiza Opciones Perfil';
      break;
  }
  $.ajax({
    type : method,
    url : 'api/'+api_rest,
    data : $('#'+ formulario).serialize(),
    success : function(json) {
      msg_box_alert(json.success,title,json.message,accion,accion_redirect);
    },
    error : function(/*xhr, status*/) {
      msg_box_alert(99,title,'Ha ocurrido un problema.');
    }
  });
}

/**
 * Events
 */
$('#register').click(function(e) {
  e.defaultPrevented;
  execute_accion_administracion("POST","registra_nuevo_usuario",'register_user_form','reload');
});
$('#register_user_form').keypress(function(e) {
    e.defaultPrevented;
    if(e.which == 13) {
        execute_accion_administracion("POST","registra_nuevo_usuario",'register_user_form','reload');
        return false;
    }
});
$('#update_user').click(function(e) {
  e.defaultPrevented;
  //execute_accion_administracion("POST","update_usuario",'update_user_form','redirect','administracion/usuario');
  actualiza_usuarios();
});
$('#update_user_form').keypress(function(e) {
    e.defaultPrevented;
    if(e.which == 13) {
        //execute_accion_administracion("POST","update_usuario",'update_user_form','redirect','administracion/usuario');
        actualiza_usuarios();
        return false;
    }
});
$('#btn_new_perfil').click(function(e) {
  e.defaultPrevented;
  execute_accion_administracion("POST","registra_nuevo_perfil",'new_perfil_form','reload');
});
$('#new_perfil_form').keypress(function(e) {
    e.defaultPrevented;
    if(e.which == 13) {
        execute_accion_administracion("POST","registra_nuevo_perfil",'new_perfil_form','reload');
        return false;
    }
});
$('#deleteperfil').click(function(e) {
  e.defaultPrevented;
  execute_accion_administracion("POST","delete_perfil",'form_select_perfil','reload')
});
$('#reset_pass_user_form').keypress(function(e) {
    e.defaultPrevented;
    if(e.which == 13) {
        execute_accion_administracion("POST","resetpass",'reset_pass_user_form','reload')
        return false;
    }
});
$('#btn_reset_pass_user').click(function(e) {
  e.defaultPrevented;
  execute_accion_administracion("POST","resetpass",'reset_pass_user_form','reload')
});
$('#update_perfil_user').click(function(e) {
  e.defaultPrevented;
  execute_accion_administracion("POST","update_peril_usuario",'form_user_perfil','redirect','administracion/usuario')
});
$('#update_perfil').click(function(e) {
  e.defaultPrevented;
  execute_accion_administracion("POST","update_perfil",'form_opciones_perfil','reload')
});

//funciones varias
function carga_modal_reset_pass(id_user){
  $('#modal_reset_pass_user').modal('show');
  document.getElementById('id_user').value=id_user
}
function actualiza_usuarios(){
  var formData = new FormData();
  formData.append('foto',document.getElementById('foto').files[0]);
  formData.append('id_user',document.getElementById('id_user').value);
  formData.append('name',document.getElementById('name').value);
  formData.append('email',document.getElementById('email').value);
  formData.append('cargo',document.getElementById('cargo').value);
  formData.append('fono',document.getElementById('fono').value);
  formData.append('perfil',document.getElementById('perfil').value);
  formData.append('pagina_inicio',document.getElementById('pagina_inicio').value);
  formData.append('rut_trabajador',document.getElementById('rut_trabajador').value);
  if (false == document.getElementById('rol').checked)
    formData.append('rol','0');
  else
    formData.append('rol','1');

  $.ajax({
      type : "POST",
      url : "api/update_usuario",
      contentType:false,
      processData:false,
      data : formData,
      success : function(json) {
          msg_box_alert(json.success,'Actualiza Usuario',json.message,'redirect','administracion/usuario');
      },
      error : function(xhr, status) {
        msg_box_alert(99,'Actualiza Usuario',xhr.responseText);
      }
    });
}
function mostar_datos_perfil(){
  $.ajax({
    type : 'POST',
    url : 'api/mostar_datos_perfil',
    data : $('#form_select_perfil').serialize(),
    success : function(json) {
      if (json.success == 0) {
        msg_box_alert(json.success,'Perfiles',json.message);
        $('#mostar_datos_perfil').html("")
      }
      else{
        $('#mostar_datos_perfil').html(json.message)
      }
    },
    error : function(xhr, status) {
      msg_box_alert(99,'Actualiza Usuario',xhr.responseText);
    }
  });
}
function update_empresa(){
  var formData = new FormData();
  formData.append('logo',document.getElementById('imagefile').files[0]);
  formData.append('nombre_empresa',document.getElementById('nombre_empresa').value);
  formData.append('telefono',document.getElementById('telefono').value);
  formData.append('email',document.getElementById('email').value);
  formData.append('impuesto',document.getElementById('impuesto').value);
  formData.append('tipo_moneda',document.getElementById('tipo_moneda').value);
  formData.append('direccion',document.getElementById('direccion').value);
  formData.append('ciudad',document.getElementById('ciudad').value);
  formData.append('comuna',document.getElementById('comuna').value);
  formData.append('region',document.getElementById('region').value);

  $.ajax({
      type : "POST",
      url : "api/update_empresa",
      contentType:false,
      processData:false,
      data : formData,
      success : function(json) {
          msg_box_alert(json.success,'Actualiza Empresa',json.message,'reload');
      },
      error : function(xhr, status) {
        msg_box_alert(99,'Actualiza Empresa',xhr.responseText);
      }
    });
}
