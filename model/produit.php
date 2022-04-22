<?php
class produit{
	
private $id;
private $couleur;
private $kilometrage;
private $matricule;
private $image;
private $id_cat;

public  function __construct($id,$c,$k,$m,$image,$id_cat)
{
	 $this->id=$id;
    $this->couleur=$c;
    $this->kilometrage=$k;
    $this->matricule=$m;
    $this->image=$image;
    $this->id_cat=$id_cat;
   


}



 
function getid(){ 
   return $this->id;
}
function getcouleur(){
   return $this->couleur;
}


function getkilometrage() {
   return $this->kilometrage;
}



function getmatricule() {
   return $this->matricule;
}


function getimage() {
   return $this->image;
}   

function getidc() {
   return $this->id_cat;
}   



}




?>