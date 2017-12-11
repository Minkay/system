 <?php 


error_reporting(0);
session_start();


if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 
require 'Modelo/procesos.php';
$sel =new Procesos();
$codigo= $_GET['codigo'];
$codigo2= $_GET['r2'];
$codigo3= $_GET['r3'];
$codigo4= $_GET['r4'];
$codigo5= $_GET['r5'];
$codigo6= $_GET['r6'];
$codigo7= $_GET['r7'];
$codigo8= $_GET['r8'];
$puij= $_GET['pui'];

 ?>

<!DOCTYPE html>
<html lang="en">
 


  <body style="background: white;">
  

<input type="hidden" value="<?php echo $codigo; ?>" id="v1">
<input type="hidden" value="<?php echo $codigo2; ?>" id="v2">
<input type="hidden" value="<?php echo $codigo3; ?>" id="v3">
<input type="hidden" value="<?php echo $codigo4; ?>" id="v4">
<input type="hidden" value="<?php echo $codigo5; ?>" id="v5">
<input type="hidden" value="<?php echo $codigo6; ?>" id="v6">
<input type="hidden" value="<?php echo $codigo7; ?>" id="v7">
<input type="hidden" value="<?php echo $codigo8; ?>" id="v8">
<input type="hidden" value="<?php echo $puij; ?>" id="uh">
     
          
            
             <div class="col-md-6 col-sm-4 col-xs-12" style="display:none">
                  <div class="x_panel tile fixed_height_320" id="general" >

              	</div>
            </div>
            
            
            	<div class="col-md-6 col-sm-4 col-xs-12" style="display:none">
                  <div class="x_panel tile fixed_height_320" id="cont" >

              </div>
            </div>
            	          
          
          
             <div class="col-md-6 col-sm-4 col-xs-12" style="display:none">
          
              <div class="x_panel tile fixed_height_320" id="cabecera" >

              </div>
            </div>


  	   <div class="col-md-6 col-sm-4 col-xs-12" style="display:none">
  
              <div class="x_panel tile fixed_height_320" id="container" >

              </div>
            </div>


             <div class="col-md-6 col-sm-4 col-xs-12" style="display:none">
          
              <div class="x_panel tile fixed_height_320" id="cabecerados" >

              </div>
            </div>
            
             <div class="col-md-6 col-sm-4 col-xs-12" style="display:none">
            
              <div class="x_panel tile fixed_height_320" id="container2" >

              </div>
            </div>
            
            
            

             <div class="col-md-6 col-sm-4 col-xs-12" style="display:none"> 
          
              <div class="x_panel tile fixed_height_320" id="cabeceratres" >

              </div>
            </div>
            
             <div class="col-md-6 col-sm-4 col-xs-12" style="display:none">
             
              <div class="x_panel tile fixed_height_320" id="container3" >

              </div>
            </div>

              <div class="x_panel tile fixed_height_320" style="height: 420px;" id="agenpun">
              
             
            </div>
            



		 <div class="row" id="dos" style="display:none;">
		 	
		 	
                		<?php include 'principal2.php';  ?>
              		
		 </div>
		 
		 <div class="row" id="tres" style="display:none;">
		 	
		 	
                		<?php include 'principal3.php';  ?>
              		
		 </div>

     <div class="row" id="cuatro" style="display:none;">
      
      
                    <?php include 'principal4.php';  ?>
                  
     </div>
      


    <?php include 'Vistas/footerlib.php'; ?>
    <!-- /gauge.js -->
 
  </body>
</html>
