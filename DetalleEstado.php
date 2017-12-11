<?php

error_reporting(0);
session_start();

if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 


require 'Modelo/actualizar.php';
$sel =new Actualizar();
$id = $_GET["id"];
$code = $_GET["code"];
$term = $_GET["term"];

	if (isset($code) ) 
          {
            $ni = $sel->ActEstadoAgen($code,$term);
           echo"<script type=\"text/javascript\">alert('Se actualizó correctamente.'); window.location='DetalleObservaciones.php?cod=".$code."';</script>"; 
          }



?>

<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <?php include 'Vistas/head.php';  ?>
<style>
.messages{
        float: left;
        font-family: sans-serif;
        display: none;
    }
    .info{
        padding: 10px;
        border-radius: 10px;
        background: orange;
        color: #fff;
        font-size: 15px;
        text-align: center;
    }
    .before{
        padding: 10px;
        border-radius: 10px;
        background: blue;
        color: #fff;
        font-size: 15px;
        text-align: center;
    }
    .success{
        padding: 10px;
        border-radius: 10px;
        background: green;
        color: #fff;
        font-size: 15px;
        text-align: center;
    }
    .error{
        padding: 10px;
        border-radius: 10px;
        background: red;
        color: #fff;
        font-size: 15px;
        text-align: center;
    }

</style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
         <?php 

         include 'Vistas/menu.php'; ?>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

         <?php include 'Vistas/usuario.php'; ?>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
        
          <!-- /top tiles -->

          <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Actualizar datos</h2>
               	    <a href="DetalleObservaciones.php?cod=<?php echo  $id ?>" class="btn btn-success" style="float: right;"> << Regresar</a>
                   <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   
                        <form method="GET" id="reg_mobil" class="formulario">
                            <div class="form-inline">
                               <?php 
                        
                            $esco = $sel->EstadoAgen($id);
                            while($mio = $esco->fetch_assoc()){
                                
                                  
                                         

                           ?>
                              <label for="exampleTextarea"> ESTADO DE LA AGENCIA</label>
                               <input type="hidden" name="code" value="<?php echo $id ?>">  
                              <select class="form-control" name="term" >
                                    <option value=""> Seleccionar </option>

                                    <?php 

                                    if ($mio["estado"] == "Sin terminar") {
                                       echo " <option value=" . $mio["estado"]. " selected>". $mio["estado"]."</option>";
                                       echo "<option value='Terminado'>Terminado</option>";
                                    }
                                    else{
                                       echo "<option value=" . $mio["estado"]. " selected>". $mio["estado"]."</option>";
                                       echo "<option value='Sin terminar'>Sin terminar</option>";
                                    }


                                   ?> 
                              </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            
                              
                           
                                <?php   }  ?> 
				
			      
                                <button type="submit" class="btn btn-danger" >ACTUALIZAR</button>
                           
                          
                          </form>
                 

                  </div>
                </div>
              </div>

          </div>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         <?php include 'Vistas/footer.php'; ?>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <?php include 'Vistas/footerlib.php'; ?>
    <!-- /gauge.js -->
  </body>
</html>
