<?php
include("cfg.php");
require("class.phpmailer.php");
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$adresse = $_POST["adresse"];
$email = $_POST["email"];
$motivation = $_POST["motivation"];

$content = "De: ".$nom." ".$prenom."\n";
$content.= "(".$email.")\n";
$content.= "Adresse: ".$adresse."\n";
$content.= "CV: voir fichier join\n";
$content.= "Lettre de motivation: \n\n";
$content.= $motivation;
if (is_uploaded_file($_FILES['cv']['tmp_name'])) {
	$uploaddir = './upload/';
	$uploadfile = $uploaddir . basename($_FILES['cv']['tmp_name']).'_'. basename($_FILES['cv']['name']);
	if (move_uploaded_file($_FILES['cv']['tmp_name'], $uploadfile)) {
		$mail = new PHPMailer();
		$mail->From = $mail_from;
		$mail->FromName = $mail_from_name;
		$mail->Host = $smtp_host;
		$mail->Port = $smtp_port;
		$mail->AddAddress($mail_to, $mail_to_name);
		$mail->AddCC($email, $nom." ".$prenom);
		$mail->AddReplyTo($email, $nom." ".$prenom);
		$mail->Subject = "ANSI-Jeans Contact";
		$mail->Body = $content;
		$mail->AddAttachment($uploadfile, basename($_FILES['cv']['name']));
		if(!$mail->Send()) {
			 echo "Mail error : ".$mail->ErrorInfo." (".$email." ".$nom.")";
		} else {
			echo "EMail Success";
		}
		unlink($uploadfile);
	} else {
    	echo "Erreur Upload CV";
	}
} else {
	echo "Erreur Upload CV";
}
?>