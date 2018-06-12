<?php
/**
* 
*/
class Conexion 
{
	
	static public function conectarold() /*  coloquei static pq estava dando erro sem */
	
	{
		$link = new PDO("mysql:host=localhost;dbname=ecommerce",
			"root",
			"",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			 );
		return $link;
	
	}
	static public function conectar() /*  coloquei static pq estava dando erro sem */
	
	{
		$link = new PDO("mysql:host=mysql08-farm67.uni5.net;dbname=infinitygroup05",
			"infinitygroup05",
			"conejo24",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			 );
		return $link;
	
	}
}