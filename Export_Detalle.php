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
$str = strtoupper($cod);

header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header('Content-Disposition: attachment; filename="RDETCOD'.$str. '.xls"'); 

?>



<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="UTF-8">    
  </head>

  <body class="nav-md">
    <div class="container body">
    <br>
    <br>
    <img src="http://minkay.com.pe/img/barra.png" style="width: 100%;" />
   
    <br><br><br><br><br>
    <center>
    
    <h1>INFORME DE SUPERVISION MANTENIMIENTO</h1></center>
    
      <div class="main_container">
      
        <div class="right_col" role="main" style="padding: 10px 20px 0 !important;margin-left:0px !important;">
          <!-- top tiles -->
        
          <!-- /top tiles -->

        
            <div class="row x_title" style="    background-color: white;">
                  <div class="col-md-13">
                    <h3><small style="font-weight: 700;font-size:13px;">
                     
                    </small>
  
                    </h3>
                  </div>
                </div>

          <div class="row">
    		          <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                                
                                <div >

                                    <!-- start accordion -->
                                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="">
                                            
                                            <div >
                                                <div class="">
                                                <table border="1" style="width: 100%;" >
                       <?php 
                              $ser = $sel->consultaAgencia($cod); while($mue = $ser->fetch_assoc()){                           
                                

                            ?>
			  <tr>
			    <th class="tg-yw4l" style="text-align: left;">AGENCIA:</th>
			    <th class="tg-yw4l" style="width:18%;text-align: left;"> <?php echo $mue["age"] ?></th>
			    <th class="tg-yw4l" style="width: 7%;text-align: left;">DIRECCION :</th>
			    <th class="tg-yw4l" style="text-align: left;"> <?php echo $mue["direccion"] ?></th>
			 
			  </tr>
			  <tr>
			    <td class="tg-yw4l" style="font-weight: bolder;">GERENTE DE AGENCIA:</td>
			    <td class="tg-yw4l"> <?php echo $mue["gerencia"] ?></td>
			    <td class="tg-yw4l" style="font-weight: bolder;background-color: #dad7d7;font-size: 15px;">PROMEDIO GRAL:</td>
			    <td class="tg-yw4l" style="font-weight: bolder;background-color: #dad7d7;font-size: 15px;text-align: center;"> <?php echo $mue["totales"] ?></td>
			    
			  </tr>
			  <tr>
			    <td class="tg-yw4l" style="font-weight: bolder;width: 18%;">JEFE DE BANCA DE SERVICIO :</td>
			    <td class="tg-yw4l"> <?php echo $mue["jefe_banca"] ?></td>
			    <td class="tg-yw4l" style="font-weight: bolder;">PROVINCIA :</td>
			    <td class="tg-yw4l"> <?php echo $mue["provincia"] ?></td>
			   
			  </tr>
			  <tr>
			    <td class="tg-yw4l" style="font-weight: bolder;">PERSONAL ACOMPAÑA:</td>
			    <td class="tg-yw4l"> <?php echo $mue["personal"] ?></td>
			    <td class="tg-yw4l" style="font-weight: bolder;">DPTO.:</td>
			    <td class="tg-yw4l"> <?php echo $mue["re"] ?></td>
			   
			  </tr>
			   <tr>
			    <td class="tg-yw4l" style="font-weight: bolder;">FECHA:</td>
			    <td class="tg-yw4l"  style="text-align: left;"> <?php echo $mue["fe"] ?></td>
			    <td class="tg-yw4l" style="font-weight: bolder;">ZONA:</td>
			    <td class="tg-yw4l"><?php echo $mue["zona"] ?> </td>
			   
			  </tr>
			    <?php 
                                             }

                            ?>
			</table><br><br>
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <td style="color: white;background-color: #2a3f54;" colspan="3"><h4> > DOC. MANTENIMIENTO PERIODICO  </h4></td> 
                                                                <td style="color: white;background-color: #2a3f54;font-weight:bolder;font-size:18px;">
                                                                <?php 
                                                                        $se2 = $sel->VerPuntaje($cod); 
                                                                        while($mue = $se2->fetch_assoc()){ 
                                                                            echo "PROMEDIO:  " .$mue["mant"];
                                                                        }
                                                                 ?>
                                                                </td>                                                           
                                                            </tr>
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
                                      <div class="">
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <td style="color: white;background-color: #2a3f54;" colspan="3"><h4> > LOGISTICA (economato, formatearía, Courier, bienes)  </h4></td> 
                                                                 <td style="color: white;background-color: #2a3f54;font-weight:bolder;font-size:18px;">
                                                                <?php 
                                                                        $se2 = $sel->VerPuntaje($cod); 
                                                                        while($mue = $se2->fetch_assoc()){ 
                                                                            echo "PROMEDIO:  " .$mue["log"];
                                                                        }
                                                                 ?>
                                                                </td>                                                          
                                                            </tr>
                                                            <tr>
                                                                
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                             <tr>
                                                              <?php 
					                              $ser = $sel->logisticaSelect('1',$cod); while($mue = $ser->fetch_assoc()){                           
					                                 
					                            ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">AB. ECONOMATO</th>
                                                           <?php  
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>A tiempo</td>";
                                        		      echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>A tiempo</td>";
                                        		      echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
				                            ?>                                                              
                      <!--    PUNTAJE   <td rowspan="4" style="font-weight: bolder;font-size: 18px;text-align: center;"><?php echo $mue["puntaje"] ?></td>-->
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <td style="color: white;background-color: #2a3f54;" colspan="3"><h4> > SERVICIOS BASICOS Y ELECTRODOMESTICOS
</h4></td>      
                                                             <td style="color: white;background-color: #2a3f54;font-weight:bolder;font-size:18px;">
                                                                <?php 
                                                                        $se2 = $sel->VerPuntaje($cod); 
                                                                        while($mue = $se2->fetch_assoc()){ 
                                                                            echo "PROMEDIO:  " . $mue["serv"];
                                                                        }
                                                                 ?>
                                                                </td>                                                        
                                                            </tr>
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
                                        $ser = $sel->serviciosSelect('18',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SUMIDERO DE SSHH DISCAPACITADOS</th>
                                                           <?php  
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
                                        $ser = $sel->serviciosSelect('19',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SSHH MIXTO</th>
                                                           <?php  
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
                                        $ser = $sel->serviciosSelect('20',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">SUMIDERO DE SSHH MIXTO</th>
                                                           <?php  
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
                                        $ser = $sel->serviciosSelect('21',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">ACTIVOS EN DESUSO Y OBSOLETOS</th>
                                                           <?php  
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
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->serviciosSelect('22',$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">E.A.A. INSTALADOS QUE NO SON REQUERIDOS</th>
                                                           <?php  
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
                                                        </tbody>
                                                    </table>
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <td style="color: white;background-color: #2a3f54;" colspan="3"><h4> > INFRAESTRUCTURA EXTERNA

</h4></td>                                     
                                                             <td style="color: white;background-color: #2a3f54;font-weight:bolder;font-size:18px;">
                                                                <?php 
                                                                        $se2 = $sel->VerPuntaje($cod); 
                                                                        while($mue = $se2->fetch_assoc()){ 
                                                                            echo "PROMEDIO:  " .$mue["ext"];
                                                                        }
                                                                 ?>
                                                                </td>                         
                                                            </tr>
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
                                                     <table border="1" style="width:100%;">
                                                        <thead>
                                                        <tr>
                                                                <td style="color: white;background-color: #2a3f54;" colspan="3"><h4> > ESTADO DE TECHO</h4></td>
                                                                 <td style="color: white;background-color: #2a3f54;font-weight:bolder;font-size:18px;">
                                                                <?php 
                                                                        $se2 = $sel->VerPuntaje($cod); 
                                                                        while($mue = $se2->fetch_assoc()){ 
                                                                            echo "PROMEDIO:  " .$mue["techo"];
                                                                        }
                                                                 ?>
                                                                </td>                                                              
                                                            </tr>
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                        <tr>
                              <td style="color: white;background-color: #2a3f54;" colspan="3"><h4> > INFRAESTRUCTURA INTERNA</h4></td>                                <td style="color: white;background-color: #2a3f54;font-weight:bolder;font-size:18px;">
                                                                <?php 
                                                                        $se2 = $sel->VerPuntaje($cod); 
                                                                        while($mue = $se2->fetch_assoc()){ 
                                                                            echo  "PROMEDIO:  " .$mue["interna"];
                                                                        }
                                                                 ?>
                                                                </td>  
                                                            </tr>
                                                           
                                                        </thead>
                                                         <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                            <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">AREA DE CAJA VENTANILLAS</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('1',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales     </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales     </td>";
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">AREA DE ESPERA</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('2',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                                 <div class="panel-body">
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">AREA DE PLATAFORMA/OPERACIONES</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('3',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                        $ser = $sel->internaSelect('3',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                        $ser = $sel->internaSelect('3',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">AREA DE ASESORES DE NEGOCIOS</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('4',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                        $ser = $sel->internaSelect('4',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                        $ser = $sel->internaSelect('4',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">SALA DE REUNIONES</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('5',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                        $ser = $sel->internaSelect('5',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                        $ser = $sel->internaSelect('5',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">AREA DE RACK</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('6',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                        $ser = $sel->internaSelect('6',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                        $ser = $sel->internaSelect('6',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">ARCHIVO</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('7',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales</td>";
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
                                        $ser = $sel->internaSelect('7',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                        $ser = $sel->internaSelect('7',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">ECONOMATO</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('8',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                        $ser = $sel->internaSelect('8',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                        $ser = $sel->internaSelect('8',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">KITCHEN</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('9',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                        $ser = $sel->internaSelect('9',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                        $ser = $sel->internaSelect('9',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">LACTARIO</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('10',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                        $ser = $sel->internaSelect('10',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                        $ser = $sel->internaSelect('10',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">ESCALERAS / PASADIZOS</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('11',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                        $ser = $sel->internaSelect('11',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                        $ser = $sel->internaSelect('11',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;background-color: #d6cab5;padding: 7px;">SERVICIOS HIGIÉNICOS</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('12',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
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
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación del material: drywall / baldosas / tarrajeo  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales </td>";
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
                                        $ser = $sel->internaSelect('13',"Aparatos sanitarios",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Aparatos sanitarios</th>
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
                                        $ser = $sel->internaSelect('12',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
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

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('12',"Aparatos sanitariosdsssss",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">APARATOS SANITARIOS</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Aparatos sanitarios completos: tiene todos sus accesorios</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Aparatos sanitarios completos: tiene todos sus accesorios</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
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
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Dimensionamiento y Uso es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Dimensionamiento y Uso es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con disp ahorradores instalados: caños agua, urinarios</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con disp ahorradores instalados: caños agua, urinarios</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                  $ser = $sel->internaSelect('14',"Equipamiento/Accesoerios de baño",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">EQUIPAMIENTO/ ACCESORIOS DE BAÑO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con equipam min: espejo / basureros </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con equipam min: espejo / basureros </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con disp. Jabón / disp. Papel / papel toalla</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con disp. Jabón / disp. Papel / papel toalla</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
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
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Instalados adecuadamente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Instalados adecuadamente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                       
                                                    </table>
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                        <tr>
                                                                <td style="color: white;background-color: #2a3f54;" colspan="3"><h4> > MOBILIARIO / SILLONERIA

</h4></td>                                                            
                                                              <td style="color: white;background-color: #2a3f54;font-weight:bolder;font-size:18px;">
                                                                <?php 
                                                                        $se2 = $sel->VerPuntaje($cod); 
                                                                        while($mue = $se2->fetch_assoc()){ 
                                                                            echo "PROMEDIO:  " .$mue["mob"];
                                                                        }
                                                                 ?>
                                                                </td>  
                                                            </tr>
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
                                                    <table border="1" style="width:100%;">
                                                        <thead>
                                                        <tr>
                                                                <td style="color: white;background-color: #2a3f54;" colspan="3"><h4> > EQUIPAMIENTO (AA, GE, EXT, LE, UPS, PAT, Bombas)
</h4></td>                         
 <td style="color: white;background-color: #2a3f54;font-weight:bolder;font-size:18px;">
                                                                <?php 
                                                                        $se2 = $sel->VerPuntaje($cod); 
                                                                        while($mue = $se2->fetch_assoc()){ 
                                                                            echo "PROMEDIO:  " .$mue["equipo"];
                                                                        }
                                                                 ?>
                                                                </td>                                     
                                                            </tr>
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


        
        </div>
        <!-- /page content -->

        <!-- footer content -->
       <!-- <footer>
         <?php include 'Vistas/footer.php'; ?>
        </footer>-->
        <!-- /footer content -->
      </div>
    </div>

    
    <!-- /gauge.js -->
  </body>
</html>
