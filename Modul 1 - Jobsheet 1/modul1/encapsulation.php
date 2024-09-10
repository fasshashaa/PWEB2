<?php
/*
 Nama : Fassha Fanny Purwanto
 Kelas : TI - 2B
 NPM : 230202035 */

 //Mendefinisikan class Buku
class Buku {
    private $judul;
    private $penulis;

    //Function construct
    public function __construct($judul, $penulis) {
        $this->judul = $judul;        
        $this->penulis = $penulis;        

    }

    //function get
    public function getJudul() {
        return $this->judul;
    }
    public function getPenulis() {
        return $this->penulis;
    }

    //function set
    public function setJudul($judul) {
       return $this->judul = $judul;
    }
    
}

//Instansiasi Objek
$buku1 = new Buku("Pemrograman PHP", "FASSHA FANNY");
echo $buku1->getJudul();
echo "<br>";
echo $buku1->getPenulis();
echo "<br>";
echo $buku1->setJudul("BumiApi");



?>