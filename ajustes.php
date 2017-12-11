 <?php 


error_reporting(0);
session_start();


if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 
require 'Modelo/procesos.php';
$sel =new Procesos();


/*

         $ni = $sel->PuntajeExterna(); 
            while($mue = $ni->fetch_assoc()){ 
                    $luba =$mue["id_inext"];
                    $tt1 = $mue["to1"];
                    $tt2 = $mue["to2"];
                    $tt3 = $mue["to3"];
                    $tt4 = $mue["to4"];

            $kio = $tt1 ."-".$tt2."-".$tt3."-".$tt4;           
            $jin = substr_count($kio, 'SI');
            $po="";
            if($jin=='4'){
                $po="5";
            }else if ($jin=='3') {
              $po="4";
            }else if ($jin=='2') {
              $po="3";
            }else if ($jin=='1') {
              $po="2";
            }else {
              $po="1";
            }

            $ni2 = $sel->ActPuntajeExterna($luba,$po);

            }

            


            $ni = $sel->PuntajeLogistica(); 
            while($mue = $ni->fetch_assoc()){ 
                    $luba =$mue["id_reg"];
                    $tt1 = $mue["to1"];
                    $tt2 = $mue["to2"];
                    $tt3 = $mue["to3"];
                    $tt4 = $mue["to4"];

            $kio = $tt1 ."-".$tt2."-".$tt3."-".$tt4;           
            $jin = substr_count($kio, 'SI');
            $po="";
            if($jin=='4'){
                $po="5";
            }else if ($jin=='3') {
              $po="4";
            }else if ($jin=='2') {
              $po="3";
            }else if ($jin=='1') {
              $po="2";
            }else {
              $po="1";
            }

            $ni2 = $sel->ActPuntajeLogistica($luba,$po);

            }

*/
            $ni = $sel->PuntajeServicios(); 
            while($mue = $ni->fetch_assoc()){ 
                    $luba =$mue["id_ser"];
                    $tt1 = $mue["to1"];
                    $tt2 = $mue["to2"];
                    $tt3 = $mue["to3"];
                    $tt4 = $mue["to4"];
                    $tt5 = $mue["declara"];
                    
            if($tt5=="NO"){
                    $ni2 = $sel->ActPuntajeServicios($luba,"");
            }else{
            
                $kio = $tt1 ."-".$tt2."-".$tt3."-".$tt4;           
                $jin = substr_count($kio, 'SI');
                $po="";
                if($jin=='4'){
                    $po="5";
                }else if ($jin=='3') {
                  $po="4";
                }else if ($jin=='2') {
                  $po="3";
                }else if ($jin=='1') {
                  $po="2";
                }else {
                  $po="1";
                }
                
                $ni2 = $sel->ActPuntajeServicios($luba,$po);
            }
                    
           

            }
            
            /*




             $ni = $sel->PuntajeTecho(); 
            while($mue = $ni->fetch_assoc()){ 
                    $luba =$mue["id_te"];
                    $tt1 = $mue["to1"];
                    $tt2 = $mue["to2"];
                    $tt3 = $mue["to3"];
                    $tt4 = $mue["to4"];

            $kio = $tt1 ."-".$tt2."-".$tt3."-".$tt4;           
            $jin = substr_count($kio, 'SI');
            $po="";
            if($jin=='4'){
                $po="5";
            }else if ($jin=='3') {
              $po="4";
            }else if ($jin=='2') {
              $po="3";
            }else if ($jin=='1') {
              $po="2";
            }else {
              $po="1";
            }

            $ni2 = $sel->ActPuntajeTecho($luba,$po);

            }


   $nim = $sel->PuntajeInternapt(); 
            while($mue = $nim->fetch_assoc()){ 
                    $luba =$mue["id_inter"];
                    $tt1 = $mue["to1"];
                    $tt2 = $mue["to2"];
                    $tt3 = $mue["to3"];
                    $tt4 = $mue["to4"];

            $kio = $tt1 ."-".$tt2."-".$tt3."-".$tt4;           
            $jin = substr_count($kio, 'SI');
            $po="";
            if($jin=='4'){
                $po="5";
            }else if ($jin=='3') {
              $po="4";
            }else if ($jin=='2') {
              $po="3";
            }else if ($jin=='1') {
              $po="2";
            }else {
              $po="2";
            }

            $ni2m = $sel->ActPuntajeInternapt($luba,$po);

            }

            $nim = $sel->PuntajeMobiliariopt(); 
            while($mue = $nim->fetch_assoc()){ 
                    $luba =$mue["id_mob"];
                    $tt1 = $mue["to1"];
                    $tt2 = $mue["to2"];
                    $tt3 = $mue["to3"];
                    $tt4 = $mue["to4"];

            $kio = $tt1 ."-".$tt2."-".$tt3."-".$tt4;           
            $jin = substr_count($kio, 'SI');
            $po="";
            if($jin=='4'){
                $po="5";
            }else if ($jin=='3') {
              $po="4";
            }else if ($jin=='2') {
              $po="3";
            }else if ($jin=='1') {
              $po="2";
            }else {
              $po="1";
            }

            $ni2m = $sel->ActPuntajeMobiliariopt($luba,$po);

            }


              $nim = $sel->PuntajeEquipopt(); 
            while($mue = $nim->fetch_assoc()){ 
                    $luba =$mue["id_eq"];
                    $tt1 = $mue["to1"];
                    $tt2 = $mue["to2"];
                    $tt3 = $mue["to3"];
                    $tt4 = $mue["to4"];

            $kio = $tt1 ."-".$tt2."-".$tt3."-".$tt4;           
            $jin = substr_count($kio, 'SI');
            $po="";
            if($jin=='4'){
                $po="5";
            }else if ($jin=='3') {
              $po="4";
            }else if ($jin=='2') {
              $po="3";
            }else if ($jin=='1') {
              $po="2";
            }else {
              $po="1";
            }

            $ni2m = $sel->ActPuntajeEquipopt($luba,$po);

            }


             $nim = $sel->BuscarDuplicados(); 
             while($mue = $nim->fetch_assoc()){ 

                  $du =$mue["id_cod"];
                  $ni2m = $sel->FiltrarDuplicados($du);
                     while($mueli = $ni2m->fetch_assoc()){
                                $idre = $mueli["id_reg"];
                               // echo $idre;
                                $eli = $sel->EliminarDuplicados($idre);
                     }
                  
            }

              echo "TERMINO EL RECORRIDO";
              
              
              $nim = $sel->BuscarDuplicados(); 
             while($mue = $nim->fetch_assoc()){ 

                  $du =$mue["id_cod"];
                  $ni2m = $sel->FiltrarDuplicadosSer($du);
                     while($mueli = $ni2m->fetch_assoc()){
                                $idre = $mueli["id_ser"];
                               // echo $idre;
                                $eli = $sel->EliminarDuplicadosSer($idre);
                     }
                  
            }

              echo "TERMINO EL RECORRIDO";
             
              
               $nim = $sel->BuscarDuplicados(); 
             while($mue = $nim->fetch_assoc()){ 

                  $du =$mue["id_cod"];
                  $ni2m = $sel->FiltrarDuplicadosExt($du);
                     while($mueli = $ni2m->fetch_assoc()){
                                $idre = $mueli["id_inext"];
                               // echo $idre;
                                $eli = $sel->EliminarDuplicadosExt($idre);
                     }
                  
            }

              echo "TERMINO EL RECORRIDO";
              
              
             $nim = $sel->BuscarDuplicados(); 
             while($mue = $nim->fetch_assoc()){ 

                  $du =$mue["id_cod"];
                  $ni2m = $sel->FiltrarDuplicadosTecho($du);
                     while($mueli = $ni2m->fetch_assoc()){
                                $idre = $mueli["id_te"];
                               // echo $idre;
                                $eli = $sel->EliminarDuplicadosTecho($idre);
                     }
                  
            }

              echo "TERMINO EL RECORRIDO";
              
              
           
              
             $nim = $sel->BuscarDuplicados(); 
             while($mue = $nim->fetch_assoc()){ 

                  $du =$mue["id_cod"];
                  $ni2m = $sel->FiltrarDuplicadosMo($du);
                     while($mueli = $ni2m->fetch_assoc()){
                                $idre = $mueli["id_mob"];
                               // echo $idre;
                                $eli = $sel->EliminarDuplicadosMo($idre);
                     }
                  
            }

              echo "TERMINO EL RECORRIDO";
            
              
               $nim = $sel->BuscarDuplicados(); 
             while($mue = $nim->fetch_assoc()){ 

                  $du =$mue["id_cod"];
                  $ni2m = $sel->FiltrarDuplicadosEq($du);
                     while($mueli = $ni2m->fetch_assoc()){
                                $idre = $mueli["id_eq"];
                               // echo $idre;
                                $eli = $sel->EliminarDuplicadosEq($idre);
                     }
                  
            }

              echo "TERMINO EL RECORRIDO";
              
              */
              


           ?>

          
    
      
