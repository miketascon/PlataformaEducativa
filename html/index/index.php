<?php include(HTML_DIR . '/secciones/header.php'); ?>
<body>
<?php include(HTML_DIR . '/secciones/topnav.php'); ?>
	


  <!-- Inicio de sesión-->
  <div id="iniciar_sesion" class="modal blue-grey lighten-5 ">
    <div class="modal-content">
      <h4 class=" center teal-text ">Iniciar Sesión</h4>

      <div class="row">
        <form action="" class="col s12">
          <div class="row">           
            <div class="input-field col s12">
              <input placeholder="Correo electrónico o teléfono" id="usuario" type="text" class="validate">
              <label for="usuario">Usuario</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <p>
                <input type="checkbox" id="recordarme" />
                <label for="recordarme">Recordarme</label>
              </p>
            </div>

          </div>
          <a href="#">¿Has olvidado tu contraseña?</a>              
        </form>
      </div>
    </div>
    <div class="modal-footer blue-grey darken-4">
      <a href="#!" class="  modal-close waves-effect waves-green btn-flat white-text">Cerrar</a>
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat white-text">Iniciar Sesión</a>
      <button type="submit" data-target="iniciarSesion" class="btn-flat modal-trigger modal-action modal-close  white-text">Modal</button>
    </div>
  </div>
          
  <!-- Registro-->  
  <div id="registro" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>




  
<?php include(HTML_DIR . '/secciones/btnavlat.php'); ?>
<?php include(HTML_DIR . '/secciones/contacto.php'); ?>
<?php include(HTML_DIR . '/secciones/footer.php'); ?>
 
</body>
</html>