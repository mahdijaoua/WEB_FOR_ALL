<!DOCTYPE html>
<html>

<?php 
include_once '../config.php';
class servic{

	
	function afficherproduit(){
		$sql="SELECT * FROM produit

		";
		$db=config::getConnexion(); // :: because "getconnection" is a static function no need for an instant it works with the class it self
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	}





	   function supprimerproduit($numprod){
 		$sql="DELETE  FROM produit WHERE `id`= $numprod ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}






 function Modifierproduit($ser)
 {
 $sqlc= "UPDATE `produit` SET couleur=:couleur,kilometrage=:kilometrage WHERE id=:id  ";
 $db=config::getConnexion();
 try{ $recipesStatement = $db->prepare($sqlc);
	//utilisation du prepere au lieu de query car c plus securiser et elle protege contre les injection sql
 	$recipesStatement->execute([ 'couleur' =>$ser->getcouleur(),
	 							 'kilometrage' =>$ser->getkilometrage(), 		            
 					              'id' =>$ser->getid(),
 		         ]);
 }
  catch(Exception $e){ 
	
 			 die("erreur:".$e->getMessage());
 }

 }






 function Ajouter($ser){
 $sql= "INSERT INTO `produit` VALUES (:id, :couleur,:kilometrage,:matricule,:image,:id_cat)";
 $db=config::getConnexion();
 try{ $recipesStatement = $db->prepare($sql);
 	$recipesStatement->execute([ 'id'=>$ser->getid(),
 		            'couleur' =>$ser->getcouleur(),
 		            'kilometrage'=>$ser-> getkilometrage(),// => works for assosiativity as if we say 'dave'=>'kkkloi'
					 'matricule'=>$ser-> getmatricule(),// dave's password is kkkloi
 				'image'=>$ser->getimage(),
 		            'id_cat'=>$ser->getidc(),
 		           
 ]);
  }
  catch(Exception $e){ 
 	
 			 die("erreur:".$e->getMessage());

 }

 }




//************************************************************************************* */






function affichercategori(){
 	$sql="SELECT * FROM categorie

 	";
 	$db=config::getConnexion();
 	try{
 		$liste=$db->query($sql);
 		return $liste;
 	}
 	catch(Exception $e){
 		die("erreur:".$e->getMessage());
 	}
 }






function supprimercategorie($numadh){
$sql="DELETE  FROM categorie WHERE `id`= $numadh ";
	$db=config::getConnexion();
	try{
		$liste=$db->query($sql);

	}catch(Exception $e){
		die("erreur:".$e->getMessage());
}
}






function Modifiercategorie($ser)
{
$sqlc= "UPDATE `categorie` SET nom=:nom WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
$recipesStatement->execute([ 'nom'=>$ser->getnom(),
				'id'=>$ser->getid(),
			 ]);
}
catch(Exception $e){ 
 
		 die("erreur:".$e->getMessage());
}

}








function Ajoutercategorie($ser){
$sql= "INSERT INTO `categorie` VALUES (:id, :nom, :occ_num)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
$recipesStatement->execute([ 'id'=>$ser->getid(),
				'nom' =>$ser->getnom(),
				'occ_num'=>NULL,



]);
}
catch(Exception $e){ 
 
		 die("erreur:".$e->getMessage());

}

}
}
?>
</html>