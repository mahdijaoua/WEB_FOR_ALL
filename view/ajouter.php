<?php 
include_once '../model/produit.php';
include_once'../controller/servicec.php';

//methode ajouter produit

//verifier le collect des donner de puis le formulair
if(!isset($_POST['id'])||!isset($_POST['couleur'])||!isset($_POST['kilometrage'])||!isset($_POST['matricule'])||!isset($_POST['id_cat']))
{
	echo "erreur ";
}
//verifier le collect du fichier image de puis le formulair
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','jfif'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
                        echo "L'envoi a bien été effectué !.<br>"; 
                      //  echo  'uploads/' . basename($_FILES['screenshot']['name']);
                }
        }
} 
 $service=new produit($_POST['id'],$_POST['couleur'],$_POST['kilometrage'],$_POST['matricule'],$_FILES['image']['name'],$_POST['id_cat']);
//si pqs d'erreur alors creation du variable service de type produit et l'ajouter au tab

   $produitc=new servic();
   $produitc->Ajouter($service);
   header('location:produit.php');


?>

