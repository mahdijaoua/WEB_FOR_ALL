<?php
	// header("Content-Type: application/xls");    
	// header("Content-Disposition: attachment; filename=file.xls");  
	// header("Pragma: no-cache"); 
	// header("Expires: 0");

	require_once '../../config.php';
	
	
	// $output = "";
	
	// $output .="
	
	// ";
	{
		$config = config::getConnexion();
		
			$querry = $config->prepare('
			select nom as Nom , categorie as categorie , prix as prix   from article');
			$querry->execute();
			$data = $querry->fetchAll();
			// print_r($data);exit();
			// $datas = array();
	// 		foreach($data as $article)
	// 		{
	// 			$datas[]= array (

					
    //                 'nom'=>$article->getNom(),
    //                 'categorie'=>$article->getCategorie(),
    //                 'description'=>$article->getDescription(),

	// 			);
			require_once 'txt.php';
		txt::export($data,'Export fichier');
		}

	

	

	
	// $output .="
	// 		</tbody>
			
	// 	</table>
	// ";
	
	// echo $output;
	
	
?>