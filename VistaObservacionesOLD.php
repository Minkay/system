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



?>

<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <?php include 'Vistas/head.php';  ?>
    
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
                  <a href="puntajes.php" class="btn btn-success btn-xs" style="float: left;"> << Regresar</a>
    <a href="ExportaObservaciones.php?cod=<?php echo $cod ?>" class="btn btn-danger btn-xs" style="float: left;"> 
   <i class="fa fa-file-excel-o" aria-hidden="true"></i> Exportar</a>
                               <h2 style="font-size: 15px;font-weight: bolder;text-align: right;">
                 <?php 
                              $idzona="";
                              $ser = $sel->consultaAgencia($cod); while($mue = $ser->fetch_assoc()){                           
                                  echo "Zona: ".$mue["zona"]." | Agencia: ".$mue["age"]." | Región: ".$mue["re"]." | Fecha Registro: ".$mue["fe"];
                                    $idzona = $mue["zona"] ;
                                }

                ?>
                   
                    </h2>
            
                  <div class="x_content">

                   

                    <div class="table-responsive">
                      <table class="table jambo_table bulk_action" border="1">
                        <thead>
                          <tr class="headings">
                            
                            
                            <th class="column-title" style="text-align: center;width:10%;">Fotografía </th>
                            <th class="column-title" style="text-align: center;width:30%;">Observaciones </th>
                            <th class="column-title" style="text-align: center;width:14%;">Mejora | Preventivo </th>
                            <th class="column-title" style="text-align: center;width:8%;">Criticidad </th>
                            <th class="column-title" style="text-align: center;width:14%;">Responsable </th>
                            <th class="column-title" style="text-align: center;width:14%;">Actual | Anterior </th>
                          </tr>
                        </thead>

                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionLogistica($cod);
                       while($mue = $ser->fetch_assoc()){ 

                               if($mue["to1"]=='NO' && $mue["observacion"] !="" ){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["observacion"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["MejoraPreventivo"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["Responsable"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                  
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs2"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me2"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re2"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                   
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO' && $mue["obs3"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs3"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me3"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re3"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs4"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me4"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re4"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                
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

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["observacion"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["MejoraPreventivo"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["Responsable"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                   
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs2"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me2"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re2"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                 
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO' && $mue["obs3"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs3"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me3"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re3"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   

                                
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO'  && $mue["obs4"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs4"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me4"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re4"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   

                                  
                                    echo '</tr>';
                                }
                      }
                                  
                                     ?> 
                        </tbody>

                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionExterna($cod);
                       while($mue = $ser->fetch_assoc()){  if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["observacion"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["MejoraPreventivo"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["Responsable"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs2"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me2"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re2"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                               
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO' && $mue["obs3"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs3"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me3"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re3"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO'  && $mue["obs4"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs4"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me4"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re4"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                  
                                    echo '</tr>';
                                }

                              }
                                  
                                     ?> 
                        </tbody>
                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionTecho($cod);
                       while($mue = $ser->fetch_assoc()){  if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["observacion"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["MejoraPreventivo"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["Responsable"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                   
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs2"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me2"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re2"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                             
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO' && $mue["obs3"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs3"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me3"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re3"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                 
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO'  && $mue["obs4"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs4"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me4"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re4"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                
                                    echo '</tr>';
                                }

                              }
                                  
                                     ?> 
                        </tbody>
                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionInterna($cod);
                       while($mue = $ser->fetch_assoc()){  if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["observacion"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["MejoraPreventivo"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["Responsable"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs2"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me2"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re2"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs3"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me3"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re3"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   

                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs4"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me4"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re4"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                  
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

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["observacion"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["MejoraPreventivo"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["Responsable"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                          
                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs2"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me2"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re2"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs3"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me3"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re3"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   


                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO'  && $mue["obs4"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs4"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me4"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re4"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



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

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["observacion"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["MejoraPreventivo"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["Responsable"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                    echo '</tr>';
                                }
                                if($mue["to2"]=='NO'  && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs2"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me2"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re2"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                          
                                    echo '</tr>';
                                }
                                if($mue["to3"]=='NO' && $mue["obs3"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs3"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me3"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re3"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                        
                                    echo '</tr>';
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='http://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
                                    echo"</td><td class='' style='text-align: center;'>".$mue["obs4"]. "</td>";

                                    echo"<td class='' style='text-align: center;'>" .$mue["me4"]. "</td>";


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
                                    echo "<td class='' style='text-align: center;'>" .$mue["re4"]."</td>";
                                    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   


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
