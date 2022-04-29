<?php 
include_once '../model/categorie.php';
include_once'../controller/servicec.php';

//verifier le collect des donner de puis le formulair
if(!isset($_POST['id'])||!isset($_POST['nom']))
{
	echo "erreur de chargement ";
}

$allowedCategori = ['e_scooter','e_velo','e_vtt','e_trotinett','e_bord'];
if (in_array($_POST['nom'],$allowedCategori))
{
$service=new categorie ( $_POST['id'],$_POST['nom'],0);

//si pas d'erreur alor creation du var service de type categorie et l'inserrer dans le tab

$produitc=new servic();
$produitc->Ajoutercategorie($service);
header('location:categorie.php');//pour retourner a afficher categorie.php pres l'ajout
}
else
echo "erreur de saisit";
?>