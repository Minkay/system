<?php
//comprobamos que sea una petición ajax
header("Access-Control-Allow-Origin: *");


if(isset($_FILES['archivo'])) 
{

    //obtenemos el archivo a subir
    $file = $_FILES['archivo']['name'];

    $str = $_POST["code"];
    $no = strtolower($str);
   // $no = "fds";
    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    $ruta= "DATA/".$no."/";
    
    if(!is_dir($ruta)) 
        mkdir($ruta, 0777);
     
    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta.$file))
    {
       sleep(1);//retrasamos la petición 3 segundos
       echo $file;//devolvemos el nombre del archivo para pintar la imagen
    }
}
if(isset($_FILES['archivo2'])) 
{

    //obtenemos el archivo a subir
    $file = $_FILES['archivo2']['name'];
     $str = $_POST["code"];
    $no = strtolower($str);
   // $no = $_POST["code"];
   // $no = "fds";
    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    $ruta= "DATA/".$no."/";
    
    if(!is_dir($ruta)) 
        mkdir($ruta, 0777);
     
    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['archivo2']['tmp_name'],$ruta.$file))
    {
       sleep(1);//retrasamos la petición 3 segundos
       echo $file;//devolvemos el nombre del archivo para pintar la imagen
    }
}
if(isset($_FILES['archivo3'])) 
{

    //obtenemos el archivo a subir
    $file = $_FILES['archivo3']['name'];
    //$no = $_POST["code"];
    $str = $_POST["code"];
    $no = strtolower($str);
   // $no = "fds";
    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    $ruta= "DATA/".$no."/";
    
    if(!is_dir($ruta)) 
        mkdir($ruta, 0777);
     
    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['archivo3']['tmp_name'],$ruta.$file))
    {
       sleep(1);//retrasamos la petición 3 segundos
       echo $file;//devolvemos el nombre del archivo para pintar la imagen
    }
}
if(isset($_FILES['archivo4'])) 
{

    //obtenemos el archivo a subir
    $file = $_FILES['archivo4']['name'];
   // $no = $_POST["code"];
    $str = $_POST["code"];
    $no = strtolower($str);
   // $no = "fds";
    //comprobamos si existe un directorio para subir el archivo
    //si no es así, lo creamos
    $ruta= "DATA/".$no."/";
    
    if(!is_dir($ruta)) 
        mkdir($ruta, 0777);
     
    //comprobamos si el archivo ha subido
    if ($file && move_uploaded_file($_FILES['archivo4']['tmp_name'],$ruta.$file))
    {
       sleep(1);//retrasamos la petición 3 segundos
       echo $file;//devolvemos el nombre del archivo para pintar la imagen
    }
}
else{
    throw new Exception("Error Processing Request", 1);   
}