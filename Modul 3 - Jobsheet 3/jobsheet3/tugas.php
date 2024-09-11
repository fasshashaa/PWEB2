<?php
// Kelas Person
abstract class Person {
    protected $name;

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        return $this->name = $name;
    }

    // Metode abstrak yang akan di-override oleh kelas turunannya
    abstract public function getRole();
}

// Kelas Dosen yang mewarisi dari Person
class Dosen extends Person {
    private $nidn;

    // Getter dan Setter untuk atribut nidn
    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    // Override metode getRole()
    public function getRole() {
        return "Dosen";
    }
}

// Kelas Mahasiswa yang mewarisi dari Person
class Mahasiswa extends Person {
    private $nim;

    // Getter dan Setter untuk atribut nim
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Override metode getRole()
    public function getRole() {
        return "Mahasiswa";
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {

    abstract public function Submission();
}

// Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    
    public function Submission() {
        return "Pengajuan Jurnal dan penilitian Dosen";
    }
}

// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
   
    public function Submission()
    {
        return "Pengajuan jurnal Mahasiswa";
    }
}

$dosen1 = new Dosen();
$dosen1->setName("Abyan Jaya Prakasa");
$dosen1->setNidn("252525625");
echo "Nama Dosen    : " . $dosen1->getName() . "<br>";
echo "Status    : " . $dosen1->getRole() . "<br>";
echo "NIP / NIDN    : " . $dosen1->getNidn() . "<br>";

$jurnalDosen1 = new JurnalDosen();
echo $jurnalDosen1->Submission(). "<br>";
 echo "<br>";

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setName("Fassha Fanny");
$mahasiswa1->setNim("2302020235");
echo "Nama Mahasiswa    : " . $mahasiswa1->getName() . "<br>";
echo "Status : " . $mahasiswa1->getRole() . "<br>";
echo "NIM : " . $mahasiswa1->getNim() . "<br>";

$jurnalMahasiswa1 = new JurnalMahasiswa();
echo $jurnalMahasiswa1->Submission() . "<br>";
?>
