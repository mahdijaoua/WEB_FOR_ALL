<?php  

/* require 'php/reclamation/entities/reclamation.php' ; */
 require __DIR__.'/../entities/reclamation.php' ;

class ReclamationManager
{

   private $bd ;

   public function __construct()
   {
     
      try
      {
       $this->bd = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
   }


  public function add(Reclamation $Reclamation)
  {
    $reponse=$this->bd->prepare ('INSERT INTO reclamation (id,type,id_client,categorie,time,date)
     VALUES(:id,:type,:client_id,:category,:time,:date)') ;
    $reponse->execute(array(
     'id'=>$Reclamation->id() ,
     'time'=>$Reclamation->time() ,
     'date'=>$Reclamation->date() ,  
     'category'=>$Reclamation->category() ,   
     'client_id'=>$Reclamation->client_id() ,    
     'type'=>$Reclamation->type()   

    ));
  }
  public function update(Reclamation $Reclamation)
  {
    
    $reponse=$this->bd->prepare ('UPDATE reclamation SET id=:id,date=:date,client_id=:client_id,type=:type  WHERE id=:id') ;
    $reponse->execute(array(
        'id'=>$Reclamation->id() ,
        'name'=>$Reclamation->time() ,
        'date'=>$Reclamation->date() ,  
        'category'=>$Reclamation->category() ,   
        'client_id'=>$Reclamation->client_id() ,    
        'type'=>$Reclamation->type()   

    ));
  }
  public function afficher()
  {
    //$reponse=$this->bd->query( 'SELECT * FROM reclamation '  ) ;
    $reponse=$this->bd->query('SELECT a.id ,date,category,a.client_id, AS client_name,type
     FROM reclamation a INNER JOIN instructor b ON a.instructor_id=b.id ' ) ; 

    return $reponse ; 
  }
  public function get($id)
  {
    $reponse=$this->bd->prepare( 'SELECT * FROM reclamation WHERE id=:id' ) ;
/*     $reponse=$this->bd->prepare('SELECT a.id ,a.name ,bio,img,date,category,a.instructor_id,b.name,price,type FROM course a 
    INNER JOIN instructor b ON a.instructor_id=b.id WHERE id=:id' ) ; */
    $reponse->execute(array(
     'id'=>$id
    ));

    return $reponse ;
  }
  public function delete($id)
  {
    $reponse=$this->bd->prepare( 'DELETE FROM reclamation WHERE id=:id' ) ;
    $reponse->execute(array(
     'id'=>$id
    ));

    
  }
}
?>