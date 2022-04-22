<?php 

include_once '../config.php';
include_once '../controller/servicec.php';


$produitc=new servic();
$prod=$produitc->supprimercategorie($_POST['id']);

header('location:categorie.php');

?>


