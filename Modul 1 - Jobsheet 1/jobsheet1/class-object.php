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

    //Membuat function tampilkanData()
    public function tampilkanData(){
        return "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan";
    }
}
//Instansiasi Objek
$mhs1 = new Mahasiswa ();
echo $mhs1->nama = "Fassha Fanny Purwanto"; 
echo "<br>";
echo $mhs1->nim = "230202035";
echo "<br>";
echo $mhs1->jurusan = "Komputer dan Bisnis";
?>