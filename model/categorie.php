<?php
class categorie{
	
private $id;
private $nom;
private $occ_num;
public  function __construct($id,$nom)
{
	$this->id=$id;
    $this->nom=$nom;
	$this->occ_num=0;
}

public  function getid()
{
	return $this->id;
}
public function getnom()
{
	return $this->nom;
}
public function getocc_num()
{
	return $this->occ_num;
}


}



?>