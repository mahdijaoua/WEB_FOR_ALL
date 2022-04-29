<?php 
include_once '../model/produit.php';
include_once'../controller/servicec.php';

//methode ajouter produit

//verifier le collect des donner de puis le formulair
if(!isset($_POST['id'])||!isset($_POST['couleur'])||!isset($_POST['kilometrage'])||!isset($_POST['matricule'])||!isset($_POST['id_cat']))
{
	echo "erreur de chargement";
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
} //($_POST['couleur']=='rouge')||($_POST['couleur']=='bleu')||($_POST['couleur']=='orange')||($_POST['couleur']=='vert')||($_POST['couleur']=='noir')||($_POST['couleur']=='blanc')
$allowedColer = ['rouge','bleu','vert','blanc','noir'];
$motif1 = '#(TUN)#';
$motif2 = '/^[1-999]/';
$motif3 = '/[1-9999]$/';
if (in_array($_POST['couleur'],$allowedColer) && ($_POST['kilometrage'] >= 0 ) && (preg_match ( $motif1 , $_POST['matricule']  )) && (preg_match ( $motif2 , $_POST['matricule']  )) && (preg_match ( $motif3 , $_POST['matricule']  )))
{
 $service=new produit($_POST['id'],$_POST['couleur'],$_POST['kilometrage'],$_POST['matricule'],$_FILES['image']['name'],$_POST['id_cat']);
//si pqs d'erreur alors creation du variable service de type produit et l'ajouter au tab
   $id_categ = $_POST['id_cat'];
   $produitc=new servic();
   $produitc->Ajouter($service);
   //$produitc->ModifieOccPlus($service);
   $con = mysqli_connect("localhost","root","","produits");
   $sql = "UPDATE `categorie` SET occ_num= occ_num + 1 WHERE `id`= $id_categ  ";
   $fire = mysqli_query($con,$sql);

   header('location:produit.php');
}
else
echo "erreur de saisit";
?>

