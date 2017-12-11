 <?php
session_start();

 ?>

 <div class="left_col scroll-view">
            

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span style="color: #2a3f54;text-shadow: 1px 1px #2a3f54;">Bienvenido</span>
                <h2 style="text-transform: uppercase;"> SISTEMA MINKAY</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

           

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">
                <h3 style="color: #2a3f54;text-shadow: 1px 1px #2a3f54;">GENERAL</h3>
                <br><br>
                <ul class="nav side-menu"><?php 
                  $user = $_SESSION['id'];
                  if($user==22 || $user==36 ){
                         include 'inicio.php';
                         include 'reportes.php';
                       
                  }else{
                        include 'reportes.php';
                      }

                ?>
                 
                 
                </ul>
              </div>
           

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>