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
header('Content-Disposition: attachment; filename="ReporteAgenciasGeneral.xls"'); 



?>

<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <?php include 'Vistas/head.php';  ?>



    <style>
      body { margin-bottom: 144px; }
      header { margin: 72px 0 36px; }
      header h1 { font-size: 54px; }
    </style>

    <!-- <script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>-->
  
  
    
    <link rel="stylesheet" href="css/chosen.css">
    <script>
      $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
    	  
	});
    </script>
    <style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
  </style>
  </head>

  <body class="nav-md" style="margin-bottom: 0px;">
     <div class="container body">
     <br>
    <img src="https://minkay.com.pe/img/barra.png" />
   
    <br><br><br><br><br>
    <center>
    
            <h1>REPORTE GENERAL DE AGENCIAS</h1></center>
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

                       


                        <table style="width: 100%;background-color: white;margin-bottom: 25px;" border="1"> 
                          <tr>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">NORTE ORIENTE</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">LIMA</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">CENTRO SUR</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">TOTAL AGENCIAS</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">ANTHONY</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">ADMIN</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">FERNANDO</th>
                            <th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bolder;">MIGUEL</th>
                            
                          </tr>
                          <tr>
                            <td style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountAgencias("1",$rondax);
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountAgencias("2",$rondax);
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountAgencias("3",$rondax);
                                        $fi = mysqli_num_rows($niu); echo $fi ?></td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountAgenciaTotal($rondax);
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountUsu("41",$rondax);
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountUsu("22",$rondax);
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountUsu("37",$rondax);
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            <td  style="text-align: center;font-weight: bolder ;font-size: 16px;"><?php  $niu = $sel->CountUsu("39",$rondax);
                                        $fi = mysqli_num_rows($niu); echo $fi ?> </td>
                            
                          </tr>
                        </table>
                        
                         <table class="tg">
                      
                          <tr>
                            <td class="tg-yw4l">
                                 <table id="example" style="width: 100%;" border="1" >
                        <thead style="background-color: #2a3f54;color: white;font-weight: bolder;"> 
                          <tr class="headings">
                             
                           <!-- <th class="column-title">Id </th> -->
                           <th style="background-color: #2a3f54;color: white;font-weight: bolder;">FILA</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;">USUARIO </th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;" style="text-align: center;">CODIGO </th>                       
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >ZONA</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >REGION </th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >AGENCIA </th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >DIRECCION </th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >GERENTE </th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >JEFE BANCA</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >PERSONAL</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >RONDA</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >MANT.</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >LOGISTICA</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >SERVICIOS</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >INF. EXTERNA</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >TECHO</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >INF. INTERNA</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >MOBILIARIO</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >EQUIPAMIENTO</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >PROMEDIO</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >ESTADO</th>
                            <th style="background-color: #2a3f54;color: white;font-weight: bolder;text-align: center;" >FECHA</th>

                          
                          </tr>
                        </thead>

                        <tbody>
                   <?php  
                        $ni = $sel->consultaExrt($rondax); 
                        $ct = 1;
                       while($mue = $ni->fetch_assoc()){ ?>
                          <tr class="">
                            
                           <!--  <td class=" "><?php echo $mue["id_inicio"]; ?></td> -->
                           <td class=" "><?php echo $ct ++; ?></td>
                           <td class=" "><?php echo $mue["user"]; ?></td>
                           <td class=" "><?php echo $mue["id_cod"]; ?></td>
                           
                            <td class=" "><?php echo $mue["zona"]; ?></td>
                            <td class=" "><?php echo $mue["region"]; ?></td>
                            <td class=" "><?php echo $mue["agencia"]; ?></td>
                            <td class=" "><?php echo $mue["direccion"]; ?></td>
                            <td class=" "><?php echo $mue["gerencia"]; ?></td>
                            <td class=" "><?php echo $mue["jefe_banca"]; ?></td>
                            <td class=" "><?php echo $mue["personal"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["ronda"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["mant"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["log"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["serv"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["ext"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["techo"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["interna"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["mob"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["equipo"]; ?></td>
                            <td style="text-align: center;"><?php echo $mue["totales"]; ?></td>
                            <td style="text-align: center;"><?php echo $mue["estado"]; ?></td>
                            <td style="text-align: center;"><?php echo $mue["fecha"]; ?></td>

                          </tr>
                          <?php }
                                  
                                  mysqli_free_result($ni);  
                                     ?>
                                     
                        </tbody>
                      </table>
                            </td>
                            <td class="tg-yw4l">
                            
                            </td>
                            <td class="tg-yw4l">
                             
                            </td>
                            <td class="tg-yw4l"></td>
                            <td class="tg-yw4l"></td>
                            <td class="tg-yw4l"></td>
                            <td class="tg-yw4l"></td>
                            <td class="tg-yw4l"></td>
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

    <?php include 'Vistas/footerlib.php'; ?>
    <script src="js/chosen.jquery.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.tableTools.js"></script>
    <!-- /gauge.js -->
    <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'oops, no hay resultados!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
    
  
    $(document).ready(function () {
                var oTable = $('#example').dataTable({                    
                    
                   // 'iDisplayLength': 12,
                    //"sPaginationType": "full_numbers",
                    //"dom": 'T<"clear">lfrtip',
                    
                });
        
            });
  </script>
  </body>
</html>
