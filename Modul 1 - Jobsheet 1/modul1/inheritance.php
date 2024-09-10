<?php
/*
 Nama : Fassha Fanny Purwanto
 Kelas : TI - 2B
 NPM : 230202035 */

//Mendefinisikan class Produk
class Produk {
    protected $nama;

    //Construct
    public function __construct($nama) {
        $this->nama = $nama;
    }

    //function get
    public function getNama(){
        return $this->nama;
    }
}

//mendefinisikan class Buku turunan class Produk
class Buku extends Produk {
    private $penulis;
    public function __construct($nama, $penulis){
        parent::__construct($nama);
        $this->penulis = $penulis;
    }
public function getPenulis (){
    return $this->penulis;        
    }
}

//Instansiasi Objek
$buku1 = new Buku ("Pemrograman web 2", "FASSHA FANNY");
echo $buku1->getpenulis();
?>