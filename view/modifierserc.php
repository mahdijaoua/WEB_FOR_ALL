<?php 
include_once '../model/categorie.php';
include_once'../controller/servicec.php';


if(!isset($_POST['id'])||!isset($_POST['nom']))
{
	echo "erreur de modification";
}

$allowedCategori = ['e_scooter','e_velo','e_vtt','e_trotinett','e_bord'];
if (in_array($_POST['nom'],$allowedCategori))
{
$service=new categorie ($_POST['id'],$_POST['nom']);

$produitc=new servic();
$produitc->Modifiercategorie($service);
header('location:categorie.php');
}
else
echo "erreur de saisit";
?>