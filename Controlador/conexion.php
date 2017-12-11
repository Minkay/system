<?php


	class Conectar{

	    public static function conexion(){

		$conexion=new mysqli("localhost", "root", "", "minkayco_system");	
	        $conexion->query("SET NAMES 'utf8'");

	        return $conexion;

	    }
	}

?>