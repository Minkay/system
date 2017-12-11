 <?php 


error_reporting(0);
session_start();


if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 
require 'Modelo/funciones.php';
$sel =new Model();
$ni = $sel->TotalesFilas("1");
$ni1 = $sel->TotalesFilas("2");
$ni2 = $sel->TotalesFilas("3");

$nor = mysqli_num_rows($ni); 
$nor1 = mysqli_num_rows($ni1); 
$nor2 = mysqli_num_rows($ni2); 
//echo $nor;

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'Vistas/head.php';  ?>
    <style type="text/css">
				${demo.css}
		</style>
  <script type="text/javascript">
    $(function () {
    Highcharts.chart('cabeceragen', {
        chart: {
            type: 'column'

        },
        title: {
            text: 'Resumen General de Agencias Mi Banco'
        },
        subtitle: {
            text: 'wwww.minkay.com.pe'
        },
        xAxis: {
            categories: [
                'Huanuco',
                'Huanuco Matriz',
                'Tingo Maria',
                'Chilca Matriz',
                'Chupaca',
                'El Tambo',
                'El Tambo Centro',
                'Huancayo',
                'Huancayo Matriz',
                'Jauja',
                'La merced',
                'Satipo'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Promedio'
            }
        },
        tooltip: {

            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
          backgroundColor: 'rgba(0, 0, 0, 0.85)',
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                 style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'red'
                            }
            }
        },
         legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Doc. Mantenimiento',
            data: [4.9, 2.5, 3.4, 4.2, 4.0, 4.0, 3.6, 4.5, 2.4, 4.1, 2.6, 4.4]

        }, {
            name: 'Servicios (vehículos,etc)',
            data: [2.4,2.4,3.4,2.4,3.4,2.4,2.4,2.4,3.4,4.4,2.4,2.4]

        }, {
            name: 'Logistica (economato,etc)',
            data: [4.9, 3.8, 3.3, 4.4, 4.0, 4.3, 5.0, 5.6, 5.4, 6.2, 5.3, 5.2]

        },{
            name: 'Infraestructura externa',
            data: [4.9, 3.8, 3.3, 4.4, 4.0, 4.3, 5.0, 5.6, 5.4, 6.2, 5.3, 5.2]

        },{
            name: 'Estado Techo',
            data: [2.9, 3.8, 4.3, 2.4, 3.0, 4.3, 4.0, 2.6, 3.4, 3.2, 1.3, 2.2]

        },{
            name: 'Infraestructura Interna',
            data: [2.9, 3.8, 2.3, 4.4, 2.0, 4.3, 5.0, 3.6, 5.4, 6.2, 3.3, 5.2]

        }
        ,{
            name: 'Mobiliario/Silloneria',
            data: [2.9, 3.8, 2.3, 4.4, 2.0, 4.3, 5.0, 3.6, 5.4, 6.2, 3.3, 5.2]

        },{
            name: 'Equipamiento',
            data: [2.9, 3.8, 2.3, 4.4, 2.0, 4.3, 5.0, 3.6, 5.4, 6.2, 3.3, 5.2]

        }]
    });
});
  </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
         <?php include 'Vistas/menu.php'; ?>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

          <?php include 'Vistas/usuario.php';

          //echo "sadasd";
           ?>


            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
        
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" id="cabeceragen">
          
            </div>

          </div>
          <br />

         <!-- <div class="row">


            <div class="col-md-6 col-sm-4 col-xs-12">
            <input type="hidden" value="<?php echo $nor; ?>" id="ct" />
              <div class="x_panel tile fixed_height_320" id="container" >

              </div>
            </div>
             <div class="col-md-6 col-sm-4 col-xs-12">
              <input type="hidden" value="<?php echo $nor1; ?>" id="ct2" />
              <div class="x_panel tile fixed_height_320" id="container2" >

              </div>
            </div>
             <div class="col-md-6 col-sm-4 col-xs-12">
              <input type="hidden" value="<?php echo $nor2; ?>" id="ct3" />
              <div class="x_panel tile fixed_height_320" id="container3" >

              </div>
            </div>

            <div class="col-md-6 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Device Usage</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


  

          </div>-->


        
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
