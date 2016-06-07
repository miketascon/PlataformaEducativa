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

  <script src="vistas/app/js/jquery-1.12.4.min.js"></script>
  <script src="vistas/bootstrap/js/bootstrap.min.js"></script>