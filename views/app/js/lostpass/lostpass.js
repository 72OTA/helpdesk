/**
 * Ajax action to api rest
*/
function lostpass(){
  $.ajax({
    type : "POST",
    url : "api/lostpass",
    data : $('#lostpass_form').serialize(),
    success : function(json) {
      if(json.success == 1) {
        $.dialog({
          title: 'Registro de usuario',
          type: 'green',
          typeAnimated: true,
          content: json.message,
        });
        setTimeout(function(){
            location.reload();
        },1000);
      }else{
        $.dialog({
          title: 'Registro de usuario',
          type: 'orange',
          typeAnimated: true,
          content: json.message,
        });
      }
    },
    error : function(xhr, status) {
      $.dialog({
        title: 'Registro de usuarios',
        type: 'red',
        typeAnimated: true,
        content: xhr.responseText,
      });
    }
  });
}

/**
 * Events
 */
$('#recuperar').click(function(e) {
  e.defaultPrevented;
  lostpass();
});
$('#lostpass_form').keypress(function(e) {
  e.defaultPrevented;
    if(e.which == 13) {
        lostpass();
        return false;
    }
});
