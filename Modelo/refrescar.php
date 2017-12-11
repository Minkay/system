<?php 



require './../Controlador/conexion.php';
header('Content-Type: text/html; charset=utf-8');
error_reporting(0);

$db = new Conectar();
$conn = $db->conexion();

//generamos la consulta
$sql = "SELECT * FROM inicio ORDER BY id_inicio DESC";

mysqli_set_charset($conn, "utf8"); //formato de datos utf8


if(!$result = mysqli_query($conn, $sql))  die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 

    $id_inicio=$row['id_inicio'];
    $id_cod=$row['id_cod'];
    $ronda=$row['ronda'];
   
    

    $clientes[] = array('id_inicio'=> $id_inicio, 'id_cod'=> $id_cod, 'ronda'=> $ronda);
 
}
    
//desconectamos la base de datos
$close = mysqli_close($conn) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
    

?>