<?php

error_reporting(0);
session_start();

if ($_SESSION['loggedin'] == false) {
	
	echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
	exit;
} 


require 'Modelo/actualizar.php';
$sel =new Actualizar();

$tipo=$_GET["tipo"];
$id = $_GET["id"];
$tu=$_GET["act"];
$code = $_GET["code"];


          if($tipo=="servicios"){
              $ni = $sel->EliminarServicios($id,$tu);
              echo"<script type=\"text/javascript\">alert('Eliminado.'); window.location='DetalleObservaciones.php?cod=".$code."';</script>";
          }
          else if($tipo=="logistica"){
              $ni = $sel->EliminarLogistica($id,$tu);
              echo"<script type=\"text/javascript\">alert('Eliminado.'); window.location='DetalleObservaciones.php?cod=".$code."';</script>";
          }
          else if($tipo=="externa"){
              $ni = $sel->EliminarExterna($id,$tu);
              echo"<script type=\"text/javascript\">alert('Eliminado.'); window.location='DetalleObservaciones.php?cod=".$code."';</script>";
          }
          else if($tipo=="techo"){
              $ni = $sel->EliminarTecho($id,$tu);
              echo"<script type=\"text/javascript\">alert('Eliminado.'); window.location='DetalleObservaciones.php?cod=".$code."';</script>";
          }
          else if($tipo=="interna"){
              $ni = $sel->EliminarInterna($id,$tu);
              echo"<script type=\"text/javascript\">alert('Eliminado.'); window.location='DetalleObservaciones.php?cod=".$code."';</script>";
          }
          else if($tipo=="mobiliario"){
              $ni = $sel->EliminarMobiliario($id,$tu);
              echo"<script type=\"text/javascript\">alert('Eliminado.'); window.location='DetalleObservaciones.php?cod=".$code."';</script>";
          }
          else if($tipo=="equipo"){
              $ni = $sel->EliminarEquipo($id,$tu);
              echo"<script type=\"text/javascript\">alert('Eliminado.'); window.location='DetalleObservaciones.php?cod=".$code."';</script>";
          }
          
           else if($tipo=="agencia"){
              $ni = $sel->EliminarAgencia($code);
              echo"<script type=\"text/javascript\">alert('Agencia eliminada.'); window.location='checklist.php?us=22&rondax=8';</script>";
          }
        

      


?>

