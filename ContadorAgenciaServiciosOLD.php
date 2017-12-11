 <?php

error_reporting(0);
session_start();

if ($_SESSION['loggedin'] == false) {
  
  echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
  exit;
} 


require 'Modelo/procesos.php';

$sel =new Procesos();
$ag= $_GET['ag'];
$zo= $_GET['zo'];
$ro= $_GET['ro'];
?>
<body style="background-color: white;">
  <?php include 'Vistas/head.php';  ?>
<center>
    <div class="col-md-6 col-md-offset-3"><br><br>
                         <table class="table" border="1" style="width: 100%;">
                          <thead class="thead-inverse" style="background-color: #305496;color: white;">
                            <tr>
                              
                              <th>ZONA</th>
                              <th>REGION</th>
                              <th>AGENCIA</th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php 
                              $dis = $sel->graficosServiciosExtra($ag,$zo,"NO",$ro);
                               while($mue = $dis->fetch_assoc()){ 
                                echo "<tr>";
                                echo "<td>".$mue["zona"]."</td>";
                                echo "<td>".$mue["region"]."</td>";
                                echo "<td>".$mue["agencia"]."</td>";
                                echo "</tr>";
                               }
                             
                              
                         ?>
                            
                            
                        
                            
                          </tbody>
                        </table>

</div>


 
</body>
