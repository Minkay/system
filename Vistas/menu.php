 <?php
session_start();

 ?>

 <div class="left_col scroll-view">
            

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/poi.png" alt="..." class="img-circle profile_img" style="border-radius: 0%;">
              </div>
              <div class="profile_pic">
                <img src="images/ba.png" alt="..." class="img-circle profile_img" style="border-radius: 0%;">
              </div>
            </div>
            <!-- /menu profile quick info -->

           

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">
               
                <ul class="nav side-menu"><?php 
                  $user = $_SESSION['id'];
                  if($user==22 || $user==36 || $user==1 || $user==39 || $user==37 || $user==41 ){
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