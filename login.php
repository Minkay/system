<?php

include 'Controlador/conexion.php';
session_start();
$db = new Conectar();
$conn = $db->conexion();

error_reporting (0);

if (mysqli_connect_errno())

{

echo "La conexi贸n no ha sido establecida: " . mysqli_connect_error();

}

header("Access-Control-Allow-Origin: *");

	if(isset($_POST['btn-login'])){

		$usuario = mysqli_real_escape_string($conn,$_POST['username']);
		$pass = mysqli_real_escape_string($conn,$_POST['password']);
		$password=md5($pass);
		
			try
			{

			$sql = "SELECT * from usuarios where user='$usuario' AND pass='$password' AND estado='activado'";

			$run_user = mysqli_query($conn, $sql);
			$check_user = mysqli_num_rows($run_user);
			
			
 					while($fila = $run_user -> fetch_array()){ 
 						$pa = $fila["pass"];
			        	 	$_SESSION['id']=$fila["id"] ;
			        	 	$_SESSION['nom']=$fila["nom"] ;
			        	 	$_SESSION['ape']=$fila["ape"] ;
			  		  }

				
				if($check_user == 1 )
					{
					$_SESSION['loggedin'] = true;
					echo $_SESSION['nom']." ".$_SESSION['ape'];
					
			        
					}
				else 
				{
				       
					echo "error";
				}

			}
			catch(PDOException $e){
				echo $e->getMessage();
			}	
				

		}


?>