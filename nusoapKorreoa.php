<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require_once('C:\xampp\htdocs\myquiz6\lib\nusoap.php');
	
	$soapclient = new nusoap_client("http://wsjiparsar.esy.es/webZerbitzuak/egiaztatuMatrikula.php?wsdl",false);	
	$emaitza = $soapclient->call('egiaztatuE',array( 'x'=>$_POST['email']));
	
	if ($emaitza == "BAI"){echo "Korreoa matrikulatuta dago Web Sistemetan";}
	else{echo "Korreoa ez matrikulatuta dago Web Sistemetan";}
?>
