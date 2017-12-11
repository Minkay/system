<?php 

require './Controlador/conexion.php';
header('Content-Type: text/html; charset=utf-8');
error_reporting(0);

class Procesos{
				
				function consultaAgencia($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

			$sql = "SELECT I.id_inicio AS inicio, U.user, I.id_cod AS code, R.region AS re, A.agencia AS age, I.fecha AS fe, Z.zona, I.direccion, I.gerencia, I.jefe_banca, I.personal, G.totales
FROM inicio AS I
INNER JOIN usuarios AS U ON I.usuario = U.id
INNER JOIN region AS R ON I.region = R.id_region
INNER JOIN agencia AS A ON I.agencia = A.id_age
INNER JOIN zona AS Z ON I.zona = Z.id_zona
INNER JOIN registrototales AS G ON G.code = I.id_cod
WHERE I.id_cod =  '$code' LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			
				function logisticaSelect($id,$code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_logistica WHERE logi='$id' and code='$code' AND declara ='SI' ORDER BY id_reg DESC LIMIT 1";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function maPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_mantenimiento WHERE code='$code' ORDER BY id_reg DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function logisticPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT * from registro_logistica WHERE code='$code' ORDER BY id_reg ASC limit 4 ";
					//	$sql = "SELECT DISTINCT logi from registro_logistica WHERE code='$code' AND declara ='SI' ORDER BY id_reg DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
					function servicioPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_servicios WHERE code='$code' ORDER BY id_ser DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function externPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_ext WHERE code='$code' ORDER BY id_inext DESC";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

                	function techPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_techo WHERE code='$code' ORDER BY id_te DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				
					function internPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_int WHERE code='$code' ORDER BY id_inter DESC";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				 function mobiliariPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_mobiliario WHERE code='$code' ORDER BY id_mob DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

                	function equipPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_equipo WHERE code='$code'  ORDER BY id_eq DESC";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
                
                	function UpdateChk($cod,$chk){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE inicio SET estado_chk='$chk' WHERE id_cod ='$cod'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);
							
			}
				
				function logisticaPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT * from registro_logistica WHERE code='$code' AND declara ='SI' ORDER BY id_reg ASC limit 4 ";
					//	$sql = "SELECT DISTINCT logi from registro_logistica WHERE code='$code' AND declara ='SI' ORDER BY id_reg DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

			function manSelect($id,$code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_mantenimiento WHERE doc='$id' and code='$code' AND declara ='SI' ORDER BY id_reg DESC LIMIT 1";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function manPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_mantenimiento WHERE code='$code' AND declara ='SI' ORDER BY id_reg DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function serviciosSelect($id,$code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_servicios WHERE ser='$id' and code='$code' AND declara ='SI' ORDER BY id_ser DESC LIMIT 1";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function serviciosPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_servicios WHERE code='$code' AND declara ='SI' ORDER BY id_ser DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function externaSelect($id,$code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_ext WHERE infra_ext='$id' and code='$code' AND declara ='SI' ORDER BY id_inext DESC LIMIT 1";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function externaPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_ext WHERE code='$code' AND declara='SI' ORDER BY id_inext DESC";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function techoSelect($id,$code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_techo WHERE techo='$id' and code='$code' AND declara ='SI' ORDER BY id_te DESC LIMIT 1";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function techoPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_techo WHERE code='$code' AND declara='SI' ORDER BY id_te DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}



				function internaSelect($id,$varia,$code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_int WHERE infra_int='$id' AND variable = '$varia' and code='$code' AND declara ='SI' ORDER BY id_inter DESC LIMIT 1  ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}



				function internaSelectDetalle($id,$code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_int WHERE infra_int='$id' and code='$code' AND declara ='SI' ORDER BY id_inter DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function internaPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_int WHERE code='$code' AND declara ='SI' ORDER BY id_inter DESC";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function mobiliarioSelect($id,$code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_mobiliario WHERE mobi='$id' and code='$code' AND declara ='SI' ORDER BY id_mob DESC LIMIT 1";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function mobiliarioPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_mobiliario WHERE code='$code' AND declara='SI' ORDER BY id_mob DESC ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function equipoSelect($id,$code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_equipo WHERE eq='$id' and code='$code' AND declara ='SI' ORDER BY id_eq DESC LIMIT 1";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function equipoPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_equipo WHERE code='$code' AND declara ='SI' ORDER BY id_eq DESC";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
			

			function insertTotales($cod,$ronda,$idzona,$r1, $r2 ,$r3, $r4, $r5, $r6,$r7,$r8,$ResulAgencia){

			$db = new Conectar();
			$conn = $db->conexion();		

			if ($conn->connect_errno) {
			    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
			    exit();

			}else{
					$sql = "SELECT * from registrototales WHERE code='$cod' ";
					$run_user = mysqli_query($conn, $sql);
					$check_user = mysqli_num_rows($run_user);

					if($check_user == 1 ){
			$sql1 = "UPDATE registrototales SET zona='".$idzona."',ronda='".$ronda."',mant='".$r1."',log='".$r2."',serv='".$r3."',ext='".$r4."',
						techo='".$r5."',interna='".$r6."',mob='".$r7."',equipo='".$r8."',totales='".$ResulAgencia."' WHERE code='".$cod."' ";
						$result = $conn->query($sql1);	
					}else{
						$sql1 = "INSERT registrototales(code,ronda,zona,mant,log,serv,ext,techo,interna,mob,equipo,totales)
						values('".$cod."','".$ronda."','".$idzona."','".$r1."','".$r2."','".$r3."','".$r4."','".$r5."','".$r6."','".$r7."','".$r8."','".$ResulAgencia."')";
						$result = $conn->query($sql1);
					}

							
			}

						return $result;$close = mysqli_close($conn);

				}


				function graficosMuestra($desde,$hasta,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * FROM registrototales WHERE totales BETWEEN '$desde' AND '$hasta' AND ronda='$ron'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function graficosMuestraPara($code,$desde,$hasta,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * FROM registrototales WHERE zona='$code' AND totales BETWEEN '$desde' AND '$hasta' AND ronda='$ron'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function graficosComponentes($zona,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * FROM registrototales WHERE zona='$zona' AND ronda='$ron'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				function graficosComponentesGlobal($ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * FROM registrototales where ronda='$ron'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function graficosComparativoNorte($ser,$zona,$de,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona,E.region,G.agencia FROM  
								`registro_servicios`  AS R
								INNER JOIN inicio AS A ON R.code=A.id_cod
								INNER JOIN zona AS Z ON A.zona =Z.id_zona
								INNER JOIN region AS E ON A.region =E.id_region
								INNER JOIN agencia AS G ON A.agencia =G.id_age
								WHERE A.ronda =  '$ron'
                                AND R.ser = '$ser'  AND A.zona='$zona' AND declara='$de' GROUP BY code";
                                
                             
                                
                                
                                
						        $result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function graficosComparativoTe($ser,$de,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona,E.region,G.agencia FROM  
								`registro_servicios`  AS R
								INNER JOIN inicio AS A ON R.code=A.id_cod
								INNER JOIN zona AS Z ON A.zona =Z.id_zona
								INNER JOIN region AS E ON A.region =E.id_region
								INNER JOIN agencia AS G ON A.agencia =G.id_age
								WHERE A.ronda =  '$ron'
                                AND R.ser = '$ser' AND declara='$de' GROUP BY code";
                                
                             
                                
                                
                                
						        $result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function graficosMax($desde,$hasta,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona, E.region, G.agencia, R.totales
								FROM  `registrototales` AS R
								INNER JOIN inicio AS A ON R.code = A.id_cod
								INNER JOIN zona AS Z ON A.zona = Z.id_zona
								INNER JOIN region AS E ON A.region = E.id_region
								INNER JOIN agencia AS G ON A.agencia = G.id_age
								WHERE A.ronda =  '$ron'
								AND R.totales
								BETWEEN  '$desde'
								AND  '$hasta'
								LIMIT 10";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function graficosMaxPar($zona,$desde,$hasta,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona, E.region, G.agencia, R.totales
								FROM  `registrototales` AS R
								INNER JOIN inicio AS A ON R.code = A.id_cod
								INNER JOIN zona AS Z ON A.zona = Z.id_zona
								INNER JOIN region AS E ON A.region = E.id_region
								INNER JOIN agencia AS G ON A.agencia = G.id_age
								WHERE A.ronda =  '$ron'
								AND R.zona =  '$zona'
								AND R.totales
								BETWEEN  '$desde'
								AND  '$hasta'
								LIMIT 10";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}





				function graficosComparativoGeneral($ser,$de,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona,E.region,G.agencia FROM  
								`registro_servicios`  AS R
								INNER JOIN inicio AS A ON R.code=A.id_cod
								INNER JOIN zona AS Z ON A.zona =Z.id_zona
								INNER JOIN region AS E ON A.region =E.id_region
								INNER JOIN agencia AS G ON A.agencia =G.id_age
								WHERE A.ronda =  '$ron'
								AND R.ser =   '$ser'  AND declara='$de' GROUP BY code";
						        $result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function graficosComparativoGe($de,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona,E.region,G.agencia FROM  
								`registro_servicios`  AS R
								INNER JOIN inicio AS A ON R.code=A.id_cod
								INNER JOIN zona AS Z ON A.zona =Z.id_zona
								INNER JOIN region AS E ON A.region =E.id_region
								INNER JOIN agencia AS G ON A.agencia =G.id_age
								WHERE A.ronda =  '$ron'
								AND declara='$de' GROUP BY code";
						        $result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			
			
			function graficosServiciosExtra($ser,$zona,$de,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona,E.region,G.agencia FROM  
								`registro_extras`  AS R
								INNER JOIN inicio AS A ON R.code=A.id_cod
								INNER JOIN zona AS Z ON A.zona =Z.id_zona
								INNER JOIN region AS E ON A.region =E.id_region
								INNER JOIN agencia AS G ON A.agencia =G.id_age
								WHERE A.ronda =  '$ron'
                                AND R.doc ='$ser'  AND A.zona='$zona' AND R.to1='$de' GROUP BY code";
						        $result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
					function graficosServiExt($ser,$de,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona,E.region,G.agencia FROM  
								`registro_extras`  AS R
								INNER JOIN inicio AS A ON R.code=A.id_cod
								INNER JOIN zona AS Z ON A.zona =Z.id_zona
								INNER JOIN region AS E ON A.region =E.id_region
								INNER JOIN agencia AS G ON A.agencia =G.id_age
								WHERE A.ronda =  '$ron'
AND R.doc ='$ser' AND R.to1='$de' GROUP BY code";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			

			function graficosServiciosGeneral($ser,$de,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona,E.region,G.agencia FROM  
								`registro_extras`  AS R
								INNER JOIN inicio AS A ON R.code=A.id_cod
								INNER JOIN zona AS Z ON A.zona =Z.id_zona
								INNER JOIN region AS E ON A.region =E.id_region
								INNER JOIN agencia AS G ON A.agencia =G.id_age
								WHERE A.ronda =  '$ron'
AND R.doc ='$ser' AND R.to1='$de' GROUP BY code";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			
			
			function PuntajeExterna(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_inext,infra_ext,code,to1,to2,to3,to4 from registro_infra_ext";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function ActPuntajeExterna($cod,$pjte){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_infra_ext SET puntaje='$pjte' WHERE id_inext='$cod'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function PuntajeLogistica(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_reg,to1,to2,to3,to4 from registro_logistica ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function ActPuntajeLogistica($cod,$pjte){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_logistica SET puntaje='$pjte' WHERE id_reg='$cod'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			
			function PuntajeServicios(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_ser,to1,to2,to3,to4 from registro_servicios";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function ActPuntajeServicios($cod,$pjte){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_servicios SET puntaje='$pjte' WHERE id_ser='$cod'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function PuntajeTecho(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_te,to1,to2,to3,to4 from registro_techo";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function ActPuntajeTecho($cod,$pjte){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_techo SET puntaje='$pjte' WHERE id_te='$cod'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				} 
				
				
				function PuntajeInternapt(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_inter,to1,to2,to3,to4 from registro_infra_int";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function ActPuntajeInternapt($cod,$pjte){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_infra_int SET puntaje='$pjte' WHERE id_inter='$cod'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}



			function PuntajeMobiliariopt(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_mob,to1,to2,to3,to4 from registro_mobiliario";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function ActPuntajeMobiliariopt($cod,$pjte){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_mobiliario SET puntaje='$pjte' WHERE id_mob='$cod'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}



				function PuntajeEquipopt(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_eq,to1,to2,to3,to4 from registro_equipo";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function ActPuntajeEquipopt($cod,$pjte){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_equipo SET puntaje='$pjte' WHERE id_eq='$cod'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			
			function VerPuntaje($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT *  FROM  `registrototales` WHERE code = '$code'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			
		
			function BuscarDuplicados(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT *  FROM inicio";
						$result = $conn->query($sql);				
					}

						return $result;

				}


			function FiltrarDuplicados($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_reg,puntaje,logi, count( logi ) AS count FROM registro_logistica WHERE code='$code' GROUP BY logi HAVING count >1 ORDER BY id_reg DESC";
						$result = $conn->query($sql);				
					}

						return $result;

				}


				function EliminarDuplicados($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "DELETE FROM registro_logistica WHERE id_reg='$id'";
						$result = $conn->query($sql);				
					}

						return $result;

				}
				
				
				function FiltrarDuplicadosSer($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_ser,puntaje,ser, count(ser) AS count FROM registro_servicios WHERE code='$code' GROUP BY ser HAVING count >1 ORDER BY id_ser DESC";
						$result = $conn->query($sql);				
					}

						return $result;

				}


				function EliminarDuplicadosSer($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "DELETE FROM registro_servicios WHERE id_ser='$id'";
						$result = $conn->query($sql);				
					}

						return $result;

				}
	
	
		      function FiltrarDuplicadosExt($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_inext,puntaje,infra_ext, count(infra_ext) AS count FROM registro_infra_ext WHERE code='$code' GROUP BY infra_ext HAVING count >1 ORDER BY id_inext DESC";
						$result = $conn->query($sql);				
					}

						return $result;

				}


				function EliminarDuplicadosExt($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "DELETE FROM registro_infra_ext WHERE id_inext='$id'";
						$result = $conn->query($sql);				
					}

						return $result;

				}
				
				
				  function FiltrarDuplicadosTecho($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_te,puntaje,techo, count(techo) AS count FROM registro_techo WHERE code='$code' GROUP BY techo HAVING count >1 ORDER BY id_te DESC";
						$result = $conn->query($sql);				
					}

						return $result;

				}


				function EliminarDuplicadosTecho($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "DELETE FROM registro_techo WHERE id_te='$id'";
						$result = $conn->query($sql);				
					}

						return $result;

				}
	
	
	            function FiltrarDuplicadosMo($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_mob,puntaje,mobi, count(mobi) AS count FROM registro_mobiliario WHERE code='$code' GROUP BY mobi HAVING count >1 ORDER BY id_mob DESC";
						$result = $conn->query($sql);				
					}

						return $result;

				}


				function EliminarDuplicadosMo($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "DELETE FROM registro_mobiliario WHERE id_mob='$id'";
						$result = $conn->query($sql);				
					}

						return $result;

				}
	
	         function FiltrarDuplicadosEq($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_eq,puntaje,eq, count(eq) AS count FROM registro_equipo WHERE code='$code' GROUP BY eq HAVING count >1 ORDER BY id_eq DESC";
						$result = $conn->query($sql);				
					}

						return $result;

				}


				function EliminarDuplicadosEq($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "DELETE FROM registro_equipo WHERE id_eq='$id'";
						$result = $conn->query($sql);				
					}

						return $result;

				}
			

}


?>