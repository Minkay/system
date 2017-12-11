<?php

error_reporting(0);
session_start();

if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 


require 'Modelo/funciones.php';
$sel =new Model();
$buscar = $_GET["buscar"];
$rondax = $_GET["rondax"];

 if($buscar){

      
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
  <head>
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

          <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agencias<small>Apertura de registro</small></h2>
               
                    <form class="form-inline" style="text-align: right;" action="puntajes.php" method="GET">

                           <div class="form-group" style="width: 20%;">
                                      Buscar por 
                                 <select name="rondax" data-placeholder="Your Favorite Types of Bear" class="chosen-select-width" tabindex="10">
                                    <option value="" > Ronda</option>                                                 
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>                      
                                 </select>

                          </div>



                    			<div class="form-group" style="width: 51%;">
                    				
                    				 <select name="buscar" data-placeholder="Your Favorite Types of Bear" class="chosen-select-width" tabindex="10">
                                                    <option value="" > Agencia a Buscar </option>                          
                                                       <?php $cen = $sel->consultaAutocomplete(); while($centros = $cen->fetch_assoc()){?>                            
                                                      <option value="<?php echo $centros["agencia"] ?>" ><?php echo $centros["agencia"] ?></option>
                                              <?php } ?>
                                                     </select>
                    				<input type="submit" value="Buscar" class="btn btn-success">
                    	
                    			</div>
		              </form>
		    
                  </div>

                  <div class="x_content">

                   

                    <div class="table-responsive">
                      <table id="example" class="table responsive-utilities jambo_table" border="1" >
                        <thead>
                          <tr class="headings">
                             
                           <!-- <th class="column-title">Id </th> -->
                            <!-- <th class="column-title">Usuario </th> -->
                          <!--   <th class="column-title">Codigo </th> -->
                          
                            <th class="column-title" style="text-align: center;">ZONA</th>
                            <th class="column-title" style="text-align: center;">REGIÓN </th>
                            <th class="column-title" style="text-align: center;">AGENCIA </th>
                            <th class="column-title" style="text-align: center;">RONDA</th>
                            <th class="column-title" style="text-align: center;">PROMEDIO</th>
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
                          <tr class="">
                            
                           <!--  <td class=" "><?php echo $mue["id_inicio"]; ?></td> -->
                           <!--  <td class=" "><?php echo $mue["user"]; ?></td> -->
                           <!--  <td class=" "><?php echo $mue["id_cod"]; ?></td> -->

                            <td class=" "><?php echo $mue["zona"]; ?></td>
                            <td class=" "><?php echo $mue["region"]; ?></td>
                            <td class=" "><?php echo $mue["agencia"]; ?></td>
                            <td class=" " style="text-align: center;"><?php echo $mue["ronda"]; ?></td>
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


?>
                           
                            <td style="text-align: center;"><?php echo $mue["fecha"]; ?></td>
                            <td class=" last" style="text-align: center;">
                            <a href="procesos.php?cod=<?php echo $mue["id_cod"]."&ronda=".$mue["ronda"]; ?>" class="btn btn-success btn-xs" style="background: #009c4d;">
                                 <span class="glyphicon glyphicon-pencil"  style="color: #fbbd23;font-weight: 800;font-size: 13px;" ></span> CheckList</a>
                            <a href="VistaObservaciones.php?cod=<?php echo $mue["id_cod"]; ?>" class="btn btn-success btn-xs" style="background:#fbbd24;color:black;">
                                <span class="glyphicon glyphicon-search" style="color:black;font-weight: 800;font-size: 13px;"></span> Observaciones</a></td> 
                          </tr>
                          <?php }
                                   } 
                                  mysqli_free_result($ni);  
                                     ?>
                                     
                        </tbody>
                      </table>
                               <ul class="pagination">
                                 
                                  <?php

                                     if($rondax){

                                          if ($total_registros) {
                                             
                                              if (($pagina - 1) > 0) {
                                                echo "<li ><a href='puntajes.php?pagina=".($pagina-1)."&rondax=".$rondax."'>< Anterior</a></li>";
                                                } else {
                                                echo "<li ><a href='#'>< Anterior</a></li>";
                                              }
                                              for ($i = 1; $i <= $total_paginas; $i++) {
                                                if ($pagina == $i) {
                                                  echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                                } else {
                                                  echo "<li ><a href='puntajes.php?pagina=$i&rondax=".$rondax."'>$i</a> </li>"; 
                                                } 
                                              }
                                              if (($pagina + 1)<=$total_paginas) {
                                                echo "<li ><a href='puntajes.php?pagina=".($pagina+1)."&rondax=".$rondax."'>Siguiente ></a></li>";
                                              } else {
                                                echo "<li ><a href='#'>Siguiente ></a></li>";
                                              }    
                                            }

                                      }

                                     else {

                                          if ($total_registros) {
                                       
                                                if (($pagina - 1) > 0) {
                                                  echo "<li ><a href='puntajes.php?pagina=".($pagina-1)."'>< Anterior</a></li>";
                                                  } else {
                                                  echo "<li ><a href='#'>< Anterior</a></li>";
                                                }
                                                for ($i = 1; $i <= $total_paginas; $i++) {
                                                  if ($pagina == $i) {
                                                    echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                                  } else {
                                                    echo "<li ><a href='puntajes.php?pagina=$i'>$i</a> </li>"; 
                                                  } 
                                                }
                                                if (($pagina + 1)<=$total_paginas) {
                                                  echo "<li ><a href='puntajes.php?pagina=".($pagina+1)."'>Siguiente ></a></li>";
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
  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
  </body>
</html>
