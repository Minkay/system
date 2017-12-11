 <?php 


error_reporting(0);
session_start();


if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 
require 'Modelo/procesos.php';
$sel =new Procesos();

$rondx = $_GET["rondx"];



 ?>

<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    <?php include 'Vistas/head.php';  ?>
    <style type="text/css">
				${demo.css}
		</style>
<script src="./js/sumatoria.js"></script>
  <script>


  function refrescar() {
    
            $.post('https://www.minkay.com.pe/system/Modelo/refrescar.php',
             function(data){
              if (data != "[]") {
                    var item = $.parseJSON(data);                    
                    $.each(item, function (i, valor) {
                       
                       $.post("https://www.minkay.com.pe/system/procesos.php?cod="+ valor.id_cod+"&ronda="+valor.ronda, function(htmlexterno){
  
                        });
                        
                         $.post("https://www.minkay.com.pe/system/proceso.php?cod="+ valor.id_cod+"&ronda="+valor.ronda, function(htmlexterno){
  
                        });
                      
                        
                        
                    });
                }
            return false;
            });
        }


            $(document).ready(function() {
	          $(".modal").on("hidden.bs.modal", function() {
	            $(".modal-body").html("");
	          });
	          
	          
	          
       			 refrescar();
		       $('#reload').click(function() { 
		            location.reload();    
		         });
				
	
				/*$.post("http://minkay.com.pe/sistema/procesos.php?cod=txm9vg", function(htmlexterno){
			   			//alert(htmlexterno);
			        });*/
	
	
				$("#rond").change(function(){
			           var se = $('select[id=rond]').val();
			           if(se=="1"){
			           	$("#dos").toggle("slow");
			           	$("#uno").css("display","none");
			           	$("#tres").css("display","none");
			           	$("#gr").css("display","block");
			        	$("#cuatro").css("display","none");
			           	
			           }
			            else if(se=="2"){
                  $("#max").toggle("slow");
			           	$("#uno").css("display","none");
			           	$("#dos").css("display","none");
			           	$("#tres").css("display","none");
			           //	$("#gr").css("display","block");
			           	$("#cuatro").css("display","none");
			           }
			           else{
		              $("#cuatro").toggle("slow");
			           	$("#uno").css("display","none");
			           	$("#dos").css("display","none");
			           	$("#tres").css("display","none");
			           	$("#gr").css("display","none");
                  $("#max").css("display","none");
			           }
			          
				});
				
				$("#gr").click(function(){
				
			           	$("#uno").css("display","none");
			           	$("#dos").toggle("hide");	           	
			           	$("#tres").toggle("slow");          	         	
			          
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
          <div class="clearfix"  style="background-color: white;padding: 14px;">
        <center><h2 style="text-decoration: underline;font-weight: bolder;">RESUMEN GENERAL</h2></center>
			        
        </div><hr style="margin:5px;">
        <div class="clearfix"  style="background-color: white;padding: 14px;">
          <form action="principal.php" method="GET">
      			   <div class="form-group" style="margin-bottom: 0px;">
                       <label for="gender1" class="col-sm-2 control-label" style="width: 70px;margin-top: 10px;">RONDA:</label>
                      <div class="col-sm-2">
                            <select class="form-control" id="rondx" name="rondx">
                              <option value="">- seleccionar -</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                            </select> 

                       
                              
                      </div>
                      <input type="submit" value="Generar Indicadores" class="btn btn-danger" style="position: absolute;">

      				        <label for="gender1" class="col-sm-2 control-label" style="width: 170px;margin-top: 10px;margin-left: 15%;">DETALLE DE RONDA:</label>
      				        <div class="col-sm-2">
            				        <select class="form-control" id="rond">
            				          <option value="">- seleccionar -</option>
            				          <!--<option value="1">2 - 3 Ronda</option>
            				          <option value="2">4 ronda</option>-->
                              <option value="2"> Máx y Mín</option>
            					        <option value="3">Equipamiento</option>
            				        </select>          
            				          
      				        </div>
      				</div>
              <button id="reload" class="btn btn-success" style="float: right;font-weight: bolder;" >
          <i class="fa fa-refresh" aria-hidden="true"></i> Actualizar</button>
          </form>
        <div>
          
        </div>



				<div class="form-group" style="display:none;" id="gr">
				        <input type="button" class="btn btn-danger" value=" VER GRAFICOS"/>
				</div>     
        </div>
          <!-- /top tiles -->

        <!--  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" id="cabecera">
          
            </div>

          </div> -->
          <br />

          <div class="row" id="uno">

		
            <div class="col-md-6 col-sm-4 col-xs-12">
	            <div class="x_panel tile fixed_height_320"  ><br>
	            <center><p style="font-weight: bolder;font-size: 17px;">EVALUACION DE RESULTADOS POR COMPONENTES</p><center>
	            
	            	 <table border="1" width="500">
                        <tr>
                        <th class="tg-yw4l" style="text-align: center;color: white;background-color: #3f5367;width: 150px;">COMPONENTES</th>
                        <th class="tg-yw4l" style="text-align: center;color: white;background-color: #3f5367;width: 100px;">NORTE ORIENTE</th>
                        <th class="tg-yw4l" style="text-align: center;color: white;background-color: #3f5367;width: 80px;">LIMA</th>
                        <th class="tg-yw4l" style="text-align: center;color: white;background-color: #3f5367;width:86px;">CENTRO SUR</th>
                        <th class="tg-yw4l" style="text-align: center;color: white;background-color: #3f5367;width: 80px;">GLOBAL</th>
                        
                        </tr>
                        <tr>
                        <td class="tg-yw4l" style="color: white;background-color: #3f5367;font-weight: bolder;padding-left: 1%;"> MANT. PERIODICO</td>             
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("1",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["mant"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='mp1'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("2",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["mant"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='mp2'>
                          ".$mp."</td>";
                          
                         ?>
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("3",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["mant"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='mp3'>
                          ".$mp."</td>";
                          
                         ?>
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentesGlobal($rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["mant"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='mp4'>
                          ".$mp."</td>";
                          
                         ?>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" style="color: white;background-color: #3f5367;font-weight: bolder;padding-left: 1%;">LOGISTICA</td>                        
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("1",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["log"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='lg1'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("2",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["log"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='lg2'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("3",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["log"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='lg3'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentesGlobal($rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["log"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='lg4'>
                          ".$mp."</td>";
                          
                         ?>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" style="color: white;background-color: #3f5367;font-weight: bolder;padding-left: 1%;"> SERVICIOS BASICOS</td>
                        
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("1",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["serv"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='ser1'>
                          ".$mp."</td>";
                          
                         ?>
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("2",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["serv"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='ser2'>
                          ".$mp."</td>";
                          
                         ?>
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("3",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["serv"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='ser3'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentesGlobal($rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["serv"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='ser4'>
                          ".$mp."</td>";
                          
                         ?>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" style="color: white;background-color: #3f5367;font-weight: bolder;padding-left: 1%;">INF. EXTERNA</td>
                        
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("1",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["ext"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='ext1'>
                          ".$mp."</td>";
                          
                         ?>
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("2",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["ext"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='ext2'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("3",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["ext"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='ext3'>
                          ".$mp."</td>";
                          
                         ?>
                         <?php 
			                        $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentesGlobal($rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["ext"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='ext4'>
                          ".$mp."</td>";
                          
                         ?>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" style="color: white;background-color: #3f5367;font-weight: bolder;padding-left: 1%;">ESTADO TECHO</td>
                        
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("1",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["techo"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='tch1'>
                          ".$mp."</td>";
                          
                         ?>
                          <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("2",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["techo"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='tch2'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("3",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["techo"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='tch3'>
                          ".$mp."</td>";
                          
                         ?>
                       
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentesGlobal($rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["techo"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='tch4'>
                          ".$mp."</td>";
                          
                         ?>
                        </tr>
                         <tr>
                        <td class="tg-yw4l" style="color: white;background-color: #3f5367;font-weight: bolder;padding-left: 1%;">INF. INTERNA</td>
                        
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("1",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["interna"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='int1'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("2",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["interna"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='int2'>
                          ".$mp."</td>";
                          
                         ?>
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("3",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["interna"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='int3'>
                          ".$mp."</td>";
                          
                         ?>
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentesGlobal($rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["interna"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='int4'>
                          ".$mp."</td>";
                          
                         ?>
                        </tr>
                         <tr>
                        <td class="tg-yw4l" style="color: white;background-color: #3f5367;font-weight: bolder;padding-left: 1%;">MOBILIARIO</td>
                        
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("1",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["mob"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='mob1'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("2",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["mob"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='mob2'>
                          ".$mp."</td>";
                          
                         ?>
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("3",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["mob"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='mob3'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentesGlobal($rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["mob"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='mob4'>
                          ".$mp."</td>";
                          
                         ?>
                        </tr>
                         <tr>
                        <td class="tg-yw4l" style="color: white;background-color: #3f5367;font-weight: bolder;padding-left: 1%;">EQUIPAMIENTO</td>
                        
                         <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("1",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["equipo"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='eq1'>
                          ".$mp."</td>";
                          
                         ?>
                       <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("2",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["equipo"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='eq2'>
                          ".$mp."</td>";
                          
                         ?>
                       <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentes("3",$rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["equipo"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='eq3'>
                          ".$mp."</td>";
                          
                         ?>
                        <?php 
			      $suma= 0;$count=0;$resul=0;                                                         
                              $ni = $sel->graficosComponentesGlobal($rondx); while($mue = $ni->fetch_assoc()){ 
                              $count++;
                              $suma = $suma + floatval($mue["equipo"]);
                              $resul = $suma / $count ;
                                }$mp = number_format((float)$resul, 2, '.', '');
                      
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='eq4'>
                          ".$mp."</td>";
                          
                         ?>
                        </tr>
                         <tr>
			<td class="tg-yw4l" style="color: white;background-color: #3f5367;font-weight: bolder;padding-left: 1%;">PROMEDIOS</td>                        
			<td class='tg-yw4l' style='color: white;background-color: #00b050;text-align: center;' id='pr1'></td>
			<td class='tg-yw4l' style='color: white;background-color: #00b050;text-align: center;' id='pr2'></td>
			<td class='tg-yw4l' style='color: white;background-color: #00b050;text-align: center;' id='pr3'></td> 
			<td class='tg-yw4l' style='color: white;background-color: #00b050;text-align: center;' id='pr4'></td>
                        </tr>
                        </table>
	            </div>
                        
                            
            </div>
             <div class="col-md-6 col-sm-4 col-xs-12">
                       <div class="x_panel tile fixed_height_320"  ><br>
                        <center><p style="font-weight: bolder;font-size: 17px;">RESUMEN GENERAL</p><center>
                       
<table border="1" width="500">
                        <tr>
                        <th class="tg-yw4l" style="text-align: center;background-color: #3f5367;width: 110px;color: white;">TABLA DE CALIFICACION</th>
                        <th class="tg-yw4l" style="text-align: center;background-color: #3f5367;width: 100px;color: white;">PUNTAJE</th>
                        <th class="tg-yw4l" style="text-align: center;background-color: #3f5367;width: 100px;color: white;">NORTE ORIENTE</th>
                        <th class="tg-yw4l" style="text-align: center;background-color: #3f5367;width: 80px;color: white;">LIMA</th>
                        <th class="tg-yw4l" style="text-align: center;background-color: #3f5367;width: 86px;color: white;">CENTRO SUR</th>
                        <th class="tg-yw4l" style="text-align: center;background-color: #3f5367;width: 80px;color: white;">GLOBAL</th>
                        
                        </tr>
                        <tr>
                        <td class="tg-yw4l" style="background-color:#00b0f0;color:black;">EXCELENTE</td>
                        <td class="tg-yw4l" style="text-align: center;background-color: white;">=5</td>
                        <?php 
                          $ni = $sel->graficosMuestraPara("1","5.00","5.00",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#00b0f0;color:black;text-align: center;' id='n1'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestraPara("2","5.00","5.00",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#00b0f0;color:black;text-align: center;' id='l1'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestraPara("3","5.00","5.00",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#00b0f0;color:black;text-align: center;' id='c1'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>                        
                        <?php 
                          $ni = $sel->graficosMuestra("5.00","5.00",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#00b0f0;color:black;text-align: center;' id='g1'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                       
                        </tr>
                        <tr>
                        <td class="tg-yw4l" style="background-color:#00b050;color:black;">BUENO</td>
                        <td class="tg-yw4l" style="text-align: center;background-color: white;"> > 4.5 y < 5 </td>
                         <?php 
                          $ni = $sel->graficosMuestraPara("1","4.51","4.99",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#00b050;color:black;text-align: center;' id='n2'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestraPara("2","4.51","4.99",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#00b050;color:black;text-align: center;' id='l2'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestraPara("3","4.51","4.99",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#00b050;color:black;text-align: center;' id='c2'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                         <?php 
                          $ni = $sel->graficosMuestra("4.51","4.99",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#00b050;color:black;text-align: center;' id='g2'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                         </tr>
                        <tr>
                        <td class="tg-yw4l" style="background-color:#ffff00;color:black;">ACEPTABLE</td>
                        <td class="tg-yw4l" style="text-align: center;background-color: white;"> > 4 y <= 4.5</td>
                         <?php 
                          $ni = $sel->graficosMuestraPara("1","4.01","4.50",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ffff00;color:black;text-align: center;' id='n3'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                       
                          <?php 
                          $ni = $sel->graficosMuestraPara("2","4.01","4.50",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ffff00;color:black;text-align: center;' id='l3'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestraPara("3","4.01","4.50",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ffff00;color:black;text-align: center;' id='c3'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestra("4.01","4.50",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ffff00;color:black;text-align: center;' id='g3'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" style="background-color:#ffc000;color:black;">REGULAR</td>
                        <td class="tg-yw4l" style="text-align: center;background-color: white;">> 3.6 y <= 4.0</td>
                        <?php 
                          $ni = $sel->graficosMuestraPara("1","3.61","4.00",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ffc000;color:black;text-align: center;' id='n4'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestraPara("2","3.61","4.00",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ffc000;color:black;text-align: center;' id='l4'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestraPara("3","3.61","4.00",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ffc000;color:black;text-align: center;' id='c4'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                
                         <?php 
                          $ni = $sel->graficosMuestra("3.61","4.00",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ffc000;color:black;text-align: center;' id='g4'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                        </tr>
                        <tr>
                        <td class="tg-yw4l" style="background-color:#ff3737;color:black;">CRITICO</td>
                        <td class="tg-yw4l" style="text-align: center;background-color: white;"> > 0 y <= 3.6</td>
                         <?php 
                          $ni = $sel->graficosMuestraPara("1", "0.00","3.60",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ff3737;color:black;text-align: center;' id='n5'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestraPara("2","0.00","3.60",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ff3737;color:black;text-align: center;' id='l5'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                          <?php 
                          $ni = $sel->graficosMuestraPara("3","0.00","3.60",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ff3737;color:black;text-align: center;' id='c5'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                       
                          <?php 
                          $ni = $sel->graficosMuestra("0.00","3.60",$rondx);
                          $fill = mysqli_num_rows($ni); 
                          echo "<td class='tg-yw4l' style='background-color:#ff3737;color:black;text-align: center;' id='g5'>
                          ".number_format((float)$fill, 2, '.', '')."</td>";
                          
                         ?>
                        </tr>
                        </table>
                        <table class="tg" border='1' width='500' >
				  
				  <tr>
				    <td class="tg-yw4l" style="text-align: center;background-color: #3f5367;width: 104px;color: white;">N° AGENCIAS</td>
				    <td class="tg-yw4l" style="text-align: center;width: 90px;">TOTALES</td>
				    <td class="tg-yw4l" style="text-align: center;width: 86px;" id="t1"></td>
				    <td class="tg-yw4l" style="text-align: center;width: 67px;" id="t2"></td>
				    <td class="tg-yw4l" style="text-align: center;width: 78px;" id="t3"></td>
				    <td class="tg-yw4l" style="text-align: center;" id="t4"></td> 
            <!--<td class="tg-yw4l" style="text-align: center;" id="">256</td>-->
				  </tr>
				</table>
             		</div>
                              
            </div>
            
            
             <div class="col-md-6 col-sm-4 col-xs-12">
                  <div class="x_panel tile fixed_height_320" id="general" >

              	</div>
            </div>
            
            
            	<div class="col-md-6 col-sm-4 col-xs-12">
                  <div class="x_panel tile fixed_height_320" id="cont" >

              </div>
            </div>
            	          
          
          
             <div class="col-md-6 col-sm-4 col-xs-12">
            <input type="hidden" value="<?php echo $nor; ?>" id="ct" />
              <div class="x_panel tile fixed_height_320" id="cabecera" >

              </div>
            </div>


  	   <div class="col-md-6 col-sm-4 col-xs-12">
            <input type="hidden" value="<?php echo $nor; ?>" id="ct" />
              <div class="x_panel tile fixed_height_320" id="container" >

              </div>
            </div>


             <div class="col-md-6 col-sm-4 col-xs-12">
            <input type="hidden" value="<?php echo $nor; ?>" id="ct" />
              <div class="x_panel tile fixed_height_320" id="cabecerados" >

              </div>
            </div>
            
             <div class="col-md-6 col-sm-4 col-xs-12">
              <input type="hidden" value="<?php echo $nor1; ?>" id="ct2" />
              <div class="x_panel tile fixed_height_320" id="container2" >

              </div>
            </div>
            
            
            

             <div class="col-md-6 col-sm-4 col-xs-12">
            <input type="hidden" value="<?php echo $nor; ?>" id="ct" />
              <div class="x_panel tile fixed_height_320" id="cabeceratres" >

              </div>
            </div>
            
             <div class="col-md-6 col-sm-4 col-xs-12">
              <input type="hidden" value="<?php echo $nor2; ?>" id="ct3" />
              <div class="x_panel tile fixed_height_320" id="container3" >

              </div>
            </div>

            
            

            <div class="col-md-6 col-sm-4 col-xs-12" style="display: none;">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
               
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


  

          </div>

		 <div class="row" id="dos" style="display:none;">
		 	
		 	
                		<?php include 'principal2.php';  ?>
              		
		 </div>
		 
		 <div class="row" id="tres" style="display:none;">
		 	
		 	
                		<?php include 'principal3.php';  ?>
              		
		 </div>

    <div class="row" id="max" style="display:none;">
      
      
                    <?php include 'principalmax.php';  ?>
                  
     </div>


     <div class="row" id="cuatro" style="display:none;">
      
      
                    <?php include 'principal4.php';  ?>
                  
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
