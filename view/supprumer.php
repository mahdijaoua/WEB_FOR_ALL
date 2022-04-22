<?php 

include_once '../config.php';
include_once '../controller/servicec.php';


$produitc=new servic();
$prod=$produitc->supprimerproduit($_POST['id']);


header('location:produit.php');

?>


