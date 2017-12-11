<?php

error_reporting(0);
session_start();

if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 


require 'Modelo/procesos.php';


$sel =new Procesos();
$cod= $_GET['cod'];



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'Vistas/head.php';  ?>
     <script  src="https://code.jquery.com/jquery-3.1.1.js"  ></script>
  </head>
 <script>
  $(document).ready(function() {



});
  </script>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
         <?php include 'Vistas/menu.php'; ?>
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

        
            <div class="row x_title" style="    background-color: white;">
                  <div class="col-md-13">
                    <h3><small style="font-weight: 700;font-size:13px;">
                      <?php 
                              $idzona="";
                              $ser = $sel->consultaAgencia($cod); while($mue = $ser->fetch_assoc()){                           
                                  echo "Zona: ".$mue["zona"]." | Agencia: ".$mue["age"]." | Region: ".$mue["re"]." | Fecha Registro: ".$mue["fe"];
                                    $idzona = $mue["zona"] ;
                                }

                            ?>
                    </small>
  
  
                    </h3>

                  </div>
                </div>

          <div class="row">
    		          <div class="col-md-12 col-sm-12 col-xs-12">

                          <div class="x_panel">
                               
   <a href="puntaje.php" class="btn btn-success btn-xs" style="float: left;"> << Regresar</a>
    <a href="Export_Detalle.php?cod=<?php echo $cod ?>" class="btn btn-danger btn-xs" style="float: left;"> 
   <i class="fa fa-file-excel-o" aria-hidden="true"></i> Exportar</a>
                                <div class="x_content">

                                    <!-- start accordion -->
                                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel">

                                            <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="false" aria-controls="collapseTwo" style="color: white;">
                                             <?php  
                                                         $suma= 0;$count=0;$resul=0;
                                                         
                                                         $ser = $sel->manPuntaje($cod); while($mue = $ser->fetch_assoc()){ 
                                                              $count++;
                                                              $suma = $suma + (int)$mue["puntaje"]  ;
                                                              $resul = $suma / $count ;
                                                         }
                                                  ?>

<h4 class="panel-title" > > DOC. MANTENIMIENTO PERIODICO -------------------------------------------------------------------------------------------- PUNTAJE :
                                                <?php 
                                                 $r1 = number_format((float)$resul, 2, '.', '');
                                                echo $r1;?> </h4>

                                            </a>
                                            <div id="collapseone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                             <tr>
                                                              <?php 
					                              $ser = $sel->manSelect('1',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row"  style="vertical-align: inherit;text-align: center;">AIRE ACONDICIONADO</th>
                                                           <?php  
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          }
				                            ?>                                                              
                                                               
                                                            </tr>
                                                       
                                                           <tr>
                                                              <?php 
					                              $ser = $sel->manSelect('2',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row"  style="vertical-align: inherit;text-align: center;">EXTINTORES</th>
                                                           <?php  
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          }
				                            ?>                                                              
                                                               
                                                            </tr>
                                                        
                                                              <tr>
                                                              <?php 
					                              $ser = $sel->manSelect('3',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row" style="vertical-align: inherit;text-align: center;">GRUPO ELECTROGENO</th>
                                                           <?php  
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          }
				                            ?>                                                              
                                                               
                                                            </tr>
                                                       
                                                             <tr>
                                                              <?php 
					                              $ser = $sel->manSelect('4',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row" style="vertical-align: inherit;text-align: center;">LUCES DE EMERGENCIA</th>
                                                           <?php  
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          }
				                            ?>                                                              
                                                               
                                                            </tr>
                                                      
                                                            <tr>
                                                              <?php 
					                              $ser = $sel->manSelect('5',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row"  style="vertical-align: inherit;text-align: center;">POZO A TIERRA</th>
                                                           <?php  
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          }
				                            ?>                                                              
                                                               
                                                            </tr>
                                                      
                                                            <tr>
                                                              <?php 
					                              $ser = $sel->manSelect('6',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row" style="vertical-align: inherit;text-align: center;">FUMIGACION </th>
                                                           <?php  
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          }
				                            ?>                                                              
                                                               
                                                            </tr>
                                                        
                                                            <tr>
                                                              <?php 
					                              $ser = $sel->manSelect('7',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row" style="vertical-align: inherit;text-align: center;">CERTIFICADO INDECI</th>
                                                           <?php  
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con el documento de mantto </td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con el documento de mantto</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          }
				                            ?>                                                              
                                                               
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: white;">
                                                  <?php  
                                                         $suma= 0;$count=0;$resul=0 ;
                                                         
                                                         $ser = $sel->logisticaPuntaje($cod); while($mue = $ser->fetch_assoc()){ 
                                                              $count++;
                                                              $suma = $suma + (int)$mue["puntaje"]  ;
                                                              $resul = $suma / $count ;
                                                         }
                                                  ?>
                                              <h4 class="panel-title"  > > LOGISTICA (economato, formatearía, Courier, bienes) ----------------------------------------------------------------------- PUNTAJE : 
                                              <?php 
                                               $r2 = number_format((float)$resul, 2, '.', '');
                                                echo $r2;?> </h4>
                                            </a>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                             <tr>
                                                              <?php ;
					                              $ser = $sel->logisticaSelect('1',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">AB. ECONOMATO</th>
                                                           <?php  
                                                              $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>A tiempo</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>A tiempo</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad Adecuada</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad Adecuada</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuentan con los suministros requeridos</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuentan con los suministros requeridos</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buena calidad de suministros</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buena calidad de suministros</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          						}
				                            ?>   
                                                            </tr>
                                                           <tr>
                                                              <?php 
					                              $ser = $sel->logisticaSelect('2',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">AB. FORMATERIA</th>
                                                           <?php  
                                                           $pt2 =  $mue["puntaje"];
                                                            echo "<input  type='hidden' value='$pt2' id='p2' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>A tiempo</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>A tiempo</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad Adecuada</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad Adecuada</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuentan con los suministros requeridos</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuentan con los suministros requeridos</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buena calidad de suministros</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buena calidad de suministros</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          						}
				                            ?>   
                                                            </tr>
                                                              <tr>
                                                              <?php 
					                              $ser = $sel->logisticaSelect('3',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SERVICIO COURIER</th>
                                                           <?php  
                                                           $pt1 =  $mue["puntaje"];
                                                           echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Coordinación oportuna </td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Coordinación oportuna </td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen trato de su personal</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen trato de su personal</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Puntualidad</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Puntualidad</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin perdidas</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin perdidas</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          						}
				                            ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
					                              $ser = $sel->logisticaSelect('4',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">AB. DE BIENES</th>
                                                           <?php  
                                                           $pt1 =  $mue["puntaje"];
                                                            echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>A tiempo </td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>A tiempo </td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad adecuada</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad adecuada</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuentan con los suministros requeridos</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuentan con los suministros requeridos</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buena calidad de suministros</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buena calidad de suministros</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          						}
				                            ?>   
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>




                                        </div>
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: white;">
                                             <?php  
                                                         $suma= 0;$count=0;$resul=0 ;
                                                         
                                                         $ser = $sel->serviciosPuntaje($cod); while($mue = $ser->fetch_assoc()){ 
                                                              $count++;
                                                              $suma = $suma + (int)$mue["puntaje"]  ;
                                                              $resul = $suma / $count ;
                                                         }
                                                  ?>
                                            
                                                <h4 class="panel-title" > > SERVICIOS BASICOS Y ELECTRODOMESTICOS ------------------------------------------------------------------------------ PUNTAJE :
                                                <?php 
                                                 $r3 = number_format((float)$resul, 2, '.', '');
                                                echo $r3 ;?> </h4>
                                            </a>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                 <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('1',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PROGRAMA VEHICULAR / MOTOS-OPINION DEL USUARIO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Abastecimiento de moto es oportuna</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Abastecimiento de moto es oportuna</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Atención oportuna (entrega documentos - moto pagada)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Atención oportuna (entrega documentos - moto pagada)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Todos son casos tuvieron proceso regular (no hay motos en la agencia)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Todos son casos tuvieron proceso regular (no hay motos en la agencia)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin inconvenientes en los pagos (recibos)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin inconvenientes en los pagos (recibos)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                           <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('2',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ENERGIA ELECTRICA</th>
                                                           <?php 
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin cortes del suministro electrico</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin cortes del suministro electrico</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Energia es estable y potencia requerida</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Energia es estable y potencia requerida</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Medidor es propio</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Medidor es propio</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin inconvenientes en los pagos (recibos)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin inconvenientes en los pagos (recibos)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                              <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('3',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">AGUA</th>
                                                           <?php 
                                                             $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />"; 
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin cortes del suministro de agua</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin cortes del suministro de agua</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>El suministro de agua es suficiente y el agua es potable</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>El suministro de agua es suficiente y el agua es potable</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Medidor es propio</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Medidor es propio</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin inconvenientes en los pagos (recibos)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin inconvenientes en los pagos (recibos)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                           <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('4',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SERVICIO DE LIMPIEZA  (DESEMPEÑO DEL PERSONAL)</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Colaborador y de buen trato</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Colaborador y de buen trato</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Puntualidad</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Puntualidad</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Eficiencia en sus labores</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Eficiencia en sus labores</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Turno completo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Turno completo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             
                                                           
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('5',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ANEXOS TELEFONICOS</th>
                                                           <?php
                                                           $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />"; 
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'Cantidad de anexos es suficiente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad de anexos es suficiente/td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Todos operativos (en ese momento)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Todos operativos (en ese momento)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No presentan casos de mantto recurrente y Ubicación es la apropiada</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No presentan casos de mantto recurrente y Ubicación es la apropiada</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buena señal en la linea</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buena señal en la linea</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('6',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">DISPENSADOR DE AGUA (DIRECTO A RED O CON BIDON)</th>
                                                           <?php  
                                                           $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>La Agencia cuenta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>La Agencia cuenta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Calidad de agua es adecuada</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Calidad de agua es adecuada</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Modelo / ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Modelo / ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('7',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PROYECTOR MULTIMEDIA</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>La Agencia cuenta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>La Agencia cuenta con el equipo/td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('8',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">LACTARIO (CUARTO/ESPACIO APROPIADO)</th>
                                                           <?php
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />"; 
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene lactario (ambiente/espacio apropiado)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene lactario (ambiente/espacio apropiado)/td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Esta amoblado correctamente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Esta amoblado correctamente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con friobar independiente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con friobar independiente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buenas condiciones: Pintura, Limpieza, Orden</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buenas condiciones: Pintura, Limpieza, Orden</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('9',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">FRIO BAR - LACTARIO</th>
                                                           <?php  
                                                           $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuneta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuneta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('10',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">KITCHENET  (CUARTO/ESPACIO APROPIADO)</th>
                                                           <?php  
                                                           $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene kitchen (ambiente/espacio apropiado)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene kitchen (ambiente/espacio apropiado)/td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Es Independiente (no comparte con otras áreas)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Es Independiente (no comparte con otras áreas)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buenas condiciones: Pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buenas condiciones: Pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpio y Ordenado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpio y Ordenado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('11',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">FRIO BAR</th>
                                                           <?php 
                                                              $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){

                                                              echo "<td style='background-color: red;color: white;'>Cuneta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuneta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('12',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">HORNO MICROONDAS</th>
                                                           <?php  
                                                             $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuneta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuneta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                           
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('13',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">DISPENSADOR DE AGUA </th>
                                                           <?php 
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuneta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuneta con el equipo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Ubicación del equipo, son apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Modelo del equipo, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('14',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">REPOSTERO / ALACENA</th>
                                                           <?php  
                                                             $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>La Agencia cuenta con el mobiliario</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>La Agencia cuenta con el mobiliario</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>El mobiliario esta operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>El mobiliario esta operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No requiere reparación alguna (actual)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No requiere reparación alguna (actual)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Modelo del mobiliario, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Modelo del mobiliario, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('15',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">MESA / COMEDOR</th>
                                                           <?php
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";  
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>La Agencia cuenta con el mobiliario</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>La Agencia cuenta con el mobiliario</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>El mobiliario esta operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>El mobiliario esta operativos (funcionan)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No requiere reparación alguna (actual)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No requiere reparación alguna (actual)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Modelo del mobiliario, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Modelo del mobiliario, es el apropiado para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('16',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SUMIDERO DE RACK</th>
                                                           <?php 
                                                             $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />"; 
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene sumidero</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene sumidero</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Esta dentro del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Esta dentro del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No emana mal olor</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No emana mal olor</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('17',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SSHH DISCAPACITADOS</th>
                                                           <?php 
                                                              $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene sshh Discapacitados</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene sshh Discapacitados</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Infraestructura en buen estado: Techo, Paredes, Piso</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Infraestructura en buen estado: Techo, Paredes, Piso</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Recubrimiento y Pintura en buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Recubrimiento y Pintura en buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buena ventilación del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buena ventilación del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('18',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SUMIDERO DE SSHH DISCAPACITADOS</th>
                                                           <?php  
                                                             $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene sumidero</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene sumidero</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Esta dentro del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Esta dentro del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No emana mal olor</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No emana mal olor</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('19',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SUMIDERO DE SSHH DISCAPACITADOS</th>
                                                           <?php  
                                                           $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'Cantidad de anexos es suficiente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad de anexos es suficiente/td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Todos operativos (en ese momento)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Todos operativos (en ese momento)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No presentan casos de mantto recurrente y Ubicación es la apropiada</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No presentan casos de mantto recurrente y Ubicación es la apropiada</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buena señal en la linea</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buena señal en la linea</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('20',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SSHH MIXTO</th>
                                                           <?php  
                                                             $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene sshh Mixto</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene sshh Mixto</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Infraestructura en buen estado: Techo, Paredes, Piso</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Infraestructura en buen estado: Techo, Paredes, Piso</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Recubrimiento y Pintura en buen estadoBuena ventilación del ambiente </td>"; 
                                                                 echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Recubrimiento y Pintura en buen estadoBuena ventilación del ambiente                           </td>";        echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buena ventilación del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buena ventilación del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('21',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SUMIDERO DE SSHH MIXTO</th>
                                                           <?php  
                                                              $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene sumideroEsta dentro del ambiente    </td>";                     echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene sumideroEsta dentro del ambiente </td>";                        echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Esta dentro del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Esta dentro del ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No emana mal olor</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No emana mal olor</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('22',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ACTIVOS EN DESUSO Y OBSOLETOS</th>
                                                           <?php  
                                                             $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Almacenamiento adecuado del Activo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Almacenamiento adecuado del Activo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Imperceptible a los clientes de la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Imperceptible a los clientes de la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Activo puede ser Reutilizado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Activo puede ser Reutilizado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Se cuenta con el informe para la baja del Activo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Se cuenta con el informe para la baja del Activo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="panel">
                                            <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapsecuatro" aria-expanded="false" aria-controls="collapsecuatro" style="color: white;">
                                             <?php  
                                                         $suma= 0;$count=0;$resul=0 ;
                                                         
                                                         $ser = $sel->externaPuntaje($cod); while($mue = $ser->fetch_assoc()){ 
                                                              $count++;
                                                              $suma = $suma + (int)$mue["puntaje"]  ;
                                                              $resul = $suma / $count ;
                                                         }
                                                  ?>
                                              <h4 class="panel-title" > > INFRAESTRUCTURA EXTERNA  --------------------------------------------------------------------------------------------------- PUNTAJE :
                                                <?php
                                                $r4 = number_format((float)$resul, 2, '.', '');
                                                echo $r4;?> </h4>

                                            </a>
                                            <div id="collapsecuatro" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->externaSelect('1',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">FRISO LUMINOSO O LETRERO C. HISTÓRICO</th>
                                                           <?php   

                                                              $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Visible al publico, buena ubicación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Visible al publico, buena ubicación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativo: Iluminación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativo: Iluminación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpio</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpio</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación (material y color)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación (material y color)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->externaSelect('2',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PUERTA PRINCIPAL (PÓRTICO-MAMPARA)</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativa al 100%: bisagras, cerrojos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativa al 100%: bisagras, cerrojos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Puertas niveladas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Puertas niveladas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Vidrios limpio y completos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Vidrios limpio y completos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->externaSelect('3',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES DE FACHADA</th>
                                                           <?php 
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />"; 
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Revestimiento uniforme y en buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Revestimiento uniforme y en buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Colores mantiene tonalidad y uniformidad</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Colores mantiene tonalidad y uniformidad</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza y buena presentación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza y buena presentación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->externaSelect('4',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">VIDRIOS DE FACHADA</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Vidrios Limpios</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Vidrios Limpios</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado: Sin fisuras ni perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado: Sin fisuras ni perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Con vinil de cambio de marca</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Con vinil de cambio de marca</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de silicona y elementos de sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de silicona y elementos de sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->externaSelect('5',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">RETIRO MUNICIPAL</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Señalización adecuada</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Señalización adecuada</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Pintura en buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Pintura en buen estado/td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza y buena presentación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza y buena presentación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->externaSelect('6',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">VEREDA</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la infraestructura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la infraestructura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Dimensiones adecuadas: Anchos / pendientes / pasos / rampas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Dimensiones adecuadas: Anchos / pendientes / pasos / rampas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin obstrucciones, agujeros, ni obstáculos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin obstrucciones, agujeros, ni obstáculos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Pintura adecuada / Cinta antideslizante</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Pintura adecuada / Cinta antideslizante</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>                                                           
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>



                                        </div>
                                         <div class="panel">
                                            <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5" style="color: white;">
                                             <?php  
                                                         $suma= 0;$count=0;$resul=0 ;
                                                         
                                                         $ser = $sel->techoPuntaje($cod); while($mue = $ser->fetch_assoc()){ 
                                                              $count++;
                                                              $suma = $suma + (int)$mue["puntaje"]  ;
                                                              $resul = $suma / $count ;
                                                         }
                                                  ?>

                                            <h4 class="panel-title" > > ESTADO DE TECHO   ---------------------------------------------------------------------------------------------------------------- PUNTAJE :
                                                <?php  $r5 = number_format((float)$resul, 2, '.', '');
                                                echo $r5 ;?> </h4>

    


                                            </a>
                                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                              <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->techoSelect('1',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ESTADO DEL TECHO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Se tiene acceso al techo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Se tiene acceso al techo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No presenta casos de filtración</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No presenta casos de filtración</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de la infraestructura (piso inferior/techo)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de la infraestructura (piso inferior/techo)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpio de basura y obstrucciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpio de basura y obstrucciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->techoSelect('2',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ESTADO CONDUCTO DE DRENAJE PLUVIAL</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene ductos de drenaje</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene ductos de drenaje</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Dimensionamiento y cantidad adecuadas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Dimensionamiento y cantidad adecuadas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación (material)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación (material)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpios de obstrucciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpios de obstrucciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->techoSelect('3',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ESTADO DE COBERTURA DE CALAMINA EXISTENTE</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene cobertura de calamina</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene cobertura de calamina</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Dimensionamiento adecuado (cubre área importante)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Dimensionamiento adecuado (cubre área importante)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación: cobertura y estructura de soporte</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación: cobertura y estructura de soporte</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No presenta Agujeros / No presenta averías</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No presenta Agujeros / No presenta averías</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->techoSelect('4',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ESTADO DE CANALETA DE DRENAJE</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene canaleta de drenaje</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene canaleta de drenaje</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Dimensionamiento adecuado (según zona)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Dimensionamiento adecuado (según zona)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación (material)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación (material)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpios de obstrucciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpios de obstrucciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->techoSelect('5',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ESTADO DE TRATAMIENTO IMPERMEABILIZANTE EXISTENTE</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiene Tratamiento Impermeabilizante </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiene Tratamiento Impermeabilizante </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Dimensionamiento adecuado (cubre área importante)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Dimensionamiento adecuado (cubre área importante)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación (material impermeabilizante)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación (material impermeabilizante)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No presenta riesgos de daños futuros</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No presenta riesgos de daños futuros</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->techoSelect('6',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ESTADO DE GEOMEMBRANA EXISTENTE</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la Geomembrana</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la Geomembrana</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Dimensionamiento adecuado (cubre área importante)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Dimensionamiento adecuado (cubre área importante)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No presenta cortes, picaduras u otros daños</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No presenta cortes, picaduras u otros daños</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No presenta riesgos de daños futuros</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No presenta riesgos de daños futuros</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>                                                           
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="panel">
                                            <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6" style="color: white;">
                                             <?php  
                                                         $suma= 0;$count=0;$resul=0 ;
                                                         
                                                         $ser = $sel->internaPuntaje($cod); while($mue = $ser->fetch_assoc()){ 
                                                              $count++;
                                                              $suma = $suma + (int)$mue["puntaje"]  ;
                                                              $resul = $suma / $count ;
                                                         }
                                                  ?>


                                               <h4 class="panel-title" > > INFRAESTRUCTURA INTERNA   ----------------------------------------------------------------------------------------------------- PUNTAJE :
                                                <?php  $r6 = number_format((float)$resul, 2, '.', '');
                                                echo $r6;?> </h4>


                                            </a>
                                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                              <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">AREA DE CAJA VENTANILLAS</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('1',"Techo",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">TECHO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('1',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('1',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                              <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">AREA DE ESPERA</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('2',"Techo",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">TECHO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('2',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('2',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7" style="color: white;">
                                             <?php  
                                                         $suma= 0;$count=0;$resul=0;
                                                         
                                                         $ser = $sel->mobiliarioPuntaje($cod); while($mue = $ser->fetch_assoc()){ 
                                                              $count++;
                                                              $suma = $suma + (int)$mue["puntaje"]  ;
                                                              $resul = $suma / $count ;
                                                         }
                                                  ?>

                                              <h4 class="panel-title" > > MOBILIARIO / SILLONERIA -------------------------------------------------------------------------------------------------------- PUNTAJE :
                                                <?php  $r7 = number_format((float)$resul, 2, '.', '');
                                                echo $r7;?> </h4>

                                            </a>
                                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                 <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('1',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">BANQUETAS DE ESPERA</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>

                                                            <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('2',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SILLAS FIJAS</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>

                                                            <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('3',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SILLAS GIRATORIAS</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('4',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">TACHOS</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('5',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ORDENADORES DE COLA</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad es suficiente (poco/mucho)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpias / Sin manchas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Mobiliario es nuevo (reciente), modelo uniforme, color institucional</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('6',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">MODULOS DE ATENCION </th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('7',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ESTANTES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('8',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">CREDENZAS</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('9',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ANAQUELES - ARCHIVO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->mobiliarioSelect('10',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ANAQUELES - ECONOMATO</th>
                                                           <?php 
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />"; 
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cantidad suficiente / Material es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Seguridad / Buena sujeción</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Son del formato actual / Tiene el color corporativo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                                                                                     
                                                                                                             
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="panel">
                                            <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8" style="color: white;">
                                             <?php  
                                                         $suma= 0;$count=0;$resul=0;
                                                         
                                                         $ser = $sel->equipoPuntaje($cod); while($mue = $ser->fetch_assoc()){ 
                                                              $count++;
                                                              $suma = $suma + (int)$mue["puntaje"]  ;
                                                              $resul = $suma / $count ;
                                                         }
                                                  ?>


                                               <h4 class="panel-title" > > EQUIPAMIENTO (AA, GE, EXT, LE, UPS, PAT, Bombas) ------------------------------------------------------------------------- PUNTAJE :
                                                <?php  $r8 = number_format((float)$resul, 2, '.', '');
                                                echo $r8;?> </h4>


                                            </a>
                                            <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                 <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('1',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">INSTALACIONES ELÉCTRICAS Y DE RED</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No hay cables sueltos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No hay cables sueltos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No hay Accesorios sueltos (tomacorrientes/tapas/interruptores)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No hay Accesorios sueltos (tomacorrientes/tapas/interruptores)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tableros eléctricos en buen estado y señalizados</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tableros eléctricos en buen estado y señalizados</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Instalaciones adecuadas: No genera parpadeo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Instalaciones adecuadas: No genera parpadeo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>

                                                            <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('2',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ILUMINACION</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con luminarias ahorro de energía (LED)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con luminarias ahorro de energía (LED)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buena iluminación en sus área</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buena iluminación en sus área</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpias y ordenadas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpias y ordenadas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Modelo uniforme / Color de luz uniforme</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Modelo uniforme / Color de luz uniforme</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>

                                                            <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('3',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">UPS</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Se encuentra operativo (verificar con JBS)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Se encuentra operativo (verificar con JBS)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpios (superficialmente)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpios (superficialmente)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>capacidad y autonomía mínima de 10 min</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>capacidad y autonomía mínima de 10 min</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('4',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">GRUPO ELECTROGENO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con base con ruedas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con base con ruedas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación y Limpio</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación y Limpio</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>capacidad es adecuada para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>capacidad es adecuada para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tiempo menor a 1 año</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tiempo menor a 1 año</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('5',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">AIRE ACONDICIONADO 1  … n (los observables)</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación / Limpio (superficie externa)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación / Limpio (superficie externa)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>tiempo menor a 1 año / Cuenta con timers de control de horario</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>tiempo menor a 1 año / Cuenta con timers de control de horario</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>No genera ruidos molestos / No genera malo olores</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>No genera ruidos molestos / No genera malo olores</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Capacidad es adecuada para el ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Capacidad es adecuada para el ambiente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('6',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">RACK - SERVIDOR</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Esta cerrado (el tamaño si puede contener a los servidores)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Esta cerrado (el tamaño si puede contener a los servidores)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpio</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpio</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Ordenado (cableado y ubica)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Ordenado (cableado y ubica)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Acceso restringido (seguridad)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Acceso restringido (seguridad)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('7',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">CISTERNA Y BOMBAS</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza adecuada interna / externa</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza adecuada interna / externa</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Entorno despejado / acceso libre</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Entorno despejado / acceso libre</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin agente externo de contaminación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin agente externo de contaminación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tapa optima, buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tapa optima, buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('8',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">TANQUE ELEVADO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza adecuada interna / externa</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza adecuada interna / externa</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Acceso libre y seguro (escalera)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Acceso libre y seguro (escalera)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Capacidad m3 es requerida para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Capacidad m3 es requerida para la agencia</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('9',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">TV, DVD Y RACK</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Esta operativo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Esta operativo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Es moderno (pantalla plana)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Es moderno (pantalla plana)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Tamaño mínimo 32''</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Tamaño mínimo 32''</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Proyectan los videos corporativos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Proyectan los videos corporativos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                            <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('10',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">LUCES DE EMERGENCIA</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza y presentación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza y presentación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Señalización apropiada y visible</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Señalización apropiada y visible</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>
                                                              

                                                               <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('11',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">EXTINTORES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Ubicación del equipo es la apropiada / Libre acceso a EL</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Ubicación del equipo es la apropiada / Libre acceso a EL</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza y presentación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza y presentación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Señalización apropiada y visible</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Señalización apropiada y visible</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('12',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PERSIANAS</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Operativas</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Operativas</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza y presentación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza y presentación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cumplen su objetivo / Cubrir el sol</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cumplen su objetivo / Cubrir el sol</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->equipoSelect('13',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">POZO A TIERRA</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>En buen estado de conservación (exterior)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>En buen estado de conservación (exterior)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Señalización apropiada y visible</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Señalización apropiada y visible</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Señalizacion en buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Señalizacion en buen estado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           
                                    ?>   
                                                                
                                                            </tr>

                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza y presentación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza y presentación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
           }
                                    ?>   
                                                                
                                                            </tr>                                            
                                                                                                             
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of accordion -->


                                </div>
                               
                            </div>
                  </div>

          </div>

<?php 
  
  $Totalpro = ($r1 + $r2 + $r3 + $r4 + $r5 + $r6 + $r7 + $r8) / 8 ;
  $ResulAgencia = number_format((float)$Totalpro, 2, '.', '');
  
  if($idzona=="NORTE ORIENTE"){$idzona="1";}else if($idzona=="LIMA"){$idzona="2";}else if($idzona=="CENTRO SUR"){$idzona="3";}
  //echo $ResulAgencia." - ".$idzona ;
  //insertTotales($cod,$idzona,$r1, $r2 ,$r3, $r4, $r5, $r6,$r7,$r8,$ResulAgencia)
  $ser = $sel->insertTotales($cod,$idzona,$r1, $r2 ,$r3, $r4, $r5, $r6,$r7,$r8,$ResulAgencia);

 ?>
        
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
