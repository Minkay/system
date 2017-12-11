<?php
require 'Modelo/funciones.php';
$sel =new Model();
error_reporting(0);
$ni = $sel->useradmin(); 
      

$registros = 8;
$contador = 1;
$pagina = $_GET["pagina"];

if (!$pagina) { 
    $inicio = 0; 
    $pagina = 1; 
} else { 
    $inicio = ($pagina - 1) * $registros; 
} 

$resultados = $sel->paginadoruser($inicio,$registros);  
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
                    <h2>Vista de Usuarios<small>Apertura de registro</small></h2>
               
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">Id </th>
                            <th class="column-title">Usuario </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Contraseña </th>
                            <th class="column-title">Estado </th>
                            <th class="column-title">Nombre </th>
                            <th class="column-title">Apellido </th>
                            <th class="column-title">Celular </th>
                            <th class="column-title">Fecha </th>
                            <th class="column-title no-link last"><span class="nobr">Accion</span>
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
                           
                            <td class=" "><?php echo $mue["id"]; ?></td>
                            <td class=" "><?php echo $mue["user"]; ?></td>
                            <td class=" "><?php echo $mue["email"]; ?></td>
                            <td class=" "><?php echo $mue["pass"]; ?></td>
                            <td class=" "><?php echo $mue["estado"]; ?></td>
                            <td class=" "><?php echo $mue["nom"]; ?></td>
                            <td class=" "><?php echo $mue["ape"]; ?></td>
                            <td class=" "><?php echo $mue["cel"]; ?></td>
                            <td class=""><?php echo $mue["fe_in"]; ?></td>
  <td class=" last"><a href="DeatalleUsuario.php?cod=<?php echo $mue["id"]; ?>" class="btn btn-success btn-xs">Verificar</a></td>
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
                                          echo "<li ><a href='usuarios.php?pagina=".($pagina-1)."'>< Anterior</a></li>";
                                          } else {
                                          echo "<li ><a href='#'>< Anterior</a></li>";
                                        }
                                        for ($i = 1; $i <= $total_paginas; $i++) {
                                          if ($pagina == $i) {
                                            echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                          } else {
                                            echo "<li ><a href='usuarios.php?pagina=$i'>$i</a> </li>"; 
                                          } 
                                        }
                                        if (($pagina + 1)<=$total_paginas) {
                                          echo "<li ><a href='usuarios.php?pagina=".($pagina+1)."'>Siguiente ></a></li>";
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
