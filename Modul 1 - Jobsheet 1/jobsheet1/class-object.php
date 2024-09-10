<?php
/*
 Nama : Fassha Fanny Purwanto
 Kelas : TI - 2B
 NPM : 230202035 */

//Membuat class Mahasiswa
class Mahasiswa {

    //Membuat atribut nama, nim, dan jurusan
    public $nama;
    public $nim;
    public $jurusan;

// Membuat construct
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //Membuat function tampilkanData()
    public function tampilkanData(){
        return "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan";
    }
}
//Instansiasi Objek
$mhs1 = new Mahasiswa ("Fassha Fanny Purwanto", "230202035", "Komputer dan Bisnis");
echo $mhs1->tampilkanData();
?>