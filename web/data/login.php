<?php
if(isset($_COOKIE['auth'])) {
	header("location:./");
}
require_once('id.inc');
if(isset($_POST['login']) && isset($_POST['passwd'])) {
	$login = $_POST['login'];
	$passwd = $_POST['passwd'];
	if($login == $defaultlogin && $passwd == $defaultpass) {
		setcookie('auth', $login, time()+3600);
		header("location:index.php");
		exit(0);
	}
	$err = "Identifiant ou mot de passe incorrect";
}
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0"> 
<title>Identification ANSI-Jeans.com</title>
</head>
<body>
<?php echo $err; ?>
<form action="login.php" method="post">
<span> Identifiant : </span>
<span><input name="login" type="text" value="<?php echo $login; ?>"> </span><br/>
 <span> Mot de passe : </span>
<span><input name="passwd" type="password"> </span><br/>
<input type="submit" value="Connexion">
</form>
</body>
</html>