<?php  


require 'reclamationManager.php' ;


if(isset($_GET['id']))
{
  $manager= new ReclamationManager() ;

      
    
        $manager->delete($_GET['id']) ;
    
        header('Location: ../../../backend/uni-courses.php'); 
    
     
}
?>
