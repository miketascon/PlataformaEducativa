function goReg(){
	var connect, form, response, result, first_name, last_name, email, password, password_two, country, genero, tyc;
    first_name = __('first_name').value;
	  last_name = __('last_name').value;
    email = __('email').value;
  	password = __('password').value;
    password_two = __('password_two').value;
    country = __('country').value;
    genero = __('genero').value;
  	tyc = __('tyc').checked ? true : false;

    if(tyc == true){
      if(first_name != '' && last_name != '' && email != '' && password != '' && country != '' && genero != ''){
        if(password == password_two){
            form = 'first_name=' + first_name + '&last_name=' + last_name + '&email=' + email + '&password=' + password + '&country=' + country + '&genero=' + genero;
 
            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function() {
            if(connect.readyState == 4 && connect.status == 200) {
        
              if(connect.responseText == 1) {
                  result = '<div class="alert alert-dismissible alert-success">';
                  result += '<h4 >Registro completado!</h4>';
                  result += '<div class=" preloader-wrapper small active">';
                  result += '<div class=" spinner-layer spinner-green-only">';
                  result += '<div class=" circle-clipper left">';
                  result += '<div class=" circle"></div>';
                  result += '</div><div class=" gap-patch">';
                  result += '<div class=" circle"></div>';
                  result += '</div><div class=" circle-clipper right">';
                  result += '<div class=" circle"></div>';
                  result += '</div>';
                  result += '</div>';
                  result += '</div>';
                  result += '<p><strong>Estamos registrandote...</strong></p>';
                  result += '</div>';
              
                  __('_AJAX_REG_').innerHTML = result;
                  location.reload();
             
                 
              
            
              } else {
                __('_AJAX_REG_').innerHTML = connect.responseText;
              }

            }else if(connect.readyState != 4){
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button type="button" class="close" data-dismiss="alert">x</button>';
                result += '<h4 class="center">Procesando...</h4>';
                result += '<p><strong>Intentando Registrarte....</strong></p>';
                result += '</div>';
                __('_AJAX_REG_').innerHTML = result;

            }
          }
            connect.open('POST','ajax.php?mode=reg',true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send(form);
   


        }else{
              result = '<div class="alert alert-dismissible alert-danger">';
            
             
              result += '<p><strong>  ERROR:</strong> Las contraseñas no coinciden</p>';
              result += '</div>';
              __('_AJAX_REG_').innerHTML = result;

          }
      }else{
         result = '<div class="alert alert-dismissible alert-danger">';                 
          result += '<strong>    ERROR:</strong> Todos los campos deben estar llenos...';
          result += '</div>';
        __('_AJAX_REG_').innerHTML = result;


      }
    


    }else{
          result = '<div class="alert alert-dismissible alert-danger">';        
          result += '<strong>    ERROR:</strong> Los términos y condiciones deben ser aceptados...';
          result += '</div>';
        __('_AJAX_REG_').innerHTML = result;


    }

  	
}


function runScriptReg(e) {
  if(e.keyCode == 13) {
    goReg();
  }
}