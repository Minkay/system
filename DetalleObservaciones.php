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
$ronda= $_GET['ronda'];


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
                <h2 style="font-size: 15px;font-weight: bolder;">
                 <?php 
                              $idzona="";
                              $ser = $sel->consultaAgencia($cod); while($mue = $ser->fetch_assoc()){                           
                                  echo "Zona: ".$mue["zona"]." | Agencia: ".$mue["age"]." | Región: ".$mue["re"]." | Fecha Registro: ".$mue["fe"];
                                    $idzona = $mue["zona"] ;
                                }

                ?>
                    <a href="javascript:history.back(1)" class="btn btn-success" style="float: right;"> << Regresar</a>
                    </h2>
               <br>
                  <div class="x_content">

                   

                    <div class="table-responsive">
                      <table class="table jambo_table bulk_action" border="1">
                        <thead>
                          <tr class="headings">
                            
                            
                            <th class="column-title" style="text-align: center;width:10%;">Fotografia </th>
                            <th class="column-title" style="text-align: center;width:30%;">Observaciones </th>
                            <th class="column-title" style="text-align: center;width:14%;">Mejora | Preventivo </th>
                            <th class="column-title" style="text-align: center;width:8%;">Criticidad </th>
                            <th class="column-title" style="text-align: center;width:14%;">Responsable </th>
                            <!--<th class="column-title" style="text-align: center;width:14%;">Actual | Anterior </th>-->
                            <th class="column-title no-link last" style="text-align: center;width:14%;"><span class="nobr">Accion</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                   <?php  
                      $ser = $sel->ObservacionLogistica($cod);
                       while($mue = $ser->fetch_assoc()){ 

                               if($mue["to1"]=='NO' && $mue["observacion"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
    echo " <a href='DetalleLogistica.php?id=".$mue["id_reg"]."&code=".$mue["code"]. "&obs=observacion&im=imagen&me=MejoraPreventivo&cre=Creticidad&res=Responsable&act=ActualAnterior&cn=to1' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_reg"]."&code=".$mue["code"]. "&tipo=logistica&act=to1' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to1"]==''){
                                	
                                }
                                if($mue["to2"]=='NO'  && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
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
                                  //  echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleLogistica.php?id=".$mue["id_reg"]."&code=".$mue["code"]. "&obs=obs2&im=img2&me=me2&cre=cre2&res=re2&act=ac2&cn=to2' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_reg"]."&code=".$mue["code"]. "&tipo=logistica&act=to2' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to2"]==''){
                                	
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleLogistica.php?id=".$mue["id_reg"]."&code=".$mue["code"]. "&obs=obs3&im=img3&me=me3&cre=cre3&res=re3&act=ac3&cn=to3' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_reg"]."&code=".$mue["code"]. "&tipo=logistica&act=to3' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to3"]==''){
                                	
                                }
                                    if($mue["to4"]=='NO'  && $mue["obs4"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleLogistica.php?id=".$mue["id_reg"]."&code=".$mue["code"]. "&obs=obs4&im=img4&me=me4&cre=cre4&res=re4&act=ac4&cn=to4' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_reg"]."&code=".$mue["code"]. "&tipo=logistica&act=to4' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to4"]==''){
                                	
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

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
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
                                  //  echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleServicios.php?id=".$mue["id_ser"]."&code=".$mue["code"]. "&obs=observacion&im=imagen&me=MejoraPreventivo&cre=Creticidad&res=Responsable&act=ActualAnterior&cn=to1' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_ser"]."&code=".$mue["code"]. "&tipo=servicios&act=to1' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleServicios.php?id=".$mue["id_ser"]."&code=".$mue["code"]. "&obs=obs2&im=img2&me=me2&cre=cre2&res=re2&act=ac2&cn=to2' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_ser"]."&code=".$mue["code"]. "&tipo=servicios&act=to2' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to2"]==''){
                                	
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleServicios.php?id=".$mue["id_ser"]."&code=".$mue["code"]. "&obs=obs3&im=img3&me=me3&cre=cre3&res=re3&act=ac3&cn=to3' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_ser"]."&code=".$mue["code"]. "&tipo=servicios&act=to3' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to3"]==''){
                                	
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   

                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleServicios.php?id=".$mue["id_ser"]."&code=".$mue["code"]. "&obs=obs4&im=img4&me=me4&cre=cre4&res=re4&act=ac4&cn=to4' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_ser"]."&code=".$mue["code"]. "&tipo=servicios&act=to4' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to4"]==''){
                                	
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

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
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
                                  //  echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleExterna.php?id=".$mue["id_inext"]."&code=".$mue["code"]. "&obs=observacion&im=imagen&me=MejoraPreventivo&cre=Creticidad&res=Responsable&act=ActualAnterior&cn=to1' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_inext"]."&code=".$mue["code"]. "&tipo=externa&act=to1' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to1"]==''){
                                	
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleExterna.php?id=".$mue["id_inext"]."&code=".$mue["code"]. "&obs=obs2&im=img2&me=me2&cre=cre2&res=re2&act=ac2&cn=to2' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_inext"]."&code=".$mue["code"]. "&tipo=externa&act=to2' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to2"]==''){
                                	
                                }
                                if($mue["to3"]=='NO' && $mue["obs3"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleExterna.php?id=".$mue["id_inext"]."&code=".$mue["code"]. "&obs=obs3&im=img3&me=me3&cre=cre3&res=re3&act=ac3&cn=to3' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_inext"]."&code=".$mue["code"]. "&tipo=externa&act=to3' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to3"]==''){
                                	
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleExterna.php?id=".$mue["id_inext"]."&code=".$mue["code"]. "&obs=obs4&im=img4&me=me4&cre=cre4&res=re4&act=ac4&cn=to4' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_inext"]."&code=".$mue["code"]. "&tipo=externa&act=to4' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to4"]==''){
                                	
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

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleTecho.php?id=".$mue["id_te"]."&code=".$mue["code"]. "&obs=observacion&im=imagen&me=MejoraPreventivo&cre=Creticidad&res=Responsable&act=ActualAnterior&cn=to1' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_te"]."&code=".$mue["code"]. "&tipo=techo&act=to1' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to1"]==''){
                                	
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleTecho.php?id=".$mue["id_te"]."&code=".$mue["code"]. "&obs=obs2&im=img2&me=me2&cre=cre2&res=re2&act=ac2&cn=to2' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_te"]."&code=".$mue["code"]. "&tipo=techo&act=to2' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to2"]==''){
                                	
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleTecho.php?id=".$mue["id_te"]."&code=".$mue["code"]. "&obs=obs3&im=img3&me=me3&cre=cre3&res=re3&act=ac3&cn=to3' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_te"]."&code=".$mue["code"]. "&tipo=techo&act=to3' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to3"]=='' ){
                                	
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleTecho.php?id=".$mue["id_te"]."&code=".$mue["code"]. "&obs=obs4&im=img4&me=me4&cre=cre4&res=re4&act=ac4&cn=to4' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_te"]."&code=".$mue["code"]. "&tipo=techo&act=to4' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to4"]==''){
                                	
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

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleInterna.php?id=".$mue["id_inter"]."&code=".$mue["code"]. "&obs=observacion&im=imagen&me=MejoraPreventivo&cre=Creticidad&res=Responsable&act=ActualAnterior&cn=to1' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_inter"]."&code=".$mue["code"]. "&tipo=interna&act=to1' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to1"]==''){
                                	
                                }
                                if($mue["to2"]=='NO' && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleInterna.php?id=".$mue["id_inter"]."&code=".$mue["code"]. "&obs=obs2&im=img2&me=me2&cre=cre2&res=re2&act=ac2&cn=to2' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_inter"]."&code=".$mue["code"]. "&tipo=interna&act=to2' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to2"]==''){
                                	
                                }
                                if($mue["to3"]=='NO' && $mue["obs3"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleInterna.php?id=".$mue["id_inter"]."&code=".$mue["code"]. "&obs=obs3&im=img3&me=me3&cre=cre3&res=re3&act=ac3&cn=to3' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_inter"]."&code=".$mue["code"]. "&tipo=interna&act=to3' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to3"]==''){
                                	
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
     echo " <a href='DetalleInterna.php?id=".$mue["id_inter"]."&code=".$mue["code"]. "&obs=obs4&im=img4&me=me4&cre=cre4&res=re4&act=ac4&cn=to4' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_inter"]."&code=".$mue["code"]. "&tipo=interna&act=to4' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to4"]==''){
                                	
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

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
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
                                  //  echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleMobiliario.php?id=".$mue["id_mob"]."&code=".$mue["code"]. "&obs=observacion&im=imagen&me=MejoraPreventivo&cre=Creticidad&res=Responsable&act=ActualAnterior&cn=to1' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_mob"]."&code=".$mue["code"]. "&tipo=mobiliario&act=to1' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to1"]==''){
                                	
                                }
                                if($mue["to2"]=='NO'  && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleMobiliario.php?id=".$mue["id_mob"]."&code=".$mue["code"]. "&obs=obs2&im=img2&me=me2&cre=cre2&res=re2&act=ac2&cn=to2' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_mob"]."&code=".$mue["code"]. "&tipo=mobiliario&act=to2' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to2"]==''){
                                	
                                }
                                if($mue["to3"]=='NO'  && $mue["obs3"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleMobiliario.php?id=".$mue["id_mob"]."&code=".$mue["code"]. "&obs=obs3&im=img3&me=me3&cre=cre3&res=re3&act=ac3&cn=to3' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_mob"]."&code=".$mue["code"]. "&tipo=mobiliario&act=to3' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to3"]==''){
                                	
                                }
                                    if($mue["to4"]=='NO'  && $mue["obs4"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
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
                                //    echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
    echo " <a href='DetalleMobiliario.php?id=".$mue["id_mob"]."&code=".$mue["code"]. "&obs=obs4&im=img4&me=me4&cre=cre4&res=re4&act=ac4&cn=to4' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_mob"]."&code=".$mue["code"]. "&tipo=mobiliario&act=to4' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to4"]==''){
                                	
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

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["imagen"]. "'></a>";
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
                                  //  echo "<td class='' style='text-align: center;'>" .$mue["ActualAnterior"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleEquipo.php?id=".$mue["id_eq"]."&code=".$mue["code"]. "&obs=observacion&im=imagen&me=MejoraPreventivo&cre=Creticidad&res=Responsable&act=ActualAnterior&cn=to1' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_eq"]."&code=".$mue["code"]. "&tipo=equipo&act=to1' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to1"]==''){
                                	
                                }
                                if($mue["to2"]=='NO'  && $mue["obs2"]!=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img2"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac2"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
    echo " <a href='DetalleEquipo.php?id=".$mue["id_eq"]."&code=".$mue["code"]. "&obs=obs2&im=img2&me=me2&cre=cre2&res=re2&act=ac2&cn=to2' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_eq"]."&code=".$mue["code"]. "&tipo=equipo&act=to2' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to2"]==''){
                                	
                                }
                                if($mue["to3"]=='NO' && $mue["obs3"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img3"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac3"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
 echo " <a href='DetalleEquipo.php?id=".$mue["id_eq"]."&code=".$mue["code"]. "&obs=obs3&im=img3&me=me3&cre=cre3&res=re3&act=ac3&cn=to3' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
 

                                    echo "<a href='Eliminar.php?id=".$mue["id_eq"]."&code=".$mue["code"]. "&tipo=equipo&act=to3' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to3"]==''){
                                	
                                }
                                    if($mue["to4"]=='NO' && $mue["obs4"] !=""){

                                    echo'<tr class="odd pointer">';                      
                                    echo ' <td class=" " style="width: 100px;text-align: center;">';

                                    echo "<a href='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "' target='_blank' title='Click para Ver foto'><img style='width: 100%;' src='https://minkay.com.pe/system/DATA/" .$mue["img4"]. "'></a>";
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
                                 //   echo "<td class='' style='text-align: center;'>" .$mue["ac4"]."</td>";   



                                    echo'<td class=" last" style="text-align: center;">';
echo " <a href='DetalleEquipo.php?id=".$mue["id_eq"]."&code=".$mue["code"]. "&obs=obs4&im=img4&me=me4&cre=cre4&res=re4&act=ac4&cn=to4' class='btn btn-success btn-xs' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='Eliminar.php?id=".$mue["id_eq"]."&code=".$mue["code"]. "&tipo=equipo&act=to4' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></a>";
                                    echo '</td></tr>';
                                }else if ($mue["to4"]==''){
                                	
                                }


                        }
                                  
                                     ?> 
                        </tbody>





                      </table>
                               
                    </div>

                  </div>
                  
                  <br>
                  <div>
                  <?php 
                            $esco = $sel->EstadoAgen($cod);
                            while($mio = $esco->fetch_assoc()){
                       

                   ?>
                      <strong>ESTADO DE AGENCIA : </strong> <?php echo $mio["estado"]; ?> <a href="DetalleEstado.php?id=<?php echo $cod; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-pencil"> EDITAR</span></a>

                    <?php 
                             }
                     ?>
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
