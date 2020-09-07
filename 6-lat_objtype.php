<?php

class Sapa{    
    var $str ;
    public function tampung($temp){
 		return $this->str=$temp;
 	}
 
	public function cetak(){
 		echo $this->str; // mencetak nilainya (pengolahan data)
	}
}
 
$pesan = new Sapa();

//memanggil method tampung dan memberikan nilainya
$pesan->tampung("Hello World!");

$pesan->cetak(); // memanggil method cetak
?>