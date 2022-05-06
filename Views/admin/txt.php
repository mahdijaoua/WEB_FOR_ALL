<?php 
class txt{
static function export($datas,$filename){
    header("Content-Type: application/txt");    
	header("Content-Disposition: attachment; filename=file.txt");  
	// header("Pragma: no-cache"); 
	// header("Expires: 0");

    $i =0;
    foreach($datas as $v){
        if($i==0){
        echo '"'.implode('";"',array_keys($v)).'"'."\n";

    }
    echo '"'.implode('";"',$v).'"'."\n";
    $i++;
}
}
}
