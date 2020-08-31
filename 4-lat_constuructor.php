<?php 
	class Mobil
	{
		public $merkmob;
		public $warna;

		public function cetak(){
			return "Nama mobil: $this->merkmob, Warna: $this->warna";
		}		
 		public function __construct($merkmob="merk", $warna='warna'){
 			$this->merkmob = $merkmob;
 			$this->warna = $warna;
 		}
	}

	$mobil1 = new Mobil("BMW", "Biru");
	echo $mobil1->cetak();
	echo "<br>";
	
	$mobil2 = new Mobil("Ferrari", "Hijau");
	echo $mobil2->cetak();

?>