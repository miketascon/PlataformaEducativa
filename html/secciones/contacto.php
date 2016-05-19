<!--Contenedor de Contacto-->

   <div class="container">
    <div class="section">
     <a name="contact"></a>

     <div class="row" style="padding-top: 5em" >
    <form class="col s12 scrollflow -slide-top -opacity" name="form1" method="post" action="mensaje.php">
   
                
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input  id="icon_prefix" type="text" class="validate" name="nombre" required="true">
          <label for="icon_prefix">Tu nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input type="number" id="icon_telephone" type="tel" class="validate" name="telefono" required="true">
          <label for="icon_telephone">Teléfono</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email" required="true">
          <label for="email" >Tu Email</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea type="text" id="mensaje" class="materialize-textarea" name="mensaje" required="true"></textarea>
          <label for="mensaje">Tu mensaje</label>
        </div>
        <div class="input-field col s6">
        <button class="btn waves-effect waves-light purple " type="submit" name="enviar" onclick="Materialize.toast('Enviando', 4000)">Enviar
            <i class="material-icons right">send</i>
        </button>
        
        </div>
        <p class="col s6 purple-text center-align">Gracias! Estaremos en contacto</p>
      </div>
    </form>

          <div class="row center">
              <a name="contact"></a>
              <div class="col s12 center">
                
                <h4 class="s12 center teal-text">Contacto</h4>
                <hr>
               
              </div>
          </div>
  </div>

      

    </div>
  </div>