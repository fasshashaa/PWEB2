<?php
/*
Nama : Fassha Fanny Purwanto
Kelas : TI - 2B
NPM : 230202035 */

//definisi class mobil
class Mobil {
    //Atribut
    public $merk;
    public $warna;

//Constructor
public function __construct($merk, $warna) {
    $this->merk = $merk;
    $this->warna = $warna;
}

//method atau function untuk mengembalikan nilai
public function deskripsi(){
    return "Mobil ini adalah $this->merk berwarna $this->warna";
}
}

//Instansiasi Objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();
?>