    <ul class="nav navbar-nav navbar-right">
                <li class="" style="text-transform: uppercase;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <?php
                      session_start();
                      $user = $_SESSION['id'];
  
                     if($user==22 || $user == 36 || $user == 1 ){
                     	 echo "<img src='images/img.jpg' style='width: 29px;height: 29px;border-radius: 50%;margin-right: 10px;'>"; 
                         
                      }else{
                        echo "<img src='images/mibanco.png' style='width: 73px ;height: 29px;border-radius: 0;margin-right: 0;'>"; 
                       
                      }
                    
                   
                    echo " Bienvenido(a) ".$_SESSION['nom']." ".$_SESSION['ape']; 

                    ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <!-- <li><a href="#"><i class="fa fa-envelope"> </i> Enviar Mensaje</a></li>-->
                    <li><a href="cerrar.php"><i class="fa fa-power-off" aria-hidden="true"> </i> Cerrar sesión</a></li>
                    
                  </ul>
                </li>



              </ul>