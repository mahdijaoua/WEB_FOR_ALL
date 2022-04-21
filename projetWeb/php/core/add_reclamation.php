<?php  
ob_start();

require 'reclamationManager.php' ;


if(isset($_POST['id']))
{
  $manager= new reclamationManager() ;
    if(!empty($_POST['id']) &&  !empty($_POST['date']) && !empty($_POST['category']) && !empty($_POST['client_id']) 
    && !empty($_POST['time']) && !empty($_POST['type']) )
    {
      $reclamation= new Reclamation(array(
        
        'id'=>$_POST['id'],
        'date'=>$_POST['date'],
        'category'=>$_POST['category'],
        'client_id'=>$_POST['client_id'],
        'time'=>$_POST['time'],
        'type'=>$_POST['type'],
        
        )) ;
    
        $manager->add($reclamation) ;
    
      
    }
    
}
header('Location: ./../../backend/reclamation-add.php');
