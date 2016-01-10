<?php
if(!isset($_COOKIE['auth'])) {
	header("location:login.php");
	exit(0);
}

if ($_FILES["img"]["type"] == "image/jpeg" || $_FILES["img"]["type"] == "image/pjpeg" )
{
	$fname = $_POST["fname"];
	if(move_uploaded_file($_FILES["img"]["tmp_name"], $fname)) {
		$str = "moved ".$_FILES["img"]["tmp_name"]." to ".$fname;
	} else {
		$str = "Attaque potentielle par téléchargement de fichiers. Voici plus d'informations :\n";
	}
} 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0"> 
<title>Mise à jour ANSI-Jeans.com</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="chili-1.7.pack.js"></script>
<script type="text/javascript" src="lib/jquery.easing.js"></script>
<script type="text/javascript" src="lib/jquery.dimensions.js"></script>
<script type="text/javascript" src="jquery.accordion.js"></script>
<script src="../AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
// -----------------------------------------------------------------------------
// Variables globales
// Version majeure de Flash requise
var requiredMajorVersion = 9;
// Version mineure de Flash requise
var requiredMinorVersion = 0;
// R�vision de Flash requise
var requiredRevision = 45;
// -----------------------------------------------------------------------------
// -->
jQuery().ready(function(){
	jQuery('#list').accordion({
		autoheight: false
	});
});
</script>
<style type="text/css">
<!--
.Style1 {color: #FF0000}
.basic { width:100%; }
.basic div {
	background-color: #eee;
}
.basic a {
	cursor:pointer;
	display:block;
	padding:5px;
	margin-top: 0;
	text-decoration: none;
	font-weight: bold;
	font-size: 12px;
	color: black;
	background-color: #00a0c6;
	border-top: 1px solid #FFFFFF;
	border-bottom: 1px solid #999;
	
	background-image: url("AccordionTab0.gif");
}
.basic a:hover {
	background-color: white;
	background-image: url("AccordionTab2.gif");
}
.basic a.selected {
	color: black;
	background-color: #80cfe2;
	background-image: url("AccordionTab2.gif");
}
.odd1 {
	background-color: #00a0c6;
}
.odd2 {
	background-color: #80cfe2;
}
-->
</style>
</head>
<body bgcolor="#ffffff">
<div class="basic" style="float:left;"  id="list">
<a>Texte</a>
<div align="center">
<table style="width: 95%; border: 0;">
  <tr>
    <td width="620">
	<script type="text/javascript">
<!--
if (AC_FL_RunContent == 0 || DetectFlashVer == 0) {
	alert("Cette page n�cessite le fichier AC_RunActiveContent.js.");
} else {
	var hasRightVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	if(hasRightVersion) {  // si nous avons d�tect� une version acceptable
		// int�grer le clip Flash
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,45,0',
			'width', '620',
			'height', '325',
			'src', 'Index',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'transparent',
			'devicefont', 'false',
			'id', 'Index',
			'bgcolor', '#ffffff',
			'name', 'Index',
			'menu', 'false',
			'allowScriptAccess','sameDomain',
			'allowFullScreen','false',
			'movie', 'Index',
			'salign', ''
			); //end AC code
	} else {  // version Flash trop ancienne ou d�tection du plug-in impossible
		var alternateContent = 'Un autre contenu HTML doit �tre ins�r� ici. '
			+ 'Ce contenu requiert Adobe Flash Player. '
			+ '<a href=http://www.macromedia.com/go/getflash/>Obtenir Flash</a>';
		document.write(alternateContent);  // Ins�rer contenu non-Flash
	}
}
// -->
</script>
<noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="620" height="325" title="Update ANSI">
      <param name="movie" value="Index.swf">
      <param name="quality" value="high">
      <embed src="Index.swf" type="application/x-shockwave-flash" width="620" height="325"></embed>
    </object></noscript>
    </td>
    <td valign="top" style="padding:5px; margin: 5px;"><p>Utilisez cet outil pour mettre &agrave; jour Les diff&eacute;rents texte du site ANSI.</p>
    <p>Choisisser un fichier et une langue et cliquez sur le bouton charger. Les trois langues sont disponibles. La nomenclature des fichiers est Bouton + &quot;num&eacute;ro du bouton&quot; + &quot;num&eacute;ro sous-bouton&quot; + &quot;section&quot; : Bouton 1 2 4 correspond donc au premier bouton (&quot;Groupe ANSI&quot;) + deuxieme sous-bouton (&quot;Ansi dans le monde et contacts&quot;) + 4eme section (&quot;Email de Loic Tahon&quot;)</p>
    <p>Pour charger un texte, il faut obligatoirement passer par le bouton &quot;Charger&quot;, et la selection des menus &quot;Fichier&quot; et &quot;Langue&quot; seuls n'a aucun effet sans ce bouton.</p>
    <p class="Style1">Attention, lorsque vous cliquez sur mettre &agrave; jour pour sauvegarder le contenu sur le site, le contenu du texte est automatiquement ajouter &agrave; la section et langue en cours dans les menus d&eacute;roulant correspondants.</p>
    <p>Le background sert &agrave; visualiser la couleur du texte par rapport &agrave; la section sur le site en ligne. cela ne change en rien le background sur le site.</p></td>
  </tr>
</table>
</div>
<a>Images Adulte Gallery 1</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../adulte/gallery1/<?php echo $i; ?>.jpg" height="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="file" name="img"> <input type="hidden" name="fname" value="../adulte/gallery1/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Adulte Gallery 2</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../adulte/gallery2/<?php echo $i; ?>.jpg" width="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../adulte/gallery2/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Adulte Gallery 2-2</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../adulte/gallery2-2/<?php echo $i; ?>.jpg" width="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../adulte/gallery2-2/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Adulte Gallery 3</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../adulte/gallery3/<?php echo $i; ?>.jpg" height="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../adulte/gallery3/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Adulte Gallery 4</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../adulte/gallery4/<?php echo $i; ?>.jpg" width="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../adulte/gallery4/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Adulte Gallery 4-2</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../adulte/gallery4-2/<?php echo $i; ?>.jpg" width="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../adulte/gallery4-2/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Enfant Gallery 1</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../enfant/gallery1/<?php echo $i; ?>.jpg" width="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../enfant/gallery1/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Enfant Gallery 1-2</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../enfant/gallery1-2/<?php echo $i; ?>.jpg" width="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../enfant/gallery1-2/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Enfant Gallery 2</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../enfant/gallery2/<?php echo $i; ?>.jpg" height="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../enfant/gallery2/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Enfant Gallery 3</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../enfant/gallery3/<?php echo $i; ?>.jpg" width="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../enfant/gallery3/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images Enfant Gallery 4</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 12; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../enfant/gallery4/<?php echo $i; ?>.jpg" width="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../enfant/gallery4/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
<a>Images global gauche</a>
<div align="center">
<table style="border: 0; padding: 10px; margin: 10px;">
<?php
for($i = 1; $i <= 33; $i++) { 
?>
	<tr class="<?php if($i%2==0) echo "odd1"; else echo "odd2"; ?>"><td align="center"><img src="../leftimg/<?php echo $i; ?>.jpg" height="200"/></td><td>Remplacer cette image <br/><form action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="MAX_FILE_SIZE" value="30000" /><input type="file" name="img"> <input type="hidden" name="fname" value="../leftimg/<?php echo $i; ?>.jpg"> <input type="submit" value="Modifier"> </form></td></tr>
<?php
} 
?>
</table>
</div>
</div>
</body>
</html>