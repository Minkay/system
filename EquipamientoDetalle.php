<?php

error_reporting(0);
session_start();

if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Es necesario que inicies sesión'); window.location='index.php';</script>";  
	exit;
} 


require 'Modelo/funciones.php';
$sel =new Model();
$usuario = $_GET["usuario"];
$buscar = $_GET["buscar"];
$buscarzona = $_GET["buscarzona"];
$buscaregion = $_GET["buscaregion"];
$rondax = $_GET["rondax"];


    
     /* $registros = 1000;
      $contador = 1;
      $pagina = $_GET["pagina"];

      if (!$pagina) { 
      $inicio = 0; 
      $pagina = 1; 
      } else { 
      $inicio = ($pagina - 1) * $registros; 
      } 

      $resultados = $sel->paginadorExport($inicio,$registros,$rondax);  
      $total_registros = mysqli_num_rows($ni); 
      $total_paginas = ceil($total_registros / $registros);}*/


header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header('Content-Disposition: attachment; filename="EquipamientoDetalleGeneral.xls"'); 



?>

<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
   



    <style>
      body { margin-bottom: 144px; }
      header { margin: 72px 0 36px; }
      header h1 { font-size: 54px; }
    </style>

  

  </head>

  <body class="nav-md" style="margin-bottom: 0px;">
     <div class="container body">
     <br>
    <img src="https://minkay.com.pe/img/barra.png" style="width:100%;" />
   
    <br><br><br><br><br>
    <center>
    
            <h1>REPORTE GENERAL DE EQUIPAMIENTO</h1></center>
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

                   

                    <div class="">

                      
                     <!--  <table style="width: 100%;background-color: white;margin-bottom: 25px;" border="1"> 
                          <tr>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">NORTE ORIENTE</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">LIMA</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">CENTRO SUR</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">TOTAL AGENCIAS</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">JOSE</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">STEPHAN</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">FERNANDO</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">MIGUEL</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">FLAVIO</th>
                          </tr>
                          <tr>
                            <td style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountAgencias("1");
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountAgencias("2");
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountAgencias("3");
                                        $fi = mysqli_num_rows($niu); echo $fi ?></td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountAgenciaTotal();
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountUsu("35");
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountUsu("36");
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountUsu("37");
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountUsu("39");
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountUsu("38");
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                          </tr>
                        </table>-->
                        
                         <table class="tg">
                      
                          <tr>
                            <td class="tg-yw4l">
                                 <table id="example" style="width: 100%;" border="1" >
                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                          <tr class="headings">
                             
                           <!-- <th class="column-title">Id </th> -->
                           <th style="background-color: #2a3f54;color: white;font-weight: bolder;">FILA</th>
                           <!-- <th style="background-color: #2a3f54;color: white;font-weight: bolder;">USUARIO </th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;" style="text-align: center;">CODIGO </th>    -->                   
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >ZONA</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >REGION </th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >AGENCIA </th>
                           <!-- <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >RONDA</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >PROMEDIO EQUIPAMIENTO</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >ESTADO</th>-->
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;"  >DISPENSADOR DE AGUA (DIRECTO / RED)</th>
                          </tr>
                        </thead>

                        <tbody>
                   <?php  
                        $ni = $sel->EquipamientoDetGeneral("6",$rondax); 
                        $ct = 1;
                       while($mue = $ni->fetch_assoc()){ ?>
                          <tr class="">
                            
                           <!--  <td class=" "><?php echo $mue["id_inicio"]; ?></td> -->
                           <td class=" "><?php echo $ct ++; ?></td>
                          <!-- <td class=" "><?php echo $mue["user"]; ?></td>
                           <td class=" "><?php echo $mue["id_cod"]; ?></td>   -->                        
                            <td class=" "><?php echo $mue["zona"]; ?></td>
                            <td class=" "><?php echo $mue["region"]; ?></td>
                            <td class=" "><?php echo $mue["agencia"]; ?></td>
                           <!-- <td class=" " style="text-align: center;"><?php echo $mue["ronda"]; ?></td>                          
                            <td class=" " style="text-align: center;"><?php echo $mue["equipo"]; ?></td>                           
                            <td style="text-align: center;"><?php echo $mue["estado"]; ?></td> 
                            <td style="text-align: center;"><?php echo $mue["to1"]; ?></td>
                            <td style="text-align: center;"><?php echo $mue["to2"]; ?></td>
                            <td style="text-align: center;"><?php echo $mue["to3"]; ?></td>
                            <td style="text-align: center;"><?php echo $mue["to4"]; ?></td>-->
                            <td style="text-align: center;"><?php echo $mue["declara"]; ?></td>
                            

                          </tr>
                          <?php }
                                  
                                  mysqli_free_result($ni);  
                                     ?>
                                     
                        </tbody>
                      </table>
                            </td>
                            <td class="tg-yw4l">
                              <table id="example" style="width: 100%;" border="1" >
                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                          <tr class="headings">                            
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" colspan="2" >PROYECTOR MULTIMEDIA</th>
                          </tr>
                        </thead>

                        <tbody>
                   <?php  
                        $ni = $sel->EquipamientoDetGeneral("7",$rondax); 
                        $ct = 1;
                       while($mue = $ni->fetch_assoc()){ ?>
                          <tr class="">
                            <td class=" "><?php echo $mue["agencia"]; ?></td>
                            <td style="text-align: center;"><?php echo $mue["declara"]; ?></td>
                            

                          </tr>
                          <?php }
                                  
                                  mysqli_free_result($ni);  
                                     ?>
                                     
                        </tbody>
                      </table>
                            </td>
                            <td class="tg-yw4l">
                                  <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" colspan="2">LACTARIO</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetGeneral("8",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;"><?php echo $mue["declara"]; ?></td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            <td class="tg-yw4l">
                               <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" colspan="2" >FRIO BAR - LACTARIO</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                           $ni = $sel->EquipamientoDetGeneral("9",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                         <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;"><?php echo $mue["declara"]; ?></td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            <td class="tg-yw4l">
                                       <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" colspan="2"> KITCHENET</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                         $ni = $sel->EquipamientoDetGeneral("10",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                         <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;"><?php echo $mue["declara"]; ?></td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            <td class="tg-yw4l">
                                  <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" colspan="2" >FRIO BAR</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                          $ni = $sel->EquipamientoDetGeneral("11",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;"><?php echo $mue["declara"]; ?></td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" colspan="2">HORNO MICROONDAS</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetGeneral("12",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                        <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;"><?php echo $mue["declara"]; ?></td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" colspan="2">REPOSTERO / ALACENA</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetGeneral("14",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                        <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;"><?php echo $mue["declara"]; ?></td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" colspan="2">MESA / COMEDOR</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetGeneral("15",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;"><?php echo $mue["declara"]; ?></td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            
                            
                            <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        


                                        </tr>
                                        </thead>

                                     
                                  </table>
                            </td>
                            
                            <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">SSHH VARONES</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("1",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color:#26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">SSHH MUJERES</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("2",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                           
                            <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">SSHH DISCAPACITADOS</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("3",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            
                             <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">SSHH MIXTO</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("4",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                             <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">SUMIDEROS SSHH VARONES</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("5",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                               <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color:#26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">SUMIDERO SSHH MUJERES</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("6",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            
                             <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">SUMIDERO SSHH DISCAPACITADOS</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("7",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            
                             <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">SUMIDERO SSHH MIXTO</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("8",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                           <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color:#26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">SUMIDERO RACK</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("9",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                            
                            <td class="tg-yw4l">
                                <table id="example" style="width: 100%;" border="1" >
                                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                                        <tr class="headings">
                                        
                                        <th style="background-color: #26b99a;color: white;font-weight: bolder;text-align: center;" colspan="2">CUENTA SOLO CON SSHH MIXTO</th>



                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php  
                                        $ni = $sel->EquipamientoDetEx("10",$rondax); 
                                        $ct = 1;
                                        while($mue = $ni->fetch_assoc()){ ?>
                                        <tr class="">
                                       <td class=" "><?php echo $mue["agencia"]; ?></td>
                                        <td style="text-align: center;">SI</td>


                                        </tr>
                                        <?php }

                                        mysqli_free_result($ni);  
                                        ?>

                                        </tbody>
                                  </table>
                            </td>
                          </tr>
                        </table>

                   
                    
                            
                    </div>

                    <div>
                         
                    </div>
                  </div>
                </div>
              </div>

          </div>

        </div>
        <!-- /page content -->

        <!-- footer content -->
       
      </div>
    </div>

    
  </body>
</html>
