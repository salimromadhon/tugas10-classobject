<?php
class smartphone {
    protected static function beli_smartphone() {
        return "Beli smartphone baru";
    }
}
class smartphone_dualsim extends smartphone {
    private static function beli_smartphone_dualsim() {
        return "Beli smartphone dual sim baru";
    }
    public static function beli_semua() {
		//lengkapi baris kode berikut ini
		echo parent::beli_smartphone() . "<br>";
        echo self::beli_smartphone_dualsim();
    }
}
smartphone_dualsim::beli_semua();
?>
