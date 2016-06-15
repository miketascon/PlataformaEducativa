<footer>
    <div class="container">
      <div class="row">
      <?php if($_users[$_SESSION['app_id']]['permisos'] == 1){
                   echo '<div class="col-xs-12 " style="text-align: center;">
                        <p>' . APP_COPY . '</p>
                        </div>';
            }else{
              echo '<div class="col-xs-6 " >
                    <p>' . APP_COPY . '</p>
                    </div>
                     <div class="col-xs-6">
                      <ul class="list-inline text-right">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">twitrer</a></li>
                        <li><a href="#">Youtube</a></li>
                      </ul>
                    </div>';
            } ?>
        
       
      </div>
    </div>
  </footer>
  </div>

  <script src="vistas/app/js/jquery-1.12.4.min.js"></script>
  <script src="vistas/app/js/jquery-ui.min.js" type="text/javascript"></script>
   <script src="vistas/app/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="vistas/app/js/ui.js" type="text/javascript"></script>
  <script src="vistas/bootstrap/js/bootstrap.min.js"></script>
  <script src="vistas/app/js/ajaxform.js"></script>
  <script>
  $(function(){
    var autocompletar = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
     foreach ($_pais as $id_country => $usuarios_array) { //usamos count para saber cuantos elementos hay ?>
       autocompletar.push('<?php echo $_pais[$id_country]['names_country']; ?>');
     <?php } ?>
     $("#names_country").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar //Le decimos que nuestra fuente es el arreglo
     });
  });
  </script>

 
