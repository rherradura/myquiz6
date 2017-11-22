<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require_once('C:\xampp\htdocs\myquiz6\lib\nusoap.php');
	
	$soapclient = new nusoap_client("http://wsjiparsar.esy.es/webZerbitzuak/egiaztatuMatrikula.php?wsdl",false);	
	$emaitza = $soapclient->call('egiaztatuP',array( 'x'=>$_POST['pass']));
	
	if ($emaitza == "BALIOZKOA"){echo "Pasahitza segurua eta baliozkoa da";}
	else{echo "Pasahitza tipiko da eta baliogabea da, ez da segurua";}
?>
