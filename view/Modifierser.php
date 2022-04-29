<?php 
include_once '../model/produit.php';
include_once'../controller/servicec.php';


if(!isset($_POST['id'])||!isset($_POST['couleur'])||!isset($_POST['kilometrage']))
{//veriffier le collect des donner de puis le formulair de modification
	echo "erreur de modification";
}

$allowedColer = ['rouge','bleu','vert','blanc','noir'];

if (in_array($_POST['couleur'],$allowedColer) && ($_POST['kilometrage'] >= 0 ))
{
$service=new produit( $_POST['id'],$_POST['couleur'],$_POST['kilometrage'],$_POST['matricule'],$_FILES['image']['name'],$_POST['id_cat']);
//si pas d'erreur alors creation du variable service de type produit avec le constructeur et l'inserrer dans le tab

$produitc=new servic();
$produitc->Modifierproduit($service);
header('location:produit.php');
}
else
echo "erreur de saisit";
?>