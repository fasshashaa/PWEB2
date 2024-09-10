<?php
//Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    //Tambahkan constructor pada kelas Mahasiswa
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Buat metode tampilkanData() dalam class Mahasiswa.
    public function tampilkanData() {
        return "Nama    : " . $this->nama . "<br>NIM    : " . $this->nim . "<br>Jurusan : " . $this->jurusan;
    }

    //Buat metode updateJurusan() dalam kelas Mahasiswa
    public function updateJurusan($jurusan2) {
        $this->jurusan = $jurusan2;
    }

    // Setter untuk atribut nim
    public function setNim($nim2) {
        $this->nim = $nim2;
    }
}

// Instansiasi objek 
$mhs1= new Mahasiswa("Abyan Jaya", "2302443035", "Multimedia");

// Menampilkan data mahasiswa
echo "DATA MAHASISWA";
echo "<br>";
echo $mhs1->tampilkanData();
echo "<br>";
echo "<br>";

// Mengubah jurusan 
$mhs1->updateJurusan("Teknik Pertambangan");

// Mengubah NIM 
$mhs1->setNim("2302440099");

// Menampilkan data mahasiswa setelah di update
echo "DATA MAHASISWA DENGAN SETTER";
echo "<br>";
echo $mhs1->tampilkanData();
?>
