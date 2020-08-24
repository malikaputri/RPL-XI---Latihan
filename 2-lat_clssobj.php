<?php 
	class laptop
	{
		public $merk;

		public function on()
		{
			return "Hidupkan laptop ".$this->merk." saat pagi";
 		}
 		public function off()
 		{
 			return "Matikan laptop ".$this->merk." saat malam";
 		}
	}

	$laptop1 = new laptop();
	$laptop1->merk = "asus";
	echo $laptop1->on()."<br>";
	echo $laptop1->off();
?>