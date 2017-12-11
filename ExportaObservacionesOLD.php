<?php

error_reporting(0);
session_start();

if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 


require 'Modelo/observaciones.php';

$sel = new Observaciones();
$cod= $_GET['cod'];
$str = strtoupper($cod);


header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header('Content-Disposition: attachment; filename="REGOBS'.$str. '.xls"'); 

/*header("Content-Type: application/pdf");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header('Content-Disposition: attachment; filename="REGOBS'.$str. '.pdf"');*/

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
  </head>

  <body class="nav-md">
    <div class="container body">
     <br>
    <img src="https://minkay.com.pe/img/barra.png" style="width: 100%;" />
   
    <br><br><br><br><br>
    <center>
    
    <h1>OBSERVACIONES DE SUPERVISIÓN MANTENIMIENTO</h1></center>
      <div class="main_container">

       <div class="right_col" role="main" style="padding: 10px 20px 0 !important;margin-left:0px !important;">
       
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
                 
                  <div class="x_content">

                   

                    <div class="table-responsive">
                    
                     <table border="1" style="width: 100%;" >
                       <?php 
                              $ser = $sel->consultaAgencia($cod); while($mue = $ser->fetch_assoc()){                           
                                

                            ?>
			  <tr>
			    <th class="tg-yw4l" style="text-align: left;width: 18%;">AGENCIA:</th>
			    <th class="tg-yw4l" style="width:18%;text-align: left;border-right:0px;"> <?php echo $mue["age"] ?></th>
			    <th class="tg-yw4l" style="width: 7%;text-align: left;border-left:0px;"></th>
			    <th class="tg-yw4l" style="width: 7%;text-align: left;">DIRECCION :</th>
			    <th class="tg-yw4l" style="text-align: left;"> <?php echo $mue["direccion"] ?></th>
			   
			  </tr>
			  <tr>
			    <td class="tg-yw4l" style="font-weight: bolder;">GERENTE DE AGENCIA:</td>
			    <td class="tg-yw4l" style="border-right:0px;"> <?php echo $mue["gerencia"] ?></td>
			    <th class="tg-yw4l" style="width: 7%;text-align: left;border-left:0px;"></th>
			    <td class="tg-yw4l" style="font-weight: bolder;">ZONA:</td>
			    <td class="tg-yw4l"><?php echo $mue["zona"] ?>  </td>
			   
			  </tr>
			  <tr>
			    <td class="tg-yw4l" style="font-weight: bolder;width: 18%;">JEFE DE BANCA DE SERVICIO :</td>
			    <td class="tg-yw4l" style="border-right:0px;"> <?php echo $mue["jefe_banca"] ?></td>
			    <th class="tg-yw4l" style="width: 7%;text-align: left;border-left:0px;"></th>
			    <td class="tg-yw4l" style="font-weight: bolder;">DPTO:</td>
			    <td class="tg-yw4l"> <?php echo $mue["re"] ?></td>
			   
			  </tr>
			  <tr>
			    <td class="tg-yw4l" style="font-weight: bolder;">PERSONAL ACOMPAÑA:</td>
			    <td class="tg-yw4l" style="border-right:0px;" > <?php echo $mue["personal"] ?></td>
			    <th class="tg-yw4l" style="width: 7%;text-align: left;border-left:0px;"></th>
			    <th class="tg-yw4l" style="font-weight: bolder;width: 6%;text-align: left;">FECHA :</th>
			    <th class="tg-yw4l" style="width: 12%;text-align: left;"> <?php echo $mue["fe"] ?></th>
			   
			  </tr>
			    
			    <?php 
                                             }

                            ?>
			</table><br><br>
                    
                      <table border="1" style="width:100%;">
                        <thead>
                          <tr class="headings">
                            
                            
                           <th class="column-title" style="text-align: center;width:10%;background-color: #3f5367;color: white;">Fotografia </th>
                            <th class="column-title" style="text-align: center;width:30%;background-color: #3f5367;color: white;">Observaciones </th>
                            <th class="column-title" style="text-align: center;width:14%;background-color: #3f5367;color: white;">Mejora | Preventivo </th>
                            <th class="column-title" style="text-align: center;width:8%;background-color: #3f5367;color: white;">Criticidad </th>
                            <th class="column-title" style="text-align: center;width:14%;background-color: #3f5367;color: white;">Responsable </th>
                          <!--  <th class="column-title" style="text-align: center;width:14%;background-color: #3f5367;color: white;">Actual | Anterior </th>-->
                            
                           
                          </tr>
                        </thead>

                          <tbody>
                   <?php  
                      $ser = $sel->ObservacionLogistica($cod);
                       while($mue = $ser->fetch_assoc()){ 

                               if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                    echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["imagen"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["observacion"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["MejoraPreventivo"]. "</td>";


                                    if($mue["Creticidad"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;vertical-align: middle;'>Bajo</td>";
                                    }
                                    else if($mue["Creticidad"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;vertical-align: middle;'>Medio</td>";
                                    }
                                    else if($mue["Creticidad"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;vertical-align: middle;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["Responsable"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ActualAnterior"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"] !=""){

                                     echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img2"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs2"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me2"]. "</td>";


                                    if($mue["cre2"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;vertical-align: middle;'>Bajo</td>";
                                    }
                                    else if($mue["cre2"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;vertical-align: middle;'>Medio</td>";
                                    }
                                    else if($mue["cre2"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;vertical-align: middle;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re2"]."</td>";
                                   // echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac2"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                    echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img3"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs3"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me3"]. "</td>";


                                    if($mue["cre3"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;vertical-align: middle;'>Bajo</td>";
                                    }
                                    else if($mue["cre3"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;vertical-align: middle;'>Medio</td>";
                                    }
                                    else if($mue["cre3"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;vertical-align: middle;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re3"]."</td>";
                                  //  echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac3"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img4"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs4"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me4"]. "</td>";


                                    if($mue["cre4"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;vertical-align: middle;'>Bajo</td>";
                                    }
                                    else if($mue["cre4"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;vertical-align: middle;'>Medio</td>";
                                    }
                                    else if($mue["cre4"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;vertical-align: middle;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re4"]."</td>";
                                 //   echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac4"]."</td>";   



                                  
                                    echo '</tr>';
                                }

                           }      
                        ?>
                          
                
                        </tbody>
                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionServicios($cod);
                       while($mue = $ser->fetch_assoc()){ 
                                        
                                    if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                    echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["imagen"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["observacion"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["MejoraPreventivo"]. "</td>";


                                    if($mue["Creticidad"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;vertical-align: middle;'>Bajo</td>";
                                    }
                                    else if($mue["Creticidad"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;vertical-align: middle;'>Medio</td>";
                                    }
                                    else if($mue["Creticidad"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;vertical-align: middle;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["Responsable"]."</td>";
                                  //  echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ActualAnterior"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO'   && $mue["obs2"]!=""){

                                     echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img2"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs2"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me2"]. "</td>";


                                    if($mue["cre2"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;vertical-align: middle;'>Bajo</td>";
                                    }
                                    else if($mue["cre2"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;vertical-align: middle;'>Medio</td>";
                                    }
                                    else if($mue["cre2"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;vertical-align: middle;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re2"]."</td>";
                                  //  echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac2"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                     echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img3"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs3"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me3"]. "</td>";


                                    if($mue["cre3"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;vertical-align: middle;'>Bajo</td>";
                                    }
                                    else if($mue["cre3"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;vertical-align: middle;'>Medio</td>";
                                    }
                                    else if($mue["cre3"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;vertical-align: middle;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re3"]."</td>";
                                  //  echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac3"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                    echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img4"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs4"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me4"]. "</td>";


                                    if($mue["cre4"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;vertical-align: middle;'>Bajo</td>";
                                    }
                                    else if($mue["cre4"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;vertical-align: middle;'>Medio</td>";
                                    }
                                    else if($mue["cre4"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;vertical-align: middle;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re4"]."</td>";
                                  //  echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac4"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                      }
                                  
                                     ?> 
                        </tbody>

                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionExterna($cod);
                       while($mue = $ser->fetch_assoc()){  if($mue["to1"]=='NO' && $mue["observacion"] !=""){
   echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["imagen"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["observacion"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["MejoraPreventivo"]. "</td>";


                                    if($mue["Creticidad"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;vertical-align: middle;'>Bajo</td>";
                                    }
                                    else if($mue["Creticidad"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;vertical-align: middle;'>Medio</td>";
                                    }
                                    else if($mue["Creticidad"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;vertical-align: middle;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["Responsable"]."</td>";
                                 //   echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ActualAnterior"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO'   && $mue["obs2"]!=""){

                                     echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img2"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs2"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me2"]. "</td>";


                                    if($mue["cre2"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre2"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre2"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re2"]."</td>";
                                  //  echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac2"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                    echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img3"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs3"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me3"]. "</td>";


                                    if($mue["cre3"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre3"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre3"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re3"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac3"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                    echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img4"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs4"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me4"]. "</td>";


                                    if($mue["cre4"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre4"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre4"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re4"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac4"]."</td>";   



                                  
                                    echo '</tr>';
                                }

                              }
                                  
                                     ?> 
                        </tbody>
                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionTecho($cod);
                       while($mue = $ser->fetch_assoc()){  if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["imagen"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["observacion"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["MejoraPreventivo"]. "</td>";


                                    if($mue["Creticidad"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["Creticidad"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["Creticidad"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["Responsable"]."</td>";
                                 //   echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ActualAnterior"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO'   && $mue["obs2"]!=""){

                                   echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img2"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs2"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me2"]. "</td>";


                                    if($mue["cre2"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre2"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre2"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re2"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac2"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                    echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img3"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs3"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me3"]. "</td>";


                                    if($mue["cre3"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre3"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre3"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re3"]."</td>";
                                  //  echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac3"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img4"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs4"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me4"]. "</td>";


                                    if($mue["cre4"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre4"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre4"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re4"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac4"]."</td>";   



                                  
                                    echo '</tr>';
                                }

                              }
                                  
                                     ?> 
                        </tbody>
                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionInterna($cod);
                       while($mue = $ser->fetch_assoc()){  if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["imagen"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["observacion"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["MejoraPreventivo"]. "</td>";


                                    if($mue["Creticidad"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["Creticidad"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["Creticidad"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["Responsable"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ActualAnterior"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO'   && $mue["obs2"]!=""){

                                    echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img2"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs2"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me2"]. "</td>";


                                    if($mue["cre2"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre2"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre2"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re2"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac2"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img3"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs3"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me3"]. "</td>";


                                    if($mue["cre3"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre3"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre3"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re3"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac3"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img4"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs4"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me4"]. "</td>";


                                    if($mue["cre4"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre4"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre4"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re4"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac4"]."</td>";   



                                  
                                    echo '</tr>';
                                }

                          }
                                  
                                     ?> 
                        </tbody>
                          <tbody>
                   <?php  
                      $ser = $sel->ObservacionMobiliario($cod);
                       while($mue = $ser->fetch_assoc()){ 

                               if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                   echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["imagen"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["observacion"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["MejoraPreventivo"]. "</td>";


                                    if($mue["Creticidad"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["Creticidad"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["Creticidad"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["Responsable"]."</td>";
                                  //  echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ActualAnterior"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO'   && $mue["obs2"]!=""){

                                     echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img2"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs2"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me2"]. "</td>";


                                    if($mue["cre2"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre2"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre2"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re2"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac2"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img3"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs3"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me3"]. "</td>";


                                    if($mue["cre3"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre3"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre3"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re3"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac3"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img4"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs4"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me4"]. "</td>";


                                    if($mue["cre4"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre4"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre4"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re4"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac4"]."</td>";   



                                  
                                    echo '</tr>';
                                }



                        }
                                  
                                     ?> 
                        </tbody>

                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionEquipo($cod);
                       while($mue = $ser->fetch_assoc()){ 

                         if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["imagen"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["observacion"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["MejoraPreventivo"]. "</td>";


                                    if($mue["Creticidad"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["Creticidad"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["Creticidad"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["Responsable"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ActualAnterior"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO'   && $mue["obs2"]!=""){

                                     echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img2"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs2"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me2"]. "</td>";


                                    if($mue["cre2"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre2"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre2"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re2"]."</td>";
                                //    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac2"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                     echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img3"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs3"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me3"]. "</td>";


                                    if($mue["cre3"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre3"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre3"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re3"]."</td>";
                                  //  echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac3"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                      echo'<tr class="" style="height: 140px;">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;padding:10px;">';

                                    echo "<img width='150' height='90' src='https://minkay.com.pe/sistema/DATA/" .$mue["img4"]. "'>";
                                    echo"</td><td class='' style='text-align: center;vertical-align: middle;'>".$mue["obs4"]. "</td>";
                                    echo"<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["me4"]. "</td>";


                                    if($mue["cre4"]=="Bajo"){
                                    echo" <td style='text-align: center;background-color: #26b99a;color: white;font-weight: bolder;'>Bajo</td>";
                                    }
                                    else if($mue["cre4"]=="Medio"){
                                    echo" <td style='text-align: center;background-color: #f0ad4e;color: white;font-weight: bolder;'>Medio</td>";
                                    }
                                    else if($mue["cre4"]=="Alto"){
                                    echo" <td style='text-align: center;background-color: red;color: white;font-weight: bolder;'>Alto</td>";
                                    }
                                    else {
                                    echo" <td></td>";
                                    }
                                    echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["re4"]."</td>";
                                 //   echo "<td class='' style='text-align: center;vertical-align: middle;'>" .$mue["ac4"]."</td>";   



                                  
                                    echo '</tr>';
                                }


                        }
                                  
                                     ?> 
                        </tbody>




                      </table>
                               
                    </div>

                  </div>
                </div>
              </div>

          </div>

        </div>
        <!-- /page content -->

        <!-- footer content -->
       <!-- <footer>
         <?php include 'Vistas/footer.php'; ?>
        </footer> -->
        <!-- /footer content -->
      </div>
    </div>

   
    <!-- /gauge.js -->
  </body>
</html>
