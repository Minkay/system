<?php 

require './Controlador/conexion.php';
header('Content-Type: text/html; charset=utf-8');
error_reporting(0);

class Model{

			   function TotalesFilas($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from inicio WHERE zona='$id' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				
				function mantenimientoPuntaje($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT declara from registro_mantenimiento WHERE code='$id' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
			
				function consulta(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio,I.ronda, U.user, I.id_cod , R.region , A.agencia , I.fecha , Z.zona,T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE I.ronda='9'
					ORDER BY I.id_inicio DESC ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				
				function EquipamientoDetGeneral($ser,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona, E.region, G.agencia, R.declara
								FROM  `registro_servicios` AS R
								INNER JOIN inicio AS A ON R.code = A.id_cod
								INNER JOIN zona AS Z ON A.zona = Z.id_zona
								INNER JOIN region AS E ON A.region = E.id_region
								INNER JOIN agencia AS G ON A.agencia = G.id_age
								WHERE A.ronda =  '$ron'
								AND R.ser =  '$ser'
								GROUP BY code";
						        $result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				
				function EquipamientoDetEx($ex,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("ConexiÃ³n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT Z.zona, E.region, G.agencia
								FROM  `registro_extras` AS R
								INNER JOIN inicio AS A ON R.code = A.id_cod
								INNER JOIN zona AS Z ON A.zona = Z.id_zona
								INNER JOIN region AS E ON A.region = E.id_region
								INNER JOIN agencia AS G ON A.agencia = G.id_age
								WHERE A.ronda =  '$ron'
								AND R.doc =  '$ex'
								GROUP BY code";
						        $result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				function consultaExport($ron,$te){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod,I.estado, R.region, A.agencia, I.fecha, Z.zona,
					T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3,
					IE.to4, IE.puntaje, IE.declara,IE.infra_ext
						FROM inicio AS I
						INNER JOIN usuarios AS U ON I.usuario = U.id
						INNER JOIN region AS R ON I.region = R.id_region
						INNER JOIN agencia AS A ON I.agencia = A.id_age
						INNER JOIN registrototales AS T ON I.id_cod = T.code
						INNER JOIN zona AS Z ON I.zona = Z.id_zona
						INNER JOIN registro_infra_ext AS IE ON I.id_cod = IE.code
						WHERE I.ronda =  '$ron'
						AND IE.infra_ext =  '$te'
						GROUP BY I.id_cod ORDER BY I.id_cod DESC  ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				

				function consultaExportDocMANT($ron,$te){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod, I.estado, R.region, A.agencia, I.fecha, Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3, IE.to4, IE.puntaje, IE.declara
						FROM inicio AS I
						INNER JOIN usuarios AS U ON I.usuario = U.id
						INNER JOIN region AS R ON I.region = R.id_region
						INNER JOIN agencia AS A ON I.agencia = A.id_age
						INNER JOIN registrototales AS T ON I.id_cod = T.code
						INNER JOIN zona AS Z ON I.zona = Z.id_zona
						INNER JOIN registro_mantenimiento AS IE ON I.id_cod = IE.code
						WHERE I.ronda =  '$ron'
						AND IE.doc =  '$te'
						GROUP BY I.id_cod ORDER BY I.id_inicio DESC ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function consultaExportLogi($ron,$te){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod, I.estado, R.region, A.agencia, I.fecha, Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3, IE.to4, IE.puntaje, IE.declara
						FROM inicio AS I
						INNER JOIN usuarios AS U ON I.usuario = U.id
						INNER JOIN region AS R ON I.region = R.id_region
						INNER JOIN agencia AS A ON I.agencia = A.id_age
						INNER JOIN registrototales AS T ON I.id_cod = T.code
						INNER JOIN zona AS Z ON I.zona = Z.id_zona
						INNER JOIN registro_logistica AS IE ON I.id_cod = IE.code
						WHERE I.ronda =  '$ron'
						AND IE.logi =  '$te'
						GROUP BY I.id_cod ORDER BY I.id_inicio DESC ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function consultaExportServi($ron,$te){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod, I.estado, R.region, A.agencia, I.fecha, Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3, IE.to4, IE.puntaje, IE.declara
							FROM inicio AS I
							INNER JOIN usuarios AS U ON I.usuario = U.id
							INNER JOIN region AS R ON I.region = R.id_region
							INNER JOIN agencia AS A ON I.agencia = A.id_age
							INNER JOIN registrototales AS T ON I.id_cod = T.code
							INNER JOIN zona AS Z ON I.zona = Z.id_zona
							INNER JOIN registro_servicios AS IE ON I.id_cod = IE.code
							WHERE I.ronda =  '$ron'
							AND IE.ser =  '$te'
							GROUP BY I.id_cod ORDER BY I.id_inicio DESC  ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				function consultaExrt($ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod,I.estado, R.region, A.agencia, I.fecha, 
					Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales,I.direccion,I.jefe_banca,I.gerencia,I.personal
                    FROM inicio AS I 
                    INNER JOIN usuarios AS U ON I.usuario = U.id 
                    INNER JOIN region AS R ON I.region = R.id_region 
                    INNER JOIN agencia AS A ON I.agencia = A.id_age 
                    INNER JOIN registrototales AS T ON I.id_cod = T.code 
                    INNER JOIN zona AS Z ON I.zona = Z.id_zona 
                    WHERE I.ronda = '$ron' ORDER BY I.id_inicio DESC  ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function consultaExportTecho($ron,$te){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod, I.estado, R.region, A.agencia, I.fecha, Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3, IE.to4, IE.puntaje, IE.declara
							FROM inicio AS I
							INNER JOIN usuarios AS U ON I.usuario = U.id
							INNER JOIN region AS R ON I.region = R.id_region
							INNER JOIN agencia AS A ON I.agencia = A.id_age
							INNER JOIN registrototales AS T ON I.id_cod = T.code
							INNER JOIN zona AS Z ON I.zona = Z.id_zona
							INNER JOIN registro_techo AS IE ON I.id_cod = IE.code
							WHERE I.ronda =  '$ron'
							AND IE.techo =  '$te'
							GROUP BY I.id_cod ORDER BY I.id_inicio DESC  ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function consultaExportMobili($ron,$te){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod, I.estado, R.region, A.agencia, I.fecha, Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3, IE.to4, IE.puntaje, IE.declara
							FROM inicio AS I
							INNER JOIN usuarios AS U ON I.usuario = U.id
							INNER JOIN region AS R ON I.region = R.id_region
							INNER JOIN agencia AS A ON I.agencia = A.id_age
							INNER JOIN registrototales AS T ON I.id_cod = T.code
							INNER JOIN zona AS Z ON I.zona = Z.id_zona
							INNER JOIN registro_mobiliario AS IE ON I.id_cod = IE.code
							WHERE I.ronda =  '$ron'
							AND IE.mobi =  '$te'
							GROUP BY I.id_cod ORDER BY I.id_inicio DESC  ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function consultaExportEquipo($ron,$te){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod, I.estado, R.region, A.agencia, I.fecha, Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3, IE.to4, IE.puntaje, IE.declara
							FROM inicio AS I
							INNER JOIN usuarios AS U ON I.usuario = U.id
							INNER JOIN region AS R ON I.region = R.id_region
							INNER JOIN agencia AS A ON I.agencia = A.id_age
							INNER JOIN registrototales AS T ON I.id_cod = T.code
							INNER JOIN zona AS Z ON I.zona = Z.id_zona
							INNER JOIN registro_equipo AS IE ON I.id_cod = IE.code
							WHERE I.ronda =  '$ron'
							AND IE.eq =  '$te'
							GROUP BY I.id_cod ORDER BY I.id_inicio DESC  ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
					function consultaExportInterna($ron,$te,$variable){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod, I.estado, R.region, A.agencia, I.fecha, Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3, IE.to4, IE.puntaje, IE.declara
						FROM inicio AS I
						INNER JOIN usuarios AS U ON I.usuario = U.id
						INNER JOIN region AS R ON I.region = R.id_region
						INNER JOIN agencia AS A ON I.agencia = A.id_age
						INNER JOIN registrototales AS T ON I.id_cod = T.code
						INNER JOIN zona AS Z ON I.zona = Z.id_zona
						INNER JOIN registro_infra_int AS IE ON I.id_cod = IE.code
						WHERE I.ronda =  '$ron'
						AND IE.infra_int =  '$te'
						AND IE.variable =  '$variable'  
						GROUP BY I.id_cod ORDER BY I.id_inicio DESC";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function consultaExportInternaG($ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.id_inicio, I.ronda, U.user, I.id_cod, I.estado, R.region, A.agencia, I.fecha, Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3, IE.to4, IE.puntaje, IE.declara
						FROM inicio AS I
						INNER JOIN usuarios AS U ON I.usuario = U.id
						INNER JOIN region AS R ON I.region = R.id_region
						INNER JOIN agencia AS A ON I.agencia = A.id_age
						INNER JOIN registrototales AS T ON I.id_cod = T.code
						INNER JOIN zona AS Z ON I.zona = Z.id_zona
						INNER JOIN registro_infra_int AS IE ON I.id_cod = IE.code
						WHERE I.ronda =  '$ron' 
						GROUP BY I.id_cod ORDER BY I.id_inicio DESC  ";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}



				function consultaBuscador($agencia){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio ,I.ronda, U.user, I.id_cod, R.region, A.agencia, I.fecha, Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE A.agencia='$agencia'
					ORDER BY I.id_inicio DESC";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}


				function consultaRonda($ronda){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio ,I.ronda, U.user, I.id_cod, R.region, A.agencia, I.fecha, Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE I.ronda='$ronda'
					ORDER BY I.id_inicio DESC";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function consultaRondax($ronda,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio , I.ronda,U.user, I.id_cod , R.region , A.agencia , I.fecha , Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE I.ronda='$ronda'
					ORDER BY I.id_inicio DESC LIMIT $ini,$final";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				function consultaBuscadorx($agencia,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio , I.ronda,U.user, I.id_cod , R.region , A.agencia , I.fecha , Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE A.agencia='$agencia'
					ORDER BY I.id_inicio DESC LIMIT $ini,$final";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				function consultaBuscadorusuario($usuario){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio ,I.ronda, U.user, I.id_cod, R.region, A.agencia, I.fecha, Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE U.id ='$usuario'
					ORDER BY I.id_inicio DESC";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				

					function consultaBuscadorxusuario($usuario,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio ,I.ronda, U.user, I.id_cod , R.region , A.agencia , I.fecha , Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE U.id ='$usuario'
					ORDER BY I.id_inicio DESC LIMIT $ini,$final";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				function consultaBuscadorzona($agencia){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio ,I.ronda, U.user, I.id_cod, R.region, A.agencia, I.fecha, Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE Z.id_zona='$agencia'
					ORDER BY I.id_inicio DESC";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				function consultaBuscadorxzona($agencia,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio ,I.ronda, U.user, I.id_cod , R.region , A.agencia , I.fecha , Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE Z.id_zona='$agencia'
					ORDER BY I.id_inicio DESC LIMIT $ini,$final";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				
				function consultaBuscadorregion($agencia){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio ,I.ronda,U.user, I.id_cod, R.region, A.agencia, I.fecha, Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE R.id_region='$agencia'
					ORDER BY I.id_inicio DESC";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				function consultaBuscadorxregion($agencia,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio ,I.ronda, U.user, I.id_cod , R.region , A.agencia , I.fecha , Z.zona, T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE R.id_region='$agencia'
					ORDER BY I.id_inicio DESC LIMIT $ini,$final";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				
				function consultaAutocomplete(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT agencia from agencia ORDER BY agencia ASC";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				
				function consultaAutocompleteRegion(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT id_region,region from region ORDER BY region ASC";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function consultaAgencia($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT I.id_inicio AS inicio, U.user, I.id_cod AS code, R.region AS re, A.agencia AS age, I.fecha AS fe, Z.zona
								FROM inicio AS I
								INNER JOIN usuarios AS U ON I.usuario = U.id
								INNER JOIN region AS R ON I.region = R.id_region
								INNER JOIN agencia AS A ON I.agencia = A.id_age
								INNER JOIN zona AS Z ON I.zona = Z.id_zona
								WHERE I.id_cod =  '$code' LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function paginador($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

					$sql = "SELECT I.estado,I.estado_chk,I.id_inicio,I.ronda, U.user, I.id_cod, R.region, A.agencia , I.fecha , Z.zona,T.totales
					FROM inicio AS I
					INNER JOIN usuarios AS U ON I.usuario = U.id
					INNER JOIN region AS R ON I.region = R.id_region
					INNER JOIN agencia AS A ON I.agencia = A.id_age
					INNER JOIN registrototales AS T ON I.id_cod = T.code
					INNER JOIN zona AS Z ON I.zona = Z.id_zona WHERE I.ronda='9'
					ORDER BY I.id_inicio DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function paginadorExport($ini,$final,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

					$sql = "SELECT I.ronda, I.id_inicio, I.ronda, U.user, I.id_cod,I.estado, R.region, A.agencia, I.fecha, Z.zona, T.mant, T.log, T.serv, T.ext, T.techo, T.interna, T.mob, T.equipo, T.totales, IE.to1, IE.to2, IE.to3, IE.to4, IE.puntaje, IE.declara
						FROM inicio AS I
						INNER JOIN usuarios AS U ON I.usuario = U.id
						INNER JOIN region AS R ON I.region = R.id_region
						INNER JOIN agencia AS A ON I.agencia = A.id_age
						INNER JOIN registrototales AS T ON I.id_cod = T.code
						INNER JOIN zona AS Z ON I.zona = Z.id_zona
						INNER JOIN registro_infra_ext AS IE ON I.id_cod = IE.code
						WHERE I.ronda =  '$ron'
						AND IE.infra_ext =  '1'
						ORDER BY I.id_inicio DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function consultaLogistica(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user,I.id_reg,U.titulo,I.code,I.declara,I.puntaje,I.piso,I.imagen,I.observacion,I.fecha
						FROM registro_logistica AS I 
						INNER JOIN lista_logistica AS U ON I.logi=U.id_log
						INNER JOIN inicio AS R ON I.code=R.id_cod
						INNER JOIN usuarios AS K ON R.usuario=K.id
						ORDER BY I.id_reg DESC LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function paginadorLogi($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user,I.id_reg,U.titulo,I.code,I.declara,I.puntaje,I.piso,I.imagen,I.observacion,I.fecha
						FROM registro_logistica AS I 
						INNER JOIN lista_logistica AS U ON I.logi=U.id_log
						INNER JOIN inicio AS R ON I.code=R.id_cod
						INNER JOIN usuarios AS K ON R.usuario=K.id
						ORDER BY I.id_reg DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				
				function consultaLogisticaCon($buscar){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user,I.id_reg,U.titulo,I.code,I.declara,I.puntaje,I.piso,I.imagen,I.observacion,I.fecha
						FROM registro_logistica AS I 
						INNER JOIN lista_logistica AS U ON I.logi=U.id_log
						INNER JOIN inicio AS R ON I.code=R.id_cod
						INNER JOIN usuarios AS K ON R.usuario=K.id WHERE I.CODE = '$buscar'
						ORDER BY I.id_reg DESC LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function paginadorLogiCon($buscar,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user,I.id_reg,U.titulo,I.code,I.declara,I.puntaje,I.piso,I.imagen,I.observacion,I.fecha
						FROM registro_logistica AS I 
						INNER JOIN lista_logistica AS U ON I.logi=U.id_log
						INNER JOIN inicio AS R ON I.code=R.id_cod
						INNER JOIN usuarios AS K ON R.usuario=K.id WHERE I.CODE = '$buscar'
						ORDER BY I.id_reg DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				function consultaMante(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_reg, U.titulo, I.code, I.declara, I.fecha
						FROM registro_mantenimiento AS I
						INNER JOIN doc_mante_periodico AS U ON I.doc = U.id_doc
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_reg DESC 
						LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function paginadorMante($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_reg, U.titulo, I.code, I.declara, I.fecha
						FROM registro_mantenimiento AS I
						INNER JOIN doc_mante_periodico AS U ON I.doc = U.id_doc
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_reg DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				
				
				function consultaManteCon($buscar){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_reg, U.titulo, I.code, I.declara, I.fecha
						FROM registro_mantenimiento AS I
						INNER JOIN doc_mante_periodico AS U ON I.doc = U.id_doc
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code ='$buscar'
						ORDER BY I.id_reg DESC 
						LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function paginadorManteCon($buscar,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_reg, U.titulo, I.code, I.declara, I.fecha
						FROM registro_mantenimiento AS I
						INNER JOIN doc_mante_periodico AS U ON I.doc = U.id_doc
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code ='$buscar'
						ORDER BY I.id_reg DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				
				
				function consultaServicios(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_ser, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
							FROM registro_servicios AS I
							INNER JOIN lista_servicios AS U ON I.ser = U.id_ser
							INNER JOIN inicio AS R ON I.code = R.id_cod
							INNER JOIN usuarios AS K ON R.usuario = K.id
							ORDER BY I.id_ser DESC 
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function paginadorServicios($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_ser, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
							FROM registro_servicios AS I
							INNER JOIN lista_servicios AS U ON I.ser = U.id_ser
							INNER JOIN inicio AS R ON I.code = R.id_cod
							INNER JOIN usuarios AS K ON R.usuario = K.id
							ORDER BY I.id_ser DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
				
				function consultaServiciosCon($buscar){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_ser, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
							FROM registro_servicios AS I
							INNER JOIN lista_servicios AS U ON I.ser = U.id_ser
							INNER JOIN inicio AS R ON I.code = R.id_cod
							INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
							ORDER BY I.id_ser DESC 
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function paginadorServiciosCon($buscar,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_ser, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
							FROM registro_servicios AS I
							INNER JOIN lista_servicios AS U ON I.ser = U.id_ser
							INNER JOIN inicio AS R ON I.code = R.id_cod
							INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
							ORDER BY I.id_ser DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				
				function consultaExterna(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_inext, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
							FROM registro_infra_ext AS I
							INNER JOIN lista_infra_externa AS U ON I.infra_ext = U.id_inex
							INNER JOIN inicio AS R ON I.code = R.id_cod
							INNER JOIN usuarios AS K ON R.usuario = K.id
							ORDER BY I.id_inext DESC  
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorExterna($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_inext, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
							FROM registro_infra_ext AS I
							INNER JOIN lista_infra_externa AS U ON I.infra_ext = U.id_inex
							INNER JOIN inicio AS R ON I.code = R.id_cod
							INNER JOIN usuarios AS K ON R.usuario = K.id
							ORDER BY I.id_inext DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				
				function consultaExternaCon($buscar){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_inext, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
							FROM registro_infra_ext AS I
							INNER JOIN lista_infra_externa AS U ON I.infra_ext = U.id_inex
							INNER JOIN inicio AS R ON I.code = R.id_cod
							INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
							ORDER BY I.id_inext DESC  
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorExternaCon($buscar,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_inext, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
							FROM registro_infra_ext AS I
							INNER JOIN lista_infra_externa AS U ON I.infra_ext = U.id_inex
							INNER JOIN inicio AS R ON I.code = R.id_cod
							INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
							ORDER BY I.id_inext DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				
				function consultaTecho(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_te, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_techo AS I
						INNER JOIN lista_techo AS U ON I.techo = U.id_te
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_te DESC   
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorTecho($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_te, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_techo AS I
						INNER JOIN lista_techo AS U ON I.techo = U.id_te
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_te DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				
				function consultaTechoCon($buscar){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_te, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_techo AS I
						INNER JOIN lista_techo AS U ON I.techo = U.id_te
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
						ORDER BY I.id_te DESC   
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorTechoCon($buscar,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_te, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_techo AS I
						INNER JOIN lista_techo AS U ON I.techo = U.id_te
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
						ORDER BY I.id_te DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function consultaMobiliario(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_mob, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_mobiliario AS I
						INNER JOIN lista_mobiliario AS U ON I.mobi = U.id_mo
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_mob DESC    
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorMobiliario($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_mob, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_mobiliario AS I
						INNER JOIN lista_mobiliario AS U ON I.mobi = U.id_mo
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_mob DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				
				
				function consultaMobiliarioCon($buscar){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_mob, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_mobiliario AS I
						INNER JOIN lista_mobiliario AS U ON I.mobi = U.id_mo
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
						ORDER BY I.id_mob DESC    
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorMobiliarioCon($buscar,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_mob, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_mobiliario AS I
						INNER JOIN lista_mobiliario AS U ON I.mobi = U.id_mo
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
						ORDER BY I.id_mob DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function consultaEquipo(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_eq, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_equipo AS I
						INNER JOIN lista_equipamiento AS U ON I.eq = U.id_equi
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_eq DESC     
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorEquipo($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_eq, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_equipo AS I
						INNER JOIN lista_equipamiento AS U ON I.eq = U.id_equi
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_eq DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				function consultaEquipoCon($buscar){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.id_eq, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_equipo AS I
						INNER JOIN lista_equipamiento AS U ON I.eq = U.id_equi
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
						ORDER BY I.id_eq DESC     
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorEquipoCon($buscar,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.id_eq, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_equipo AS I
						INNER JOIN lista_equipamiento AS U ON I.eq = U.id_equi
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
						ORDER BY I.id_eq DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				
				function consultaInterna(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.variable, I.id_inter, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_infra_int AS I
						INNER JOIN lista_infra_interna AS U ON I.infra_int = U.id_inter
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_inter DESC      
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorInterna($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.variable, I.id_inter, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_infra_int AS I
						INNER JOIN lista_infra_interna AS U ON I.infra_int = U.id_inter
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id
						ORDER BY I.id_inter DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				
				function consultaInternaCon($buscar){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT K.user, I.variable, I.id_inter, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_infra_int AS I
						INNER JOIN lista_infra_interna AS U ON I.infra_int = U.id_inter
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
						ORDER BY I.id_inter DESC      
							LIMIT 0 , 30";

						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function paginadorInternaCon($buscar,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT K.user, I.variable, I.id_inter, U.titulo, I.code, I.declara, I.puntaje, I.piso, I.imagen, I.observacion, I.fecha
						FROM registro_infra_int AS I
						INNER JOIN lista_infra_interna AS U ON I.infra_int = U.id_inter
						INNER JOIN inicio AS R ON I.code = R.id_cod
						INNER JOIN usuarios AS K ON R.usuario = K.id WHERE I.code='$buscar'
						ORDER BY I.id_inter DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}
				
				

				function user($cod){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT nom,ape FROM usuarios where id=$cod";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


					function useradmin(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM usuarios ORDER BY id DESC";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function paginadoruser($ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM usuarios ORDER BY id DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function aire($aire){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM aire where code='$aire'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function extintores($aire){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM extintores where code='$aire'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function grupo($aire){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM grupo where code='$aire'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}


				function luces($aire){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * from luces where code='$aire'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function pozo($aire){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * from pozo where code='$aire'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function fumigacion($aire){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * from fumigacion where code='$aire'";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

				}

				function certificacion($aire){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * from certificacion where code='$aire'";
						$result = $conn->query($sql);				
					}

						return $result;

				}

				function paginaBusca($temas,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM informacion where tag LIKE '%$temas%' ORDER BY id_art ASC LIMIT $ini,$final";
						$result = $conn->query($sql);				
					}

						return $result;

				}



				function urls_amigables($url) {
				 
				      $url = strtolower($url); 
				      $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ'); 
				      $repl = array('a', 'e', 'i', 'o', 'u', 'n'); 
				      $url = str_replace ($find, $repl, $url); 
				      $find = array(' ', '&', '\r\n', '\n', '+');
				      $url = str_replace ($find, '-', $url);
				      $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/'); 
				      $repl = array('', '-', ''); 
				      $url = preg_replace ($find, $repl, $url);				 
				      return $url;
				 
				}

				function busId($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT I.titulo_art, E.titulo as tipo,T.titulo as tema, I.modalidad,I.precio,
						I.descripcion,I.cabdescripcion
						FROM informacion AS I 
						INNER JOIN especialidad AS E ON I.TIPO_ESTUDIO=E.ID_ES 
						INNER JOIN temas AS T ON I.TEMAS_ESTUDIO=T.ID_TE 
						WHERE I.ID_ART='$id'";

						$result = $conn->query($sql);				
					}

						return $result;

				}
				
			function consultaFiltro($especial,$tipos,$modalidad,$lugar,$centros,$precio){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{
							if($precio=="1"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 0 AND 500 ";
								$result = $conn->query($sql);
							}
							else if($precio=="2"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND centros='$centros' AND precio BETWEEN 500 AND 1000 ";
								 $result = $conn->query($sql);
								
							}
							else if($precio=="3"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 1000 AND 2000 ";
								$result = $conn->query($sql);
							}
							else if($precio=="4"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 2000 AND 4000 ";
								$result = $conn->query($sql);
							}
							else if($precio=="5"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 4000 AND 5000 ";
								$result = $conn->query($sql);
							}
							else if($precio=="6"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 5000 AND 6000 ";
								$result = $conn->query($sql);
							}
							else {
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 7000 AND 500000 ";
								$result = $conn->query($sql);
							}

					}

						return $result;

			}

			function paginadorFiltro($especial,$tipos,$modalidad,$lugar,$centros,$precio,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{


						if($precio=="1"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 0 AND 500 ORDER BY id_art ASC LIMIT $ini,$final";
								$result = $conn->query($sql);
							}
							else if($precio=="2"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 500 AND 1000  ORDER BY id_art ASC LIMIT $ini,$final";
								$result = $conn->query($sql);
							}
							else if($precio=="3"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 1000 AND 2000 ORDER BY id_art ASC LIMIT $ini,$final";
								$result = $conn->query($sql);
							}
							else if($precio=="4"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 2000 AND 4000 ORDER BY id_art ASC LIMIT $ini,$final";
								$result = $conn->query($sql);
							}
							else if($precio=="5"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 4000 AND 5000 ORDER BY id_art ASC LIMIT $ini,$final";
								$result = $conn->query($sql);
							}
							else if($precio=="6"){
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 5000 AND 6000 ORDER BY id_art ASC LIMIT $ini,$final";
								$result = $conn->query($sql);
							}
							else {
								$sql = "SELECT * FROM informacion where especialidad = '$especial' AND departamento='$lugar' 
								AND modalidad='$modalidad' AND tipo_estudio ='$tipos' AND precio BETWEEN 7000 AND 500000 ORDER BY id_art ASC LIMIT $ini,$final";
								$result = $conn->query($sql);
							}

									
					}

						return $result;


			}


			function Select_Tipos(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM especialidad ORDER BY id_es ASC";
						$result = $conn->query($sql);				
					}

						return $result;

			}

			function Select_Temas(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM temas";
						$result = $conn->query($sql);				
					}

						return $result;

			}

			function Select_Lugar(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM lugar ORDER BY id_lu ASC ";
						$result = $conn->query($sql);				
					}

						return $result;

			}

			function Select_Centros(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM centros";
						$result = $conn->query($sql);				
					}

						return $result;

			}

			function Select_Precio(){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM precio ORDER BY id_pre ASC";
						$result = $conn->query($sql);				
					}

						return $result;

			}
			
			function CountAgencias($zona,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM inicio WHERE zona='$zona' AND ronda ='$ron' ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

			}
			
			function CountAgenciaTotal($ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM inicio WHERE ronda ='$ron' ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

			}
			
			function CountUsu($us,$ron){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "SELECT * FROM inicio WHERE usuario='$us' AND ronda ='$ron' ";
						$result = $conn->query($sql);				
					}

						return $result;$close = mysqli_close($conn);

			}
			
			
			
			function insertArt($esp,$dep,$tipos,$temas,$modal,$precio,$centros,$titulo,$subt,$des,$res,$tag){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

						$sql = "INSERT informacion(especialidad, departamento,tipo_estudio,temas_estudio,modalidad,precio,centros, 
						titulo_art,subtitulo,descripcion,resumen_des,tag)
					values('".$esp."','".$dep."','".$tipos."','".$temas."','".$modal."','".$precio."','".$centros."','".$titulo."','".$subt."'
						,'".$des."','".$res."','".$tag."')";

						$result = $conn->query($sql);		

					}

						return $result;$close = mysqli_close($conn);


			}
			
			
			

			

}


?>