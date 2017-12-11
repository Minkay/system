<?php 

require './Controlador/conexion.php';
header('Content-Type: text/html; charset=utf-8');
error_reporting(0);

class Observaciones{

				function consultaAgencia($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT I.id_inicio AS inicio, U.user, I.id_cod AS code, R.region AS re, A.agencia AS age, I.fecha AS fe, Z.zona, 				I.direccion, I.gerencia, I.jefe_banca, I.personal
						FROM inicio AS I
						INNER JOIN usuarios AS U ON I.usuario = U.id
						INNER JOIN region AS R ON I.region = R.id_region
						INNER JOIN agencia AS A ON I.agencia = A.id_age
						INNER JOIN zona AS Z ON I.zona = Z.id_zona
						WHERE I.id_cod =  '$code' LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function ObservacionLogistica($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_logistica WHERE code='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function ObservacionServicios($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_servicios WHERE code='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function ObservacionExterna($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_ext WHERE code='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			
			function ObservacionTecho($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_techo WHERE code='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function ObservacionInterna($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_int WHERE code='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			
			function ObservacionMobiliario($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_mobiliario WHERE code='$id' AND declara='SI'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


			function ObservacionEquipo($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_equipo WHERE code='$id' AND declara='SI'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
			
				

            function EstadoAgen($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT estado FROM inicio WHERE id_cod='$code'";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


			

}


?>