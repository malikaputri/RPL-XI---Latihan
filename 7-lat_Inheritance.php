<?php

class Mobil{    
    var $nama,
    	$merk,
    	$warna,
    	$kecepatanMaks,
    	$jumlahPenumpang ;

    public function tambahKecepatan(){
 		return "Kecepatan bertambah";
 	}
 }

class MobilSport extends Mobil{
	public $turbo = false;

	public function aktifkanTurbo(){
		$this->turbo=true;
		return "Turbo diaktifkan";
	}
}
 
$mobilku = new MobilSport();
echo $mobilku->tambahKecepatan();
echo "<br>";
echo $mobilku->aktifkanTurbo();

?>