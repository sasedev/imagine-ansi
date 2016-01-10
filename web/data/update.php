<?php
// Pull in the NuSOAP code
require_once('../lib/nusoap.php');
// Create the server instance
$server = new soap_server;
$server->soap_defencoding = 'UTF-8';

$server->configureWSDL('update', 'urn:updatewsdl');
$server->wsdl->schemaTargetNamespace = 'urn:updatewsdl';
// enregistrement

$server->register('updatecontent', array("file"=>"xsd:string", "lang"=>"xsd:string", "content"=>"xsd:string"), array("result"=>"xsd:string"));
// functions

function updatecontent($file, $lang, $content) {
	$filename = $file.".".$lang.".txt";
	if (is_writable($filename)) {
		if (!$handle = fopen($filename, 'w')) {
			return "Erreur d'ouverture de fichier";
		}
		if (fwrite($handle, $content) === FALSE) {
			fclose($handle);
			return "Impossible d'ecrire dans le fichier";
		}
		fclose($handle);
		return "Mise a jour avec succes";
	} else {
		return "Fichier en lecture seule";
	}
}


$_POST = isset($_REQUEST) ? $_REQUEST : '';
$server->service($_REQUEST);
?>