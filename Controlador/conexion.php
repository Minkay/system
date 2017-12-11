<?php


	class Conectar{

	    public static function conexion(){

		$conexion=new mysqli("localhost", "minkayco_app", "Homero2087@", "minkayco_system");	
	        $conexion->query("SET NAMES 'utf8'");

	        return $conexion;

	    }
	}

?>