 <?php
 /*
 Nama : Fassha Fanny Purwanto
 Kelas : TI - 2B
 NPM : 230202035 */

//Mendefinisikan Class
class Buku {

    //Atribut atau properties
    public $judul;
    public $penulis;

    //Constructor
    public function __construct($judul, $penulis){
        $this->judul = $judul;        
        $this->penulis = $penulis;        

    }
    //Method atau Function
    public function tampilkanInfo() {
        return "Judul : $this->judul <br> Penulis: $this->penulis";
    }
}

//Instansiasi Objek
$buku1 = new Buku ("Pemrograman PHP di PWEB2", "FASSHA FANNY");
echo $buku1->tampilkanInfo();
?>