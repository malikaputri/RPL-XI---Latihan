<?php 
	class Mobil
	{
		public $merk;
		public $warna;

		public function on()
		{
			return "Hidupkan mobil " . $this->merk . " berwarna " . $this->warna;
 		}
 		public function off()
 		{
 			return "Matikan mobil " . $this->merk . " berwarna " . $this->warna;
 		}
	}

	$mobil1 = new Mobil();
	$mobil1->merk = "BMW";
	$mobil1->warna = "biru";
	echo $mobil1->on() . "<br>";
	
	$mobil2 = new Mobil();
	$mobil2->merk = "Ferrari";
	$mobil2->warna = "hijau";
	echo $mobil2->off();

?>
