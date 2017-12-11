           
<center><h2 style="background-color: white;padding: 14px;font-weight: bolder;">GENERAL</h2></center>
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
                
              <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 285px;text-align: center;">MÍNIMOS AGENCIA</th>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 85px;text-align: center;">PROMEDIO</th>
                </tr>
                <?php 

                        $ni1 = $sel->graficosMax('1.00','4.29',$rondx);
                        while($muemax = $ni1->fetch_assoc()){ 

                  ?>
                         <tr>
                            <td class="tg-yw4l"><?php echo $muemax["agencia"]; ?></td>
                            <td class="tg-yw4l" style="text-align: center;"><?php echo $muemax["totales"]; ?></td>
                         </tr>

                <?php } ?>
              
                 
              </table>   
              </center>

            </div>

          </div>


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
              

               <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 285px;text-align: center;">MÁXIMOS AGENCIA</th>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
               
                <?php 

                        $ni1 = $sel->graficosMax('4.00','4.50',$rondx);
                        while($muemax = $ni1->fetch_assoc()){ 

                  ?>
                         <tr>
                            <td class="tg-yw4l"><?php echo $muemax["agencia"]; ?></td>
                            <td class="tg-yw4l" style="text-align: center;"><?php echo $muemax["totales"]; ?></td>
                         </tr>

                <?php } ?>
                
                 
              </table>               
              </center>
                           
            </div>

          </div>
           
         
                          
        <!--    SEGUNDO CUADROOOO-->
<br><br>
           
<center><h2 style="background-color: white;padding: 14px;font-weight: bolder;">NORTE ORIENTE</h2></center>
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
                
              <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 285px;text-align: center;">MÍNIMOS AGENCIA</th>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 85px;text-align: center;">PROMEDIO</th>
                </tr>
                <?php 

                        $ni1 = $sel->graficosMaxPar('1','1.00','4.29',$rondx);
                        while($muemax = $ni1->fetch_assoc()){ 

                  ?>
                         <tr>
                            <td class="tg-yw4l"><?php echo $muemax["agencia"]; ?></td>
                            <td class="tg-yw4l" style="text-align: center;"><?php echo $muemax["totales"]; ?></td>
                         </tr>

                <?php } ?>
              
                 
              </table>   
              </center>

            </div>

          </div>


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
              

               <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 285px;text-align: center;">MÁXIMOS AGENCIA</th>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
               
                <?php 

                        $ni1 = $sel->graficosMaxPar('1','4.00','4.50',$rondx);
                        while($muemax = $ni1->fetch_assoc()){ 

                  ?>
                         <tr>
                            <td class="tg-yw4l"><?php echo $muemax["agencia"]; ?></td>
                            <td class="tg-yw4l" style="text-align: center;"><?php echo $muemax["totales"]; ?></td>
                         </tr>

                <?php } ?>
                
                 
              </table>               
              </center>
                           
            </div>

          </div>
                          
        <!--    SEGUNDO CUADROOOO-->
<br><br>
<center><h2 style="background-color: white;padding: 14px;font-weight: bolder;">LIMA</h2></center>
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
                
              <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 285px;text-align: center;">MÍNIMOS AGENCIA</th>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 85px;text-align: center;">PROMEDIO</th>
                </tr>
                <?php 

                        $ni1 = $sel->graficosMaxPar('2','1.00','4.29',$rondx);
                        while($muemax = $ni1->fetch_assoc()){ 

                  ?>
                         <tr>
                            <td class="tg-yw4l"><?php echo $muemax["agencia"]; ?></td>
                            <td class="tg-yw4l" style="text-align: center;"><?php echo $muemax["totales"]; ?></td>
                         </tr>

                <?php } ?>
              
                 
              </table>   
              </center>

            </div>

          </div>


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
              

               <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 285px;text-align: center;">MÁXIMOS AGENCIA</th>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
               
                <?php 

                        $ni1 = $sel->graficosMaxPar('2','4.00','4.50',$rondx);
                        while($muemax = $ni1->fetch_assoc()){ 

                  ?>
                         <tr>
                            <td class="tg-yw4l"><?php echo $muemax["agencia"]; ?></td>
                            <td class="tg-yw4l" style="text-align: center;"><?php echo $muemax["totales"]; ?></td>
                         </tr>

                <?php } ?>
                
                 
              </table>               
              </center>
                           
            </div>

          </div>
<!--  TERCERO COMERNT -->
<br><br>
            <center><h2 style="background-color: white;padding: 14px;font-weight: bolder;">CENTRO SUR</h2></center>
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
                
              <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 285px;text-align: center;">MÍNIMOS AGENCIA</th>
                  <th class="tg-yw4l" style="background-color: #305496;color: white;width: 85px;text-align: center;">PROMEDIO</th>
                </tr>
                <?php 

                        $ni1 = $sel->graficosMaxPar('3','1.00','4.29',$rondx);
                        while($muemax = $ni1->fetch_assoc()){ 

                  ?>
                         <tr>
                            <td class="tg-yw4l"><?php echo $muemax["agencia"]; ?></td>
                            <td class="tg-yw4l" style="text-align: center;"><?php echo $muemax["totales"]; ?></td>
                         </tr>

                <?php } ?>
              
                 
              </table>   
              </center>

            </div>

          </div>


          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320" >
              <center>
              

               <table class="tg" border="1" style="font-weight: bold;color: black;">
                <tr>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 285px;text-align: center;">MÁXIMOS AGENCIA</th>
                  <th class="tg-yw4l" style="background-color: #26b99a;color: white;width: 85px;text-align: center;">CANTIDAD</th>
                </tr>
               
                <?php 

                        $ni1 = $sel->graficosMaxPar('3','4.59','4.89',$rondx);
                        while($muemax = $ni1->fetch_assoc()){ 

                  ?>
                         <tr>
                            <td class="tg-yw4l"><?php echo $muemax["agencia"]; ?></td>
                            <td class="tg-yw4l" style="text-align: center;"><?php echo $muemax["totales"]; ?></td>
                         </tr>

                <?php } ?>
                
                 
              </table>               
              </center>
                           
            </div>

          </div>
          
          
            <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                       
              <!--        <iframe src="" style="width: 100%;"></iframe> -->
                       
                      </div>
                      
                    </div>
                  </div>
  
<div id="flotante" style="display:none"></div>
  

	
