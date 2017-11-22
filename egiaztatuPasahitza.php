<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require_once('C:\xampp\htdocs\myquiz6\lib\nusoap.php');
	
	$server = new soap_server;
	
	$server->register('egiaztatuP');
	
	function egiaztatuP($pass){
		$fitxategia = fopen("toppasswords.txt", "r");
		$berdinak = false;
		
		while (($fitxHitza = fgets($fitxategia)) != false && $berdinak == false){
			$fitxHitza = rtrim($fitxHitza, "\r\n");
			if(strcmp($fitxHitza,$pass)==0){$berdinak = true;}
		}
		fclose($fitxategia);
		if (berdinak == true){return "BALIOGABEA";}
		else{return "BALIOZKOA";}
	}

	if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
	$server->service($HTTP_RAW_POST_DATA);
?>