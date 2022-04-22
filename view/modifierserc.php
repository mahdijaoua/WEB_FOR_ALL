<?php 
include_once '../model/categorie.php';
include_once'../controller/servicec.php';


if(!isset($_POST['id'])||!isset($_POST['nom']))
{
	echo "erreur de ";
}

$service=new categorie ($_POST['id'],$_POST['nom']);

$produitc=new servic();
$produitc->Modifiercategorie($service);
header('location:categorie.php');


?>