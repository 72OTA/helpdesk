/**
 * Ajax action to api rest
*/
function login(){
  $.ajax({
    type : "POST",
    url : "api/login",
    data : $('#login_form').serialize(),
    success : function(json) {
      if(json.success == 1) {
        $.dialog({
          title: 'Acceso a sistema',
          type: 'green',
          typeAnimated: true,
          content: json.message,
        });
        setTimeout(function(){
            location.reload();
        },1000);
      }else{
        $.dialog({
          title: 'Acceso a sistema',
          type: 'orange',
          typeAnimated: true,
          content: json.message,
        });
      }
    },
    error : function(xhr, status) {
      $.dialog({
        title: 'Acceso a sistema',
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
$('#login').click(function(e) {
  e.defaultPrevented;
  login();
});
$('#login_form').keypress(function(e) {
    e.defaultPrevented;
    if(e.which == 13) {
        login();
    }
});
