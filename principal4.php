<a href="EquipamientoDetalle.php?rondax=<?php echo $rondx ?>" class="btn btn-success" style="float: left;font-weight: bolder;margin-top: 16px;">
           Exportar</a>             
<center><h2 style="background-color: white;padding: 14px;font-weight: bolder;">GENERAL</h2></center>
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
                
                       <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 285px;">COMPONENTES</th>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
                <tr>
                  <td class="tg-yw4l">DISPENSADOR DE AGUA (DIRECTO / RED)</td>
                   <?php 
                   
                          $dis = $sel->graficosComparativoGeneral("6","NO",$rondx); 
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil1g'>
                          <a href='ContadorAgencias.php?ag=6&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                </tr>

                <tr>
                  <td class="tg-yw4l">PROYECTOR MULTIMEDIA</td>
                  <?php 
                          $dis = $sel->graficosComparativoGeneral("7","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil2g'>
                             <a href='ContadorAgencias.php?ag=7&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">LACTARIO</td>
                   <?php 
                          $dis = $sel->graficosComparativoGeneral("8","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil3g'>
                            <a href='ContadorAgencias.php?ag=8&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">FRIO BAR - LACTARIO</td>
                   <?php 
                          $dis = $sel->graficosComparativoGeneral("9","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil4g'>
                            <a href='ContadorAgencias.php?ag=9&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">KITCHENET</td>
                  <?php 
                          $dis = $sel->graficosComparativoGeneral("10","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil5g'>
                          <a href='ContadorAgencias.php?ag=10&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">FRIO BAR</td>
                  <?php 
                          $dis = $sel->graficosComparativoGeneral("11","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil6g'>
                          <a href='ContadorAgencias.php?ag=11&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">HORNO MICROONDAS</td>
                  <?php 
                          $dis = $sel->graficosComparativoGeneral("12","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil7g'>
                          <a href='ContadorAgencias.php?ag=12&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">REPOSTERO / ALACENA</td>
                   <?php 
                          $dis = $sel->graficosComparativoGeneral("14","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil8g'>
                          <a href='ContadorAgencias.php?ag=14&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">MESA / COMEDOR</td>
                  <?php 
                          $dis = $sel->graficosComparativoGeneral("15","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil9g'>
                          <a href='ContadorAgencias.php?ag=15&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr style="display: none;">
                  <td class="tg-yw4l">NO CUENTA CON DISPENSADOR</td>
                  <?php 
                          $dis = $sel->graficosComparativoGeneral("6","SI",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil10g'>
                         <a href='ContadorAgencias.php?ag=6&zo=1' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                
                 
              </table>   
              </center>

            </div>

          </div>


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
              

               <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 285px;">COMPONENTES</th>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH VARONES</td>
                 
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser1g'>
                          <a href='ContadorAgenciasServicios.php?ag=1&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH MUJERES</td>
                  
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser2g'>
                          <a href='ContadorAgenciasServicios.php?ag=2&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH DISCAPACITADOS</td>
                  
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser3g'>
                          <a href='ContadorAgenciasServicios.php?ag=3&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>

                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH MIXTO</td>
                  
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("4","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser4g'>
                          <a href='ContadorAgenciasServicios.php?ag=4&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDEROS SSHH VARONES</td>
                  
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("5","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser5g'>
                          <a href='ContadorAgenciasServicios.php?ag=5&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH MUJERES</td>
                  
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("6","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser6g'>
                          <a href='ContadorAgenciasServicios.php?ag=6&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH DISCAPACITADOS</td>
                  
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("7","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser7g'>
                          <a href='ContadorAgenciasServicios.php?ag=7&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH MIXTO</td>
                  
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("8","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser8g'>
                          <a href='ContadorAgenciasServicios.php?ag=8&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO RACK</td>
                  
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("9","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser9g'>
                          <a href='ContadorAgenciasServicios.php?ag=9&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">CUENTA SOLO CON SSHH MIXTO</td>
                  
                     <?php 
                          $dis = $sel->graficosServiciosGeneral("10","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser10g'>
                          <a href='ContadorAgenciasServicios.php?ag=10&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                
                 
              </table>               
              </center>
                           
            </div>

          </div>
           <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" id="gen"></div>
           
            
          </div>
          <div class="col-md-6 col-sm-4 col-xs-12">
          
            <div class="x_panel tile fixed_height_320" id="gen2"></div>
            
          </div>
                          
        <!--    SEGUNDO CUADROOOO-->
<br><br>
           
<center><h2 style="background-color: white;padding: 14px;font-weight: bolder;">NORTE ORIENTE</h2></center>
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
                
                       <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 285px;">COMPONENTES</th>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
                <tr>
                  <td class="tg-yw4l">DISPENSADOR DE AGUA (DIRECTO / RED)</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("6","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil1'>
                          <a href='ContadorAgencia.php?ag=6&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                </tr>

                <tr>
                  <td class="tg-yw4l">PROYECTOR MULTIMEDIA</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("7","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil2'>
                             <a href='ContadorAgencia.php?ag=7&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">LACTARIO</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("8","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil3'>
                            <a href='ContadorAgencia.php?ag=8&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">FRIO BAR - LACTARIO</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("9","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil4'>
                            <a href='ContadorAgencia.php?ag=9&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">KITCHENET</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("10","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil5'>
                          <a href='ContadorAgencia.php?ag=10&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">FRIO BAR</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("11","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil6'>
                          <a href='ContadorAgencia.php?ag=11&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">HORNO MICROONDAS</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("12","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil7'>
                          <a href='ContadorAgencia.php?ag=12&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">REPOSTERO / ALACENA</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("14","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil8'>
                          <a href='ContadorAgencia.php?ag=14&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">MESA / COMEDOR</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("15","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil9'>
                          <a href='ContadorAgencia.php?ag=15&zo=1&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr style="display: none;">
                  <td class="tg-yw4l">NO CUENTA CON DISPENSADOR</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("6","1","SI",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil10'>
                         <a href='ContadorAgencia.php?ag=6&zo=1' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                
                 
              </table>   
              </center>

            </div>

          </div>


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
              

               <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 285px;">COMPONENTES</th>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH VARONES</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("1","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser1'>
                          <a href='ContadorAgenciaServicios.php?ag=1&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH MUJERES</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("2","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser2'>
                          <a href='ContadorAgenciaServicios.php?ag=2&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH DISCAPACITADOS</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("3","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser3'>
                          <a href='ContadorAgenciaServicios.php?ag=3&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>

                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH MIXTO</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("4","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser4'>
                          <a href='ContadorAgenciaServicios.php?ag=4&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDEROS SSHH VARONES</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("5","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser5'>
                          <a href='ContadorAgenciaServicios.php?ag=5&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH MUJERES</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("6","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser6'>
                          <a href='ContadorAgenciaServicios.php?ag=6&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH DISCAPACITADOS</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("7","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser7'>
                          <a href='ContadorAgenciaServicios.php?ag=7&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH MIXTO</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("8","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser8'>
                          <a href='ContadorAgenciaServicios.php?ag=8&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO RACK</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("9","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser9'>
                          <a href='ContadorAgenciaServicios.php?ag=9&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">CUENTA SOLO CON SSHH MIXTO</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("10","1","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filser10'>
                          <a href='ContadorAgenciaServicios.php?ag=10&zo=1&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                
                 
              </table>               
              </center>
                           
            </div>

          </div>
           <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" id="compa"></div>
           
            
          </div>
          <div class="col-md-6 col-sm-4 col-xs-12">
          
            <div class="x_panel tile fixed_height_320" id="compa2"></div>
            
          </div>
                          
        <!--    SEGUNDO CUADROOOO-->
<br><br>
<center><h2 style="background-color: white;padding: 14px;font-weight: bolder;">LIMA</h2></center>
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
                
                       <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 285px;">COMPONENTES</th>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
                <tr>
                  <td class="tg-yw4l">DISPENSADOR DE AGUA (DIRECTO / RED)</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("6","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil1l'>
                          <a href='ContadorAgencia.php?ag=6&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                </tr>

                <tr>
                  <td class="tg-yw4l">PROYECTOR MULTIMEDIA</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("7","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil2l'>
                             <a href='ContadorAgencia.php?ag=7&zo=2&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">LACTARIO</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("8","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil3l'>
                            <a href='ContadorAgencia.php?ag=8&zo=2&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">FRIO BAR - LACTARIO</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("9","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil4l'>
                            <a href='ContadorAgencia.php?ag=9&zo=2&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">KITCHENET</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("10","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil5l'>
                          <a href='ContadorAgencia.php?ag=10&zo=2&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">FRIO BAR</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("11","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil6l'>
                          <a href='ContadorAgencia.php?ag=11&zo=2&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">HORNO MICROONDAS</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("12","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil7l'>
                          <a href='ContadorAgencia.php?ag=12&zo=2&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">REPOSTERO / ALACENA</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("14","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil8l'>
                          <a href='ContadorAgencia.php?ag=14&zo=2&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">MESA / COMEDOR</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("15","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil9l'>
                          <a href='ContadorAgencia.php?ag=15&zo=2&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr style="display: none;">
                  <td class="tg-yw4l">NO CUENTA CON DISPENSADOR</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("6","2","SI",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil10l'>
                         <a href='ContadorAgencia.php?ag=6&zo=2&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                
                 
              </table>   
              </center>

            </div>

          </div>


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
              

               <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 285px;">COMPONENTES</th>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH VARONES</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("1","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl1'>
                          <a href='ContadorAgenciaServicios.php?ag=1&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH MUJERES</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("2","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl2'>
                          <a href='ContadorAgenciaServicios.php?ag=2&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH DISCAPACITADOS</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("3","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl3'>
                          <a href='ContadorAgenciaServicios.php?ag=3&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH MIXTO</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("4","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl4'>
                          <a href='ContadorAgenciaServicios.php?ag=4&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDEROS SSHH VARONES</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("5","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl5'>
                          <a href='ContadorAgenciaServicios.php?ag=5&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH MUJERES</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("6","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl6'>
                          <a href='ContadorAgenciaServicios.php?ag=6&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH DISCAPACITADOS</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("7","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl7'>
                          <a href='ContadorAgenciaServicios.php?ag=7&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH MIXTO</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("8","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl8'>
                          <a href='ContadorAgenciaServicios.php?ag=8&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO RACK</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("9","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl9'>
                          <a href='ContadorAgenciaServicios.php?ag=9&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                <tr>
                  <td class="tg-yw4l">CUENTA SOLO CON SSHH MIXTO</td>
                  
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("10","2","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserl10'>
                          <a href='ContadorAgenciaServicios.php?ag=10&zo=2&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                  
                </tr>
                
                 
              </table>               
              </center>
                           
            </div>

          </div>
           <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" id="compa3"></div>
           
            
          </div>
          <div class="col-md-6 col-sm-4 col-xs-12">
          
            <div class="x_panel tile fixed_height_320" id="compa4"></div>
            
          </div>

<!--  TERCERO COMERNT -->
<br><br>
            <center><h2 style="background-color: white;padding: 14px;font-weight: bolder;">CENTRO SUR</h2></center>
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
                
                         <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 285px;">COMPONENTES</th>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
                <tr>
                  <td class="tg-yw4l">DISPENSADOR DE AGUA (DIRECTO / RED)</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("6","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil1c'>
                          <a href='ContadorAgencia.php?ag=6&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                </tr>

                <tr>
                  <td class="tg-yw4l">PROYECTOR MULTIMEDIA</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("7","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil2c'>
                             <a href='ContadorAgencia.php?ag=7&zo=3&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">LACTARIO</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("8","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil3c'>
                            <a href='ContadorAgencia.php?ag=8&zo=3&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">FRIO BAR - LACTARIO</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("9","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil4c'>
                            <a href='ContadorAgencia.php?ag=9&zo=3&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">KITCHENET</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("10","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil5c'>
                          <a href='ContadorAgencia.php?ag=10&zo=3&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">FRIO BAR</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("11","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil6c'>
                          <a href='ContadorAgencia.php?ag=11&zo=3&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">HORNO MICROONDAS</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("12","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil7c'>
                          <a href='ContadorAgencia.php?ag=12&zo=3&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">REPOSTERO / ALACENA</td>
                   <?php 
                          $dis = $sel->graficosComparativoNorte("14","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil8c'>
                          <a href='ContadorAgencia.php?ag=14&zo=3&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr>
                  <td class="tg-yw4l">MESA / COMEDOR</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("15","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil9c'>
                          <a href='ContadorAgencia.php?ag=15&zo=3&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                <tr style="display: none;">
                  <td class="tg-yw4l">NO CUENTA CON DISPENSADOR</td>
                  <?php 
                          $dis = $sel->graficosComparativoNorte("6","3","SI",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='fil10c'>
                         <a href='ContadorAgencia.php?ag=6&zo=3&ro=".$rondx."' target='_blank' title='VER'>".$fnum."</a></td>";
                          
                  ?>
                </tr>
                
                 
              </table>   
              </center>

            </div>

          </div>


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
              

               <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 285px;">COMPONENTES</th>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH VARONES</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("1","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce1'>
                          <a href='ContadorAgenciaServicios.php?ag=1&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH MUJERES</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("2","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce2'>
                          <a href='ContadorAgenciaServicios.php?ag=2&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH DISCAPACITADOS</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("3","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce3'>
                          <a href='ContadorAgenciaServicios.php?ag=3&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SSHH MIXTO</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("4","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce4'>
                          <a href='ContadorAgenciaServicios.php?ag=4&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDEROS SSHH VARONES</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("5","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce5'>
                          <a href='ContadorAgenciaServicios.php?ag=5&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH MUJERES</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("6","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce6'>
                          <a href='ContadorAgenciaServicios.php?ag=6&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH DISCAPACITADOS</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("7","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce7'>
                          <a href='ContadorAgenciaServicios.php?ag=7&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO SSHH MIXTO</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("8","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce8'>
                          <a href='ContadorAgenciaServicios.php?ag=8&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">SUMIDERO RACK</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("9","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce9'>
                          <a href='ContadorAgenciaServicios.php?ag=9&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                <tr>
                  <td class="tg-yw4l">CUENTA SOLO CON SSHH MIXTO</td>
                 
                  	 <?php 
                          $dis = $sel->graficosServiciosExtra("10","3","NO",$rondx);
                          $fnum = mysqli_num_rows($dis); 
                          echo "<td class='tg-yw4l' style='color:black;text-align: center;' id='filserce10'>
                          <a href='ContadorAgenciaServicios.php?ag=10&zo=3&ro=".$rondx."' target='_blank' title='VER' >".$fnum."</a></td>";
                          
                         ?>
                 
                </tr>
                
                 
              </table>               
              </center>
                           
            </div>

          </div>
           <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" id="compa5"></div>
           
            
          </div>
          <div class="col-md-6 col-sm-4 col-xs-12">
          
            <div class="x_panel tile fixed_height_320" id="compa6"></div>
            
          </div>
          
          
            <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                       
              <!--        <iframe src="" style="width: 100%;"></iframe> -->
                       
                      </div>
                      
                    </div>
                  </div>
  
<div id="flotante" style="display:none">
  

	
