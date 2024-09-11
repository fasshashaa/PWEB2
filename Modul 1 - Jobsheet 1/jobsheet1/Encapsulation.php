<?php
/*
 Nama : Fassha Fanny Purwanto
 Kelas : TI - 2B
 NPM : 230202035 */

// Membuat class Mahasiswa
class Mahasiswa
{

    // Membuat atribut private
    private $nama;
    private $nim;
    private $jurusan;

    // Method Getter untuk nama
    public function getNama()
    {
        return "Nama : $this->nama";
    }

    // Method Setter untuk nama
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Method Getter untuk nim
    public function getNim()
    {
        return "NIM : $this->nim";
    }

    // Method Setter untuk nim
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    // Method Getter untuk jurusan
    public function getJurusan()
    {
        return "Jurusan : $this->jurusan";
    }

    // Method Setter untuk jurusan
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
}

// Instansiasi Objek
$mhs1 = new Mahasiswa();

// Mengubah data menggunakan metode setter
$mhs1->setNama("Fassha Fanny");
$mhs1->setNim("230202036");
$mhs1->setJurusan("Teknologi");

// Menampilkan data setelah perubahan menggunakan getter
echo $mhs1->getNama();
echo "<br>";
echo $mhs1->getNim();
echo "<br>";
echo $mhs1->getJurusan();
?>
