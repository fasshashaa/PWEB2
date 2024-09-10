<?php
/*
 Nama : Fassha Fanny Purwanto
 Kelas : TI - 2B
 NPM : 230202035 */

// Membuat class Pengguna
class Pengguna
{

    //Atribut
    protected $nama;

    // Function construct
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    // Method untuk getNama
    public function getNama()
    {
        return $this->nama;
    }
}

// Membuat class Dosen yang mewarisi Pengguna
class Dosen extends Pengguna
{
    private $mataKuliah;

    // Function construct
    public function __construct($nama, $mataKuliah)
    {
        // Memanggil constructor dari class 'orang tua'
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Method Getter untuk mataKuliah
    public function getMataKuliah()
    {
        return $this->mataKuliah;
    }
}

// Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Ami Riyanti", "PWEB 3");

// Menampilkan data dosen
echo "Nama Dosen  : " . $dosen1->getNama() . "<br>";
echo "Mata Kuliah : " . $dosen1->getMataKuliah();
