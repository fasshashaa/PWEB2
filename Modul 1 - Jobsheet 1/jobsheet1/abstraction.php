<?php
/*
 Nama : Fassha Fanny Purwanto
 Kelas : TI - 2B
 NPM : 230202035 */

// Membuat class abstrak Pengguna
abstract class Pengguna
{

    //absract method aksesFitur
    abstract public function aksesFitur();
}

// Membuat class Dosen yang mewarisi Pengguna
class Dosen extends Pengguna
{


    // method aksesFitur pada kelas Dosen
    public function aksesFitur()
    {
        return "Mengubah, Menambah, Menghapus, Melihat ";
    }
}

// Membuat class Mahasiswa yang mewarisi Pengguna
class Mahasiswa extends Pengguna
{

    // method aksesFitur pada kelas Mahasiswa
    public function aksesFitur()
    {
        return "Melihat ";
    }
}


// Membuat objek Mahasiswa dan Dosen
$mahasiswa = new Mahasiswa();
$dosen = new Dosen();

// Memanggil metode aksesFitur()
echo "Fitur Mahasiswa: " . $mahasiswa->aksesFitur() . "<br>";
echo "Fitur Dosen: " . $dosen->aksesFitur() . "<br>";
