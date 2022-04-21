<?php 

class Reclamation
{
  private $id ;
  private $time;
  private $date;
  private $category;
  private $client_id;
  private $type;

/* const ME=1 ;
const DEAD=2 ;
const DAMAGED=3 ; */

  public function __construct(array $data)        
  {
    $this->hydrate($data) ;
  }

  public function hydrate(array $data)
  {
    foreach ($data as $key=>$value )
    {
      $method='set'.ucfirst($key) ;
       if(method_exists($this,$method))
       {
         $this->$method($value) ;
       }
    }
  }

  public function id(){return $this->id ;}
  public function time(){return $this->time ;}
  public function date(){return $this->date ;}
  public function category(){return $this->category ;}
  public function client_id(){return $this->client_id ;}
  public function type(){return $this->type ;}


  public function setId($id)
  {
    $this->id=$id ;
  }
  public function setTime($time)
  {
    $this->time=$time ;
  }
  public function setDate($date)
  {
    $this->date=$date ;
  }
  public function setCategory($category)
  {
    $this->category=$category ;
  }
  public function setClient_id($client_id)
  {
    $this->client_id=$client_id ;
  }
  public function setType($type)
  {
    $this->type=$type ;
  }
}