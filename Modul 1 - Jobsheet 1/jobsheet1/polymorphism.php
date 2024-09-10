<?php
/*
 Nama : Fassha Fanny Purwanto
 Kelas : TI - 2B
 NPM : 230202035 */


// Membuat class Pengguna
class Pengguna
{
    //Function Construct
    public function __construct() {}

    // Method aksesFitur 
    public function aksesFitur()
    {
        return  "Fitur Pengguna ";
    }
}

// Membuat class Dosen yang mewarisi Pengguna
class Dosen extends Pengguna
{
    public function __construct() {}

    //Method aksesFitur() pada class Dosen
    public function aksesFitur()
    {
        return "Melihat, Menambah, Menghapus, Mengubah ";
    }
}

// Membuat class Mahasiswa yang mewarisi Pengguna
class Mahasiswa extends Pengguna
{

    public function __construct() {}

    // Method aksesFitur pada class Mahasiswa
    public function aksesFitur()
    {
        return "Melihat";
    }
}

// Membuat objek Mahasiswa dan Dosen
$mahasiswa = new Mahasiswa();
$dosen = new Dosen();
$pengguna = new pengguna();

// Memanggil metode aksesFitur()
echo $pengguna ->aksesFitur() ."<br>";
echo "Fitur Mahasiswa   : " . $mahasiswa->aksesFitur() . "<br>";
echo "Fitur Dosen   : " . $dosen->aksesFitur() . "<br>";
