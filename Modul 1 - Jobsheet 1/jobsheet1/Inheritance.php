<?php
/*
 Nama : Fassha Fanny Purwanto
 Kelas : TI - 2B
 NPM : 230202035 */

// Membuat class Pengguna
class Pengguna
{

    //Atribut
    public $nama;

    // Method untuk getNama
    public function getNama()
    {
        return $this->nama;
    }
}

// Membuat class Dosen yang mewarisi Pengguna
class Dosen extends Pengguna
{
    public $mataKuliah;

    // Method Getter untuk mataKuliah
    public function getMataKuliah()
    {
        return $this->mataKuliah;
    }
}

// Instansiasi objek dari class Dosen
$dosen1 = new Dosen();
$dosen1 -> nama = "Amy Riyanti";
$dosen1 -> mataKuliah = "P-WEB 2";

// Menampilkan data dosen
echo "Nama Dosen  : " . $dosen1->getNama() . "<br>";
echo "Mata Kuliah : " . $dosen1->getMataKuliah();
