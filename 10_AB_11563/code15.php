<?php
// buat abstract class 
abstract class smartphone {
    public static function hidupkan_komputer() {
        echo "Hidupkan Komputer";
    }
    // buat abstract method   
    abstract public function lihat_spec();
    abstract public function lihat_processor();
    abstract public function lihat_harddisk();
    abstract public function lihat_pemilik();
}
class tablet extends smartphone {
    // .. isi class tablet
	public function lihat_spec() {
		return "Lihat spec tablet...";
	}
	
	public function lihat_processor() {
		return "Lihat processor tablet...";
	}
	
	public function lihat_harddisk() {
		return "Lihat harddisk tablet...";
	}
	
	public function lihat_pemilik() {
		return "Pemilik tablet adalah...";
	}
}

$tablet1 = new tablet();
echo $tablet1->lihat_spec();
echo "<br>";
echo $tablet1->lihat_processor();
echo "<br>";
echo $tablet1->lihat_harddisk();
echo "<br>";
echo $tablet1->lihat_pemilik();

?>
