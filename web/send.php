<?php
// En PHP < 4.1.0, $HTTP_POST_FILES doit �tre utilis�
//    � la place de $_FILES.

$uploaddir = './test/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a �t� t�l�charg�
           avec succ�s. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par t�l�chargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de d�bogage :';
print_r($_FILES);

echo '</pre>';

?>