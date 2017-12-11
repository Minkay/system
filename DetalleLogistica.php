<?php

error_reporting(0);
session_start();

if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 


require 'Modelo/actualizar.php';
$sel =new Actualizar();
$to = $_GET["obs"];
$im = $_GET["im"];
$me2 = $_GET["me"];
$cre2 = $_GET["cre"];
$re2 = $_GET["res"];
$ac2 = $_GET["act"];


$cn =$_GET["cn"];
$id = $_GET["id"];
$code= $_GET["code"];
$obs= $_POST["obs"];
$me= $_POST["me"];
$cri= $_POST["cri"];
$res= $_POST["res"];
$ac= $_POST["ac"];



$file = $_FILES['archivo']['name'];
$img=$code."/".$file;

	if (isset($_FILES['archivo']) ) 
          {
            $ni = $sel->InsertLogistica($id,$to,$im,$me2,$cre2,$re2,$ac2,$obs,$img,$me,$cri,$res,$ac);
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
               	    <a href="DetalleObservaciones.php?cod=<?php echo  $code ?>" class="btn btn-success" style="float: right;"> << Regresar</a>
                   <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   
                        <form method="post" id="reg_mobil" enctype="multipart/form-data" class="formulario">
                            <div class="form-inline">
                               <?php 
                          $com ;
                          $ser = $sel->ObservacionLogistica($id);
                          while($mue = $ser->fetch_assoc()) {
                                
                                   if($mue[$cn]=='NO' && $mue[$to] !=""){

                                             $com= $mue[$to];
                                    $c0 = $mue[$me2];
                                    $c1= $mue[$cre2];
                                    $c2= $mue[$re2];
                                    $c3= $mue[$ac2];
                                    $en= $mue[$im];
                                         

                           ?>
                              <label for="exampleTextarea">Mejora | Preventivo</label>
                              <select class="form-control" name="me" >
                                    <option value=""> Seleccionar </option>
                                    <?php echo " <option value=" .$c0. " selected>".$c0."</option>" ?>  
                                    <option value="Mejora">Mejora</option>
                                    <option value="Preventivo">Preventivo</option>
                              </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <label for="exampleTextarea">Criticidad</label>
                              <select class="form-control" name="cri" >
                                    <option value=""> Seleccionar </option>
                                    <?php echo " <option value=" .$c1. " selected>".$c1."</option>" ?>  
                                    <option value="Bajo">Bajo</option>
                                    <option value="Medio">Medio</option>
                                    <option value="Alto">Alto</option>
                              </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <label for="exampleTextarea">Responsable</label>
                              <select class="form-control" name="res">
                                    <option value=""> Seleccionar </option>
                                    <?php echo " <option value=" .$c2. " selected>".$c2."</option>" ?>  
                                    <option value="Mantenimiento">Mantenimiento</option>
                                    <option value="Jefe de Banca">Jefe de Banca</option>
                                    
                              </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <!--<label for="exampleTextarea">Actual | Anterior</label>
                              <select class="form-control" name="ac" >
                                    <option value=""> Seleccionar </option>
                                    <?php echo " <option value=" .$c3. " selected>".$c3."</option>" ?>
                                    <option value="Actual">Actual</option>
                                    <option value="Anterior">Anterior</option>
                                    
                              </select>-->
                            </div><br>
                            <div class="form-group">
                              <label for="exampleTextarea">Observacion</label>
                              <textarea class="form-control" id="exampleTextarea" name="obs" rows="3"><?php echo $com; ?></textarea>
                            </div>
                            <div class="form-inline">
                              <label for="exampleInputFile">Subir la imagen</label>
                               <input name="archivo" type="file" id="imagen" />     <br>  
                               <input type="hidden" name="code" value="<?php echo $code ?>">  
                                <?php   } } ?> 
				<div class="messages"></div> 
				<br /><br />
				<input type="button" class="btn btn-primary" value="Subir imagen" id="subim" />        
                             
                              <button type="submit" class="btn btn-danger" style="float: right;">ACTUALIZAR</button>
                              </div>
                            
                         
                            
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
