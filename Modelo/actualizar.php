<?php 

require './Controlador/conexion.php';
header('Content-Type: text/html; charset=utf-8');
error_reporting(0);

class Actualizar{

			
			   function InsertLogistica($id,$to,$im,$me2,$cre2,$re2,$ac2,$obs,$img,$me,$cri,$res,$ac){

					$db = new Conectar();
					$conn = $db->conexion();
					list($uno, $dos) = split('[/.-]', $img);		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{
						if($dos==""){
							$sql = "UPDATE registro_logistica SET $to='$obs',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_reg='$id' ";
							$result = $conn->query($sql);
						}else{
							$sql = "UPDATE registro_logistica SET $to='$obs',$im='$img',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_reg='$id' ";
							$result = $conn->query($sql);
						}
										
					}

						return $result;
						$close = mysqli_close($conn);

				}
				

				
				function InsertServicios($id,$to,$im,$me2,$cre2,$re2,$ac2,$obs,$img,$me,$cri,$res,$ac){

					$db = new Conectar();
					$conn = $db->conexion();		
					list($uno, $dos) = split('[/.-]', $img);
					
					
					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{
						
						if($dos==""){
						$sql = "UPDATE registro_servicios SET $to='$obs',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE 								     id_ser='$id' ";
						$result = $conn->query($sql);
						}else{
						$sql = "UPDATE registro_servicios SET $to='$obs',$im='$img' ,$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_ser='$id' ";
						$result = $conn->query($sql);
						}				
					}

						return $result;
						$close = mysqli_close($conn);
				}
				
				function InsertExterna($id,$to,$im,$me2,$cre2,$re2,$ac2,$obs,$img,$me,$cri,$res,$ac){

					$db = new Conectar();
					$conn = $db->conexion();
					list($uno, $dos) = split('[/.-]', $img);	

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{
						if($dos==""){
						$sql = "UPDATE registro_infra_ext SET $to='$obs',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_inext='$id' ";
						$result = $conn->query($sql);
						
						}else{
						$sql = "UPDATE registro_infra_ext SET $to='$obs',$im='$img',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_inext='$id' ";
						$result = $conn->query($sql);
						
						}
										
					}

						return $result;
						$close = mysqli_close($conn);
				}
				
				function InsertTecho($id,$to,$im,$me2,$cre2,$re2,$ac2,$obs,$img,$me,$cri,$res,$ac){

					$db = new Conectar();
					$conn = $db->conexion();
					list($uno, $dos) = split('[/.-]', $img);		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{
						if($dos==""){
							$sql = "UPDATE registro_techo SET $to='$obs',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_te='$id' ";
						$result = $conn->query($sql);				
						}else{
							$sql = "UPDATE registro_techo SET $to='$obs',$im='$img',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_te='$id' ";
						$result = $conn->query($sql);				
						}
						
					}

						return $result;
						$close = mysqli_close($conn);
				}
				
				function InsertInterna($id,$to,$im,$me2,$cre2,$re2,$ac2,$obs,$img,$me,$cri,$res,$ac){

					$db = new Conectar();
					$conn = $db->conexion();
					list($uno, $dos) = split('[/.-]', $img);		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{
						if($dos==""){
						$sql = "UPDATE registro_infra_int SET $to='$obs',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_inter='$id' ";
						$result = $conn->query($sql);				
						}else{
						$sql = "UPDATE registro_infra_int SET $to='$obs',$im='$img',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_inter='$id' ";
						$result = $conn->query($sql);				
						}
						
					}

						return $result;
						$close = mysqli_close($conn);
				}
				
				function InsertMobiliario($id,$to,$im,$me2,$cre2,$re2,$ac2,$obs,$img,$me,$cri,$res,$ac){

					$db = new Conectar();
					$conn = $db->conexion();
					list($uno, $dos) = split('[/.-]', $img);		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{
						if($dos==""){
						$sql = "UPDATE registro_mobiliario SET $to='$obs',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_mob='$id' ";
						$result = $conn->query($sql);				
						}else{
						$sql = "UPDATE registro_mobiliario SET $to='$obs',$im='$img',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_mob='$id' ";
						$result = $conn->query($sql);				
						}
						
					}

						return $result;
						$close = mysqli_close($conn);
				}
				
				function InsertEquipo($id,$to,$im,$me2,$cre2,$re2,$ac2,$obs,$img,$me,$cri,$res,$ac){

					$db = new Conectar();
					$conn = $db->conexion();
					list($uno, $dos) = split('[/.-]', $img);		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{
						if($dos==""){
						$sql = "UPDATE registro_equipo SET $to='$obs',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_eq='$id' ";
						$result = $conn->query($sql);				
						}else{
						$sql = "UPDATE registro_equipo SET $to='$obs',$im='$img',$me2='$me',$cre2='$cri',$re2='$res',$ac2='$ac' WHERE id_eq='$id' ";
						$result = $conn->query($sql);				
						}
						
					}

						return $result;
						$close = mysqli_close($conn);
				}
				
				/////////////  ELIMINAR 


				function EliminarServicios($id,$to){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_servicios SET $to='SI' WHERE id_ser='$id' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);
				}


				function EliminarLogistica($id,$to){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_logistica SET $to='SI' WHERE id_reg='$id' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);
				}

				function EliminarExterna($id,$to){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_infra_ext SET $to='SI' WHERE id_inext='$id' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);
				}
				function EliminarTecho($id,$to){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_techo SET $to='SI' WHERE id_te='$id' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);
				}
				function EliminarInterna($id,$to){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_infra_int SET $to='SI' WHERE id_inter='$id' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);
				}

				function EliminarMobiliario($id,$to){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_mobiliario SET $to='SI' WHERE id_mob='$id' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);
				}

				function EliminarEquipo($id,$to){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "UPDATE registro_equipo SET $to='SI' WHERE id_eq='$id' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);
				}
				
				
				
				function EliminarAgencia($code){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "DELETE FROM inicio WHERE id_cod='$code' ";
						$result = $conn->query($sql);
						
						$sql2 = "DELETE FROM registrototales WHERE code='$code' ";
						$result2 = $conn->query($sql2);
					}

						return $result;return $result2;
						$close = mysqli_close($conn);
				}


				function ObservacionLogistica($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_logistica WHERE id_reg='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}




				function ObservacionServicios($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_servicios WHERE id_ser='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function ObservacionExterna($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_ext WHERE id_inext='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
			
			function ObservacionTecho($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_techo WHERE id_te='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}

				function ObservacionInterna($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_infra_int WHERE id_inter='$id' AND declara='SI' ";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}
			
			function ObservacionMobiliario($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_mobiliario WHERE  id_mob='$id' AND declara='SI'";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

				}


			function ObservacionEquipo($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexi贸n fallida: %s\n", $conn->connect_error);
					    exit();

					}else{

						$sql = "SELECT * from registro_equipo WHERE id_eq='$id' AND declara='SI'";
						$result = $conn->query($sql);				
					}

						return $result;
						$close = mysqli_close($conn);

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

						return $result;
						$close = mysqli_close($conn);

				}


				function ActEstadoAgen($id,$estado){

						
					$db = new Conectar();
					$conn = $db->conexion();	

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();

					}else{
						
							$sql = "UPDATE inicio SET estado='$estado' WHERE id_cod='$id' ";
							$result = $conn->query($sql);						
										
					}

						return $result;
						$close = mysqli_close($conn);

				}

				
			

}


?>