<?php
// Pull in the NuSOAP code
require_once('../lib/nusoap.php');
// Create the server instance
$server = new soap_server;
$server->soap_defencoding = 'UTF-8';

$server->configureWSDL('load', 'urn:loadwsdl');
$server->wsdl->schemaTargetNamespace = 'urn:loadwsdl';
// enregistrement

$server->register('loadcontent', array("file"=>"xsd:string", "lang"=>"xsd:string"), array("result"=>"xsd:string"));
// functions

function loadcontent($file, $lang) {
	$filename = $file.".".$lang.".txt";
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	return utf8_encode($contents);
}


$_REQUEST = isset($_REQUEST) ? $_REQUEST : '';
$server->service($_REQUEST);
?>