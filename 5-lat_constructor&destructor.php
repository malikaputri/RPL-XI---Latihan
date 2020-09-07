<?php
class Contoh{

	public function __construct(){
		echo "<p>Jalankan Koneksi ke Database</p>";
	}

	public function jalan(){
		echo "Jalankan Program";
	}

	public function __destruct(){
		echo "<p>Hentikan Koneksi ke Database</p>";
	}

}

$Program = new Contoh;
echo $Program->jalan()

?>