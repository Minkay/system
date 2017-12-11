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
$us = $_GET["us"];


if($usuario){
      $ni = $sel->consultaBuscadorusuario($usuario); 
      $registros = 20;
      $contador = 1;
      $pagina = $_GET["pagina"];

      if (!$pagina) { 
      $inicio = 0; 
      $pagina = 1; 
      } else { 
      $inicio = ($pagina - 1) * $registros; 
      } 

      $resultados = $sel->consultaBuscadorxusuario($usuario,$inicio,$registros);  
      $total_registros = mysqli_num_rows($ni); 
      $total_paginas = ceil($total_registros / $registros);
}

else if($buscarzona){
      $ni = $sel->consultaBuscadorzona($buscarzona); 
      $registros = 20;
      $contador = 1;
      $pagina = $_GET["pagina"];

      if (!$pagina) { 
      $inicio = 0; 
      $pagina = 1; 
      } else { 
      $inicio = ($pagina - 1) * $registros; 
      } 

      $resultados = $sel->consultaBuscadorxzona($buscarzona,$inicio,$registros);  
      $total_registros = mysqli_num_rows($ni); 
      $total_paginas = ceil($total_registros / $registros);
}
else if($buscaregion){
      $ni = $sel->consultaBuscadorregion($buscaregion); 
      $registros = 20;
      $contador = 1;
      $pagina = $_GET["pagina"];

      if (!$pagina) { 
      $inicio = 0; 
      $pagina = 1; 
      } else { 
      $inicio = ($pagina - 1) * $registros; 
      } 

      $resultados = $sel->consultaBuscadorxregion($buscaregion,$inicio,$registros);  
      $total_registros = mysqli_num_rows($ni); 
      $total_paginas = ceil($total_registros / $registros);
}
else if($buscar){
 
      $ni = $sel->consultaBuscador($buscar); 
      $registros = 20;
      $contador = 1;
      $pagina = $_GET["pagina"];

      if (!$pagina) { 
      $inicio = 0; 
      $pagina = 1; 
      } else { 
      $inicio = ($pagina - 1) * $registros; 
      } 

      $resultados = $sel->consultaBuscadorx($buscar,$inicio,$registros);  
      $total_registros = mysqli_num_rows($ni); 
      $total_paginas = ceil($total_registros / $registros);
 
 
     
}
else if($rondax){

       $ni = $sel->consultaRonda($rondax); 
      $registros = 20;
      $contador = 1;
      $pagina = $_GET["pagina"];

      if (!$pagina) { 
      $inicio = 0; 
      $pagina = 1; 
      } else { 
      $inicio = ($pagina - 1) * $registros; 
      } 

      $resultados = $sel->consultaRondax($rondax,$inicio,$registros);  
      $total_registros = mysqli_num_rows($ni); 
      $total_paginas = ceil($total_registros / $registros);


}
else{

      $ni = $sel->consulta(); 
      $registros = 20;
      $contador = 1;
      $pagina = $_GET["pagina"];

      if (!$pagina) { 
      $inicio = 0; 
      $pagina = 1; 
      } else { 
      $inicio = ($pagina - 1) * $registros; 
      } 

      $resultados = $sel->paginador($inicio,$registros);  
      $total_registros = mysqli_num_rows($ni); 
      $total_paginas = ceil($total_registros / $registros);

}

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
          <div class="row tile_count" style="margin-bottom:0px;">
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count" style='width: 11%;'>
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Norte Oriente</span>
                            <div class="count green"> <?php  $niu = $sel->CountAgencias("1",$rondax);
                          $fi = mysqli_num_rows($niu); echo $fi ?>  </div>
                            <span class="count_bottom"><i class="green">Total </i> de agencias</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count" style='width: 11%;'>
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Lima</span>
                            <div class="count green"><?php  $niu = $sel->CountAgencias("2",$rondax);
                          $fi = mysqli_num_rows($niu); echo $fi ?> </div>
                            <span class="count_bottom"><i class="green">Total</i> de agencias</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count" style='width: 11%;'>
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Centro Sur</span>
                            <div class="count green"><?php  $niu = $sel->CountAgencias("3",$rondax);
                          $fi = mysqli_num_rows($niu); echo $fi ?> </div>
                            <span class="count_bottom"><i class="green">Total </i> de agencias</span>
                        </div>
                    </div>
                     <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count" style='width: 11%;'>
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Total Agencias</span>
                            <div class="count red"><?php  $niu = $sel->CountAgenciaTotal($rondax);
                          $fi = mysqli_num_rows($niu); echo $fi ?> </div>
                            <span class="count_bottom"><i class="green">SUPERVISADAS</i></span>
                        </div>
                    </div>
                   <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count" style='width: 11%;'>
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Antony</span>
                            <div class="count green"><?php  $niu = $sel->CountUsu("41",$rondax);
                          $fi = mysqli_num_rows($niu); echo $fi ?> </div>
                            <span class="count_bottom"><i class="green">Agencias</i> realizadas</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count" style='width: 11%;'>
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Jose</span>
                            <div class="count green"><?php  $niu = $sel->CountUsu("35",$rondax);
                          $fi = mysqli_num_rows($niu); echo $fi ?> </div>
                            <span class="count_bottom"><i class="green">Agencias</i> realizadas</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count" style='width: 11%;'>
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Fernando</span>
                            <div class="count green"><?php  $niu = $sel->CountUsu("37",$rondax);
                          $fi = mysqli_num_rows($niu); echo $fi ?> </div>
                            <span class="count_bottom"><i class="green">Agencias</i> realizadas</span>
                        </div>
                    </div>
                     <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count" style='width: 11%;'>
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Miguel</span>
                            <div class="count green"><?php  $niu = $sel->CountUsu("39",$rondax);
                          $fi = mysqli_num_rows($niu); echo $fi ?> </div>
                            <span class="count_bottom"><i class="green">Agencias</i> realizadas</span>
                        </div>
                    </div>
                   <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count" style='width: 11%;'>
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Admin</span>
                            <div class="count green"><?php  $niu = $sel->CountUsu("22",$rondax);
                          $fi = mysqli_num_rows($niu); echo $fi ?> </div>
                            <span class="count_bottom"><i class="green">Agencias</i> realizadas</span>
                        </div>
                    </div>

                </div>

          <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
                    
                    
               <p style="font-weight: bolder;">BUSCAR POR:</p>
                    <form class="form-inline"  action="checklist.php" method="GET">
        <div class="form-group" style="width: 15%;">
                                     
                                 <select name="rondax" data-placeholder="Your Favorite Types of Bear" class="chosen-select-width" tabindex="10">
                                    <option value="" > Ronda</option>                                                 
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>                      
                                 </select>

                          </div>
			 <div class="form-group" style="width: 18%;">
        
         <select name="usuario" data-placeholder="Your Favorite Types of Bear" class="chosen-select-width" tabindex="10">
                                  <option value="" > Usuario</option>                                                 
                                    <option value="36" >Stephan</option>
                                        <option value="41" >Tony</option>
                                        <option value="37" >Fernando</option>
                                        <option value="39" >Miguel</option>
                                       <option value="35" >Jose</option>
                                       <option value="22" >Admin</option>
                                       <option value="26" >Dennis</option>
                        
                                 </select>
      </div>

			<div class="form-group" style="width: 17%;">
				
				 <select name="buscarzona" data-placeholder="Your Favorite Types of Bear" class="chosen-select-width" tabindex="10">
                                	<option value="" > Zona</option>                                                 
                                  	<option value="1" >Norte Oriente</option>
                                        <option value="2" >Lima</option>
                                        <option value="3" >Centro Sur</option>
                        
                                 </select>
			</div>
			
			<div class="form-group" style="width: 20%;">
				
				 <select name="buscaregion" data-placeholder="Your Favorite Types of Bear" class="chosen-select-width" tabindex="10">
                                  <option value="" > Region</option>                          
                                   <?php $cen = $sel->consultaAutocompleteRegion(); while($centros = $cen->fetch_assoc()){?>                            
                                  <option value="<?php echo $centros["id_region"] ?>" ><?php echo $centros["region"] ?></option>
                          	   <?php } ?>
                                 </select>
			</div>
			<div class="form-group" style="width: 26%;">
				
				 <select name="buscar" data-placeholder="Your Favorite Types of Bear" class="chosen-select-width" tabindex="10">
                                  <option value="" >Agencia </option>                          
                                   <?php $cen = $sel->consultaAutocomplete(); while($centros = $cen->fetch_assoc()){?>                            
                                  <option value="<?php echo $centros["agencia"] ?>" ><?php echo $centros["agencia"] ?></option>
                          <?php } ?>
                                 </select>
				<input type="submit" value="BUSCAR" class="btn btn-success" style="margin: 0px;padding-left: 22px;padding-right: 30px;font-weight: bolder;">
	
			</div>
		     </form>
		    
                  </div>
                  <br><strong> REPORTE POR :</strong>  <br><br>
                  <a href="ReporteAgencias.php?rondax=<?php echo $rondax ?>" class="btn btn-danger btn-xs" style="float: left;margin-left: 7px;font-weight: bolder;font-size: 14px;"> 
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Agencias</a>
                  <a href="ReporteDocumentos.php?rondax=<?php echo $rondax ?>" class="btn btn-danger btn-xs" style="float: left;margin-left: 7px;font-weight: bolder;font-size: 14px;"> 
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Doc Mantenimiento</a>
                  <a href="ReporteLogistica.php?rondax=<?php echo $rondax ?>" class="btn btn-danger btn-xs" style="float: left;margin-left: 7px;font-weight: bolder;font-size: 14px;"> 
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Logistica</a>
                  <a href="ReporteServicios.php?rondax=<?php echo $rondax ?>" class="btn btn-danger btn-xs" style="float: left;margin-left: 7px;font-weight: bolder;font-size: 14px;"> 
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Servicios</a>
                  <a href="ReporteInfExterna.php?rondax=<?php echo $rondax ?>" class="btn btn-danger btn-xs" style="float: left;margin-left: 7px;font-weight: bolder;font-size: 14px;"> 
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Inf.Externa</a>
                  <a href="ReporteTecho.php?rondax=<?php echo $rondax ?>" class="btn btn-danger btn-xs" style="float: left;margin-left: 7px;font-weight: bolder;font-size: 14px;"> 
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Techo</a>
                  <a href="ReporteInterna.php?rondax=<?php echo $rondax ?>" class="btn btn-danger btn-xs" style="float: left;margin-left: 7px;font-weight: bolder;font-size: 14px;"> 
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Interna</a>
                  <a href="ReporteMobiliario.php?rondax=<?php echo $rondax ?>" class="btn btn-danger btn-xs" style="float: left;margin-left: 7px;font-weight: bolder;font-size: 14px;"> 
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Mobiliario</a>
                  <a href="ReporteEquipamiento.php?rondax=<?php echo $rondax ?>" class="btn btn-danger btn-xs" style="float: left;margin-left: 7px;font-weight: bolder;font-size: 14px;"> 
                  <i class="fa fa-file-excel-o" aria-hidden="true"></i> Equipamiento</a>


                  <div class="x_content">

                    
 <br> 
                    <div class="table-responsive">
                      <table id="example" class="table responsive-utilities jambo_table" border="1" >
                        <thead>
                          <tr class="headings">
                             
                           <!-- <th class="column-title">Id </th> -->
                          <th class="column-title">USUARIO </th>
                          <th class="column-title" style="text-align: center;">CODIGO </th>                          
                            <th class="column-title" style="text-align: center;">ZONA</th>
                            <th class="column-title" style="text-align: center;">REGIÓN </th>
                            <th class="column-title" style="text-align: center;">AGENCIA </th>
                            <th class="column-title" style="text-align: center;">RONDA</th>
                            <th class="column-title" style="text-align: center;">PROMEDIO</th>
                            <th class="column-title" style="text-align: center;">EST. CHK</th>
                            <th class="column-title" style="text-align: center;">EST. OBS</th>
                            <th class="column-title" style="text-align: center;">FECHA</th>
                            <th class="column-title no-link last" style="text-align: center;"><span class="nobr">ACCIÓN</span>
                            </th>
                            <th class="bulk-actions" colspan="7" style="text-align: center;">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                   <?php  
                      if ($total_registros) {
                       while($mue = $resultados->fetch_assoc()){ ?>
                          <tr class="" style="font-size:12px;">
                            
                           <!--  <td class=" "><?php echo $mue["id_inicio"]; ?></td> -->
                           <td class=" "><?php echo $mue["user"]; ?></td>
                           <td class=" "><?php echo $mue["id_cod"]; ?></td>
                           
                            <td class=" "><?php echo $mue["zona"]; ?></td>
                            <td class=" "><?php echo $mue["region"]; ?></td>
                            <td style="font-size: 11px; "><?php echo $mue["agencia"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["ronda"]; ?></td>
                           <!-- <td style="text-align: center;"><?php echo $mue["totales"]; ?></td>-->
<?php if($mue["totales"] > 4.5 && $mue["totales"] < 5 )
  {

    echo "<td style='text-align: center;background-color: #00b050;color: black;font-weight: bolder;cursor: pointer;' data-toggle='tooltip' title='BUENO' data-placement='right'>" .$mue["totales"]. "</td>";

  }
  else if($mue["totales"] > 3.6 && $mue["totales"] <= 4.5 )
  {

    echo "<td style='text-align: center;background-color: #ffff00;color: black;font-weight: bolder;cursor: pointer;' data-toggle='tooltip' title='ACEPTABLE' data-placement='right'>" .$mue["totales"]. "</td>";

  }
  else if($mue["totales"] > 2.9 && $mue["totales"] <= 3.6 )
  {

    echo "<td style='text-align: center;background-color: #ffc000;color: black;font-weight: bolder;cursor: pointer;' data-toggle='tooltip' title='REGULAR' data-placement='right'>" .$mue["totales"]. "</td>";

  }

  else if($mue["totales"] >= 0.00 && $mue["totales"] <= 2.9 )
  {

    echo "<td style='text-align: center;background-color: #ff3737;color: black;font-weight: bolder;cursor: pointer;' data-toggle='tooltip' title='CRITICO' data-placement='right'>" .$mue["totales"]. "</td>";

  }
  
  if($mue["estado_chk"] == "Sin terminar" )
  {

    echo "<td style='text-align: center;background-color:red;color: white;font-weight: bolder;' ></td>";

  }
  else if($mue["estado_chk"] == "Terminado" )
  {

    echo "<td style='text-align: center;background-color: white;color: white;font-weight: bolder;' ><span class='glyphicon glyphicon-ok' style='color:#26b99a;'></span></td>";

  }

 if($mue["estado"] == "Sin terminar" )
  {

    echo "<td style='text-align: center;background-color:red;color: white;font-weight: bolder;' ></td>";

  }
  else if($mue["estado"] == "Terminado" )
  {

    echo "<td style='text-align: center;background-color: white;color: white;font-weight: bolder;' ><span class='glyphicon glyphicon-ok' style='color:#26b99a;'></span></td>";

  }

$fec = substr($mue["fecha"],0,10);
?>
                            <td style="text-align: center;"><?php echo $mue["fecha"] ?></td>
 <td class=" last" style="text-align: center;">
 <a href="proceso.php?cod=<?php echo $mue["id_cod"]."&ronda=".$mue["ronda"]; ?>" class="btn btn-success btn-xs" title="Checklist"><span class='glyphicon glyphicon-ok'></span></a>
 <a href="DetalleObservaciones.php?cod=<?php echo $mue["id_cod"]; ?>" class="btn btn-warning btn-xs" title="Observaciones"><span class='glyphicon glyphicon-zoom-in'></span></a>
     <?php
       if($us=="22" || $usuario=="22" || $usuario==""){
     ?>
        <a href="Eliminar.php?tipo=agencia&code=<?php echo $mue["id_cod"]; ?>" onclick="return confirm('Realmente deseas eiminar la agencia?');" class="btn btn-danger btn-xs" title="Eliminar"><span class='glyphicon glyphicon-trash'></span></a>
    <?php
       }
     ?>
 </td>
                          </tr>
                          <?php }
                                   } 
                                  mysqli_free_result($ni);  
                                     ?>
                                     
                        </tbody>
                      </table>
                               <ul class="pagination">
                                 
                                  <?php
					                           if($usuario){

                                          if ($total_registros) {
                                             
                                              if (($pagina - 1) > 0) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina-1)."&usuario=".$usuario."&us=".$us."'>< Anterior</a></li>";
                                                } else {
                                                echo "<li ><a href='#'>< Anterior</a></li>";
                                              }
                                              for ($i = 1; $i <= $total_paginas; $i++) {
                                                if ($pagina == $i) {
                                                  echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                                } else {
                                                  echo "<li ><a href='checklist.php?pagina=$i&usuario=".$usuario."&us=".$us."'>$i</a> </li>"; 
                                                } 
                                              }
                                              if (($pagina + 1)<=$total_paginas) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina+1)."&usuario=".$usuario."&us=".$us."'>Siguiente ></a></li>";
                                              } else {
                                                echo "<li ><a href='#'>Siguiente ></a></li>";
                                              }    
                                            }

                                      }

                                     else if($buscarzona){

                                          if ($total_registros) {
                                             
                                              if (($pagina - 1) > 0) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina-1)."&buscarzona=".$buscarzona."&us=".$us."'>< Anterior</a></li>";
                                                } else {
                                                echo "<li ><a href='#'>< Anterior</a></li>";
                                              }
                                              for ($i = 1; $i <= $total_paginas; $i++) {
                                                if ($pagina == $i) {
                                                  echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                                } else {
                                                  echo "<li ><a href='checklist.php?pagina=$i&buscarzona=".$buscarzona."&us=".$us."'>$i</a> </li>"; 
                                                } 
                                              }
                                              if (($pagina + 1)<=$total_paginas) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina+1)."&buscarzona=".$buscarzona."&us=".$us."'>Siguiente ></a></li>";
                                              } else {
                                                echo "<li ><a href='#'>Siguiente ></a></li>";
                                              }    
                                            }

                                      }

                                      else if($buscaregion){

                                          if ($total_registros) {
                                             
                                              if (($pagina - 1) > 0) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina-1)."&buscaregion=".$buscaregion."&us=".$us."'>< Anterior</a></li>";
                                                } else {
                                                echo "<li ><a href='#'>< Anterior</a></li>";
                                              }
                                              for ($i = 1; $i <= $total_paginas; $i++) {
                                                if ($pagina == $i) {
                                                  echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                                } else {
                                                  echo "<li ><a href='checklist.php?pagina=$i&buscaregion=".$buscaregion."&us=".$us."'>$i</a> </li>"; 
                                                } 
                                              }
                                              if (($pagina + 1)<=$total_paginas) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina+1)."&buscaregion=".$buscaregion."&us=".$us."'>Siguiente ></a></li>";
                                              } else {
                                                echo "<li ><a href='#'>Siguiente ></a></li>";
                                              }    
                                            }

                                      }

                                      else if($buscar){

                                          if ($total_registros) {
                                             
                                              if (($pagina - 1) > 0) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina-1)."&buscar=".$buscar."&us=".$us."'>< Anterior</a></li>";
                                                } else {
                                                echo "<li ><a href='#'>< Anterior</a></li>";
                                              }
                                              for ($i = 1; $i <= $total_paginas; $i++) {
                                                if ($pagina == $i) {
                                                  echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                                } else {
                                                  echo "<li ><a href='checklist.php?pagina=$i&buscar=".$buscar."&us=".$us."'>$i</a> </li>"; 
                                                } 
                                              }
                                              if (($pagina + 1)<=$total_paginas) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina+1)."&buscar=".$buscar."&us=".$us."'>Siguiente ></a></li>";
                                              } else {
                                                echo "<li ><a href='#'>Siguiente ></a></li>";
                                              }    
                                            }

                                      }
                                      else if($rondax){

                                          if ($total_registros) {
                                             
                                              if (($pagina - 1) > 0) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina-1)."&rondax=".$rondax."&us=".$us."'>< Anterior</a></li>";
                                                } else {
                                                echo "<li ><a href='#'>< Anterior</a></li>";
                                              }
                                              for ($i = 1; $i <= $total_paginas; $i++) {
                                                if ($pagina == $i) {
                                                  echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                                } else {
                                                  echo "<li ><a href='checklist.php?pagina=$i&rondax=".$rondax."&us=".$us."'>$i</a> </li>"; 
                                                } 
                                              }
                                              if (($pagina + 1)<=$total_paginas) {
                                                echo "<li ><a href='checklist.php?pagina=".($pagina+1)."&rondax=".$rondax."&us=".$us."'>Siguiente ></a></li>";
                                              } else {
                                                echo "<li ><a href='#'>Siguiente ></a></li>";
                                              }    
                                            }

                                      }

                                    else{

                                          if ($total_registros) {
                                       
                                            if (($pagina - 1) > 0) {
                                              echo "<li ><a href='checklist.php?pagina=".($pagina-1)."&us=".$us."'>< Anterior</a></li>";
                                              } else {
                                              echo "<li ><a href='#'>< Anterior</a></li>";
                                            }
                                            for ($i = 1; $i <= $total_paginas; $i++) {
                                              if ($pagina == $i) {
                                                echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                              } else {
                                                echo "<li ><a href='checklist.php?pagina=$i&us=".$us."'>$i</a> </li>"; 
                                              } 
                                            }
                                            if (($pagina + 1)<=$total_paginas) {
                                              echo "<li ><a href='checklist.php?pagina=".($pagina+1)."&us=".$us."'>Siguiente ></a></li>";
                                            } else {
                                              echo "<li ><a href='#'>Siguiente ></a></li>";
                                            }    
                                          }


                                    }

                                  

                                      ?>  
                              </ul>
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
