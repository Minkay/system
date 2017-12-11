 <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">AREA DE CAJA VENTANILLAS</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('1',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('1',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('1',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                              <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">AREA DE ESPERA</h1>  <br>
                                                             <tr>
                                                             <?php 
                                        $ser = $sel->internaSelect('2',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('2',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('2',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                 <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">AREA DE PLATAFORMA/OPERACIONES</h1>  <br>
                                                             <tr>
                                                             <?php 
                                        $ser = $sel->internaSelect('3',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('3',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('3',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">AREA DE ASESORES DE NEGOCIOS</h1>  <br>
                                                             <tr>
                                                             <?php 
                                        $ser = $sel->internaSelect('4',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('4',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('4',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">SALA DE REUNIONES</h1>  <br>
                                                             <tr>
                                                             <?php 
                                        $ser = $sel->internaSelect('5',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('5',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('5',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">AREA DE RACK</h1>  <br>
                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('6',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('6',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('6',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                             <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">ARCHIVO</h1>  <br>
                                                             <tr>
                                                             <?php 
                                        $ser = $sel->internaSelect('7',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('7',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('7',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">ECONOMATO</h1>  <br>
                                                             <tr>
                                                             <?php 
                                        $ser = $sel->internaSelect('8',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('8',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('8',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>

                                                 <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">KITCHEN</h1>  <br>
                                                             <tr>
                                                             <?php 
                                        $ser = $sel->internaSelect('9',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('9',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('9',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                 <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">LACTARIO</h1>  <br>
                                                             <tr>
                                                           <?php 
                                        $ser = $sel->internaSelect('10',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('10',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('10',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                   <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">ESCALERAS / PASADIZOS</h1>  <br>
                                                             <tr>
                                                             <?php 
                                        $ser = $sel->internaSelect('11',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('11',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('11',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>

                                                  <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;text-align: center;">COMPONENTES</th>
                                                                <th style="width: 50%;text-align: center;">CRITERIOS</th>
                                                                <th style="width: 50%;text-align: center;">ESTADO</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                      <h1 style="font-size: 18px;text-align: center;font-weight: bolder;">SERVICIOS HIGIÉNICOS</h1>  <br>
                                                             <tr>
                                                             <?php 
                                        $ser = $sel->internaSelect('12',"Pared / Piso / Techo / Iluminacion",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">Pared / Piso / Techo / Iluminacion</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                  echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones
                                                  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                  echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos / Sin perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales / sin óxido</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis / sin polvo.</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

 <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('12',"Paredes",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PAREDES</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras / Sin desprendimientos</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin presencia de humedad / sales  </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza: Sin manchas/ Sin grafitis</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('12',"Piso",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">PISO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin fisuras el recubrimiento (cerámica/porcelanato)</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Sin desprendimientos/ perforaciones</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación de la pintura</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Limpieza</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                        $ser = $sel->internaSelect('12',"Aparatos sanitarios",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                         <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">APARATOS SANITARIOS</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Aparatos sanitarios completos: tiene todos sus accesorios</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Aparatos sanitarios completos: tiene todos sus accesorios</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Dimensionamiento y Uso es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Dimensionamiento y Uso es el adecuado</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con disp ahorradores instalados: caños agua, urinarios</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con disp ahorradores instalados: caños agua, urinarios</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>

                                                             <tr>
                                                              <?php 
                                  $ser = $sel->internaSelect('12',"Equipamiento/Accesoerios de baño",$cod); while($mue = $ser->fetch_assoc()){                           
                                           
                                      ?>
                                                <th scope="row" rowspan="4" style="vertical-align: inherit;text-align: center;">EQUIPAMIENTO/ ACCESORIOS DE BAÑO</th>
                                                           <?php  
                                                            $pt1 =  $mue["puntaje"];
                                                              echo "<input  type='hidden' value='$pt1' id='p1' />";
                                                              if($mue["to1"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con equipam min: espejo / basureros </td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con equipam min: espejo / basureros </td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>                                                              
                                                               
                                                            </tr>
                                                            <tr>
                                                              
                                                             <?php  
                                                              if($mue["to2"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Cuenta con disp. Jabón / disp. Papel / papel toalla</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Cuenta con disp. Jabón / disp. Papel / papel toalla</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                            </tr>
                                                            <tr>
                                                                
                                                                <?php  
                                                              if($mue["to3"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Buen estado de conservación</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
          
                                    ?>   
                                                                
                                                            </tr>
                                                             <tr>
                                                                
                                                                <?php  
                                                              if($mue["to4"]=="NO"){
                                                              echo "<td style='background-color: red;color: white;'>Instalados adecuadamente</td>";
                                                  echo "<td style='text-align: center;background-color: red;color: white;'>NO</td>";
                                                                
                                                              } else{
                                                               echo "<td style='background-color: #009688;color: white;'>Instalados adecuadamente</td>";
                                                  echo "<td style='text-align: center;background-color: #009688;color: white;'>SI</td>";
                                                              };
                      }
                                    ?>   
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>