<?php
/*
Nama : Fassha Fanny Purwanto
Kelas : TI - 2B
NPM : 230202035 */

//Mendefinisikan class Buku
class Buku {
    //Atribut
    public $judul;
    public $penulis;

    //Function Construct
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    //Method untuk mengembalikan nilai
    public function tampilkanInfo() {
        return "Buku $this->judul ditulis oleh $this->penulis";
    }
}
//Instansiasi Objek
$buku1 = new Buku ("AKU", "John Doe");
echo $buku1->tampilkanInfo();
?>