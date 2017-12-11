<?php

error_reporting(0);
session_start();

if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 


require 'Modelo/funciones.php';
$sel =new Model();

$ni = $sel->consulta(); 


$registros = 10;
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


?>

<!DOCTYPE html>
<html lang="en">
  <head>
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
                  <div class="x_title">
                    <h2>OBSERVACIONES POR AGENCIA<small></small></h2>
               
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   

                    <div class="table-responsive">
                      <table class="table jambo_table bulk_action" border="1">
                        <thead>
                          <tr class="headings">
                            
                          <!--  <th class="column-title">Id </th>
                            <th class="column-title">Usuario </th>
                            <th class="column-title">Codigo </th> -->
                            <th class="column-title">ZONA </th>
                            <th class="column-title">REGIÓN </th>
                            <th class="column-title">AGENCIA </th>
                            <th class="column-title">FECHA</th>
                            <th class="column-title no-link last" style="text-align: center;"><span class="nobr">ACCIÓN</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                   <?php  
                      if ($total_registros) {
                       while($mue = $resultados->fetch_assoc()){ ?>
                          <tr class="odd pointer">
                           
                         <!--   <td class=" "><?php echo $mue["id_inicio"]; ?></td>
                            <td class=" "><?php echo $mue["user"]; ?></td>
                            <td class=" "><?php echo $mue["id_cod"]; ?></td> -->
                            <td class=" "><?php echo $mue["zona"]; ?></td>
                            <td class=" "><?php echo $mue["region"]; ?></td>
                            <td class=" "><?php echo $mue["agencia"]; ?></td>
                            <td class=""><?php echo $mue["fecha"]; ?></td>
 <td class=" last" style="text-align: center;"><a href="DetalleObservaciones.php?cod=<?php echo $mue["id_cod"]; ?>" class="btn btn-danger btn-xs">Observaciones</a>
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
                                      if ($total_registros) {
                                       
                                        if (($pagina - 1) > 0) {
                                          echo "<li ><a href='observaciones.php?pagina=".($pagina-1)."'>< Anterior</a></li>";
                                          } else {
                                          echo "<li ><a href='#'>< Anterior</a></li>";
                                        }
                                        for ($i = 1; $i <= $total_paginas; $i++) {
                                          if ($pagina == $i) {
                                            echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                          } else {
                                            echo "<li ><a href='observaciones.php?pagina=$i'>$i</a> </li>"; 
                                          } 
                                        }
                                        if (($pagina + 1)<=$total_paginas) {
                                          echo "<li ><a href='observaciones.php?pagina=".($pagina+1)."'>Siguiente ></a></li>";
                                        } else {
                                          echo "<li ><a href='#'>Siguiente ></a></li>";
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
    <!-- /gauge.js -->
  </body>
</html>
