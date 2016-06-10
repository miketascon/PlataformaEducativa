function AddUser(){
	var form, dato, ajax, names, last_names, email, password, gender, permisos, phone, cel_phone, address;

	names = __('names').value;
	last_names = __('last_names').value;	
	email = __('email').value;	
	password = __('password').value;
	gender = __('gender').value;
	permisos = __('permisos').value;
	phone = __('phone').value;
	cel_phone = __('cel_phone').value;
	address = __('address').value;


	if(names.length == 0){
		
		__('names').focus('focusColor');

		ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> El campo nombres debe contener un valor</p>';
        ajax += '</div>';
    	__('_AJAX_NOMBRE_').innerHTML = ajax;
    	
    	return false;	

		
		
			
	}else if(last_names.length == 0){
		__('last_names').focus('focusColor');

		ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> El campo apellidos debe contener un valor</p>';
        ajax += '</div>';
    	__('_AJAX_APELLIDOS_').innerHTML = ajax;
    	
    	return false;
    }else if(email.length == 0){

		__('email').focus('focusColor');

		ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> El campo email debe contener un valor</p>';
        ajax += '</div>';
    	__('_AJAX_EMAIL_').innerHTML = ajax;
    	
    	return false;
    }else if(password.length == 0){
		__('password').focus('focusColor');

		ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> El campo contraseña debe contener un valor</p>';
        ajax += '</div>';
    	__('_AJAX_PASS_').innerHTML = ajax;    	
    	return false;
    }else if(gender.length == 0){
		__('gender').focus('focusColor');

		ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> Debes seleccionar una opción</p>';
        ajax += '</div>';
    	__('_AJAX_GENERO_').innerHTML = ajax;
    	
    	return false;
    }else if(permisos.length == 0){
		__('permisos').focus('focusColor');

		ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> Debes seleccionar una opción</p>';
        ajax += '</div>';
    	__('_AJAX_PERMISOS_').innerHTML = ajax;
    	
    	return false;
    }
        return true;
		form.submit();
	  
}


function EditUser(){
	var  ajax,  password, gender, permisos;

	password = __('password').value;
	gender = __('gender').value;
	permisos = __('permisos').value;



    if(gender.length == 0){
		__('gender').focus('focusColor');

		ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> Debes seleccionar una opción</p>';
        ajax += '</div>';
    	__('_AJAX_GENERO_').innerHTML = ajax;
    	
    	return false;
    }else if(permisos.length == 0){
		__('permisos').focus('focusColor');

		ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> Debes seleccionar una opción</p>';
        ajax += '</div>';
    	__('_AJAX_PERMISOS_').innerHTML = ajax;
    	
    	return false;
    }

        return true;
		form.submit();

}


function AjaxCursos(){
    var ajax, ficha, nombre, descripcion;

    ficha =  __('ficha').value;
    nombre = __('nombre').value;
    descripcion =  __('descripcion').value;

     if(ficha.length == 0){
        __('ficha').focus('focusColor');

        ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> El campo ficha debe contener un valor</p>';
        ajax += '</div>';
        __('_AJAX_FICHA_').innerHTML = ajax;
        
        return false;
    }else if(nombre.length == 0){

        __('nombre').focus('focusColor');

        ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> El campo nombre debe contener un valor</p>';
        ajax += '</div>';
        __('_AJAX_NOMBRE_CURSO_').innerHTML = ajax;
        
        return false;
    }else if(descripcion.length == 0){
        __('descripcion').focus('focusColor');

        ajax = '<div class="alerta alerta-danger">';            
        ajax += '<p> El campo descripción debe contener un valor</p>';
        ajax += '</div>';
        __('_AJAX_DESCRIPCION_').innerHTML = ajax;     
        return false;
    }

        return true;
        form.submit();

}




