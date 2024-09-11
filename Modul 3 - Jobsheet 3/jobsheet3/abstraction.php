<?php
// Kelas abstrak Course
abstract class Course {
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
private $nama;
    private $media;

   public function setNama($nama) {
    $this->nama = $nama;
   }
   public function setMedia($media) {
    $this->media = $media;
   }
    public function getCourseDetails() {
        return "Online course : ".$this->nama. "<br>" ."Media : ".$this->media;
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    private $nama;
    private $lokasi;

    public function setNama($nama) {
        $this->nama = $nama;

       }

       public function setLokasi($lokasi) {
        $this->lokasi = $lokasi;
       }

    public function getCourseDetails() {
        return "Offline course : ". $this->nama."<br>". "Lokasi : " .$this->lokasi;
    }
}

$onlinecourse1 =  new OnlineCourse();
$offlinecourse1 =  new OfflineCourse();

// Mengatur detail kursus untuk OnlineCourse
$onlinecourse1->setNama("Music Practice");
$onlinecourse1->setMedia("GMeet");


// Mengatur detail kursus untuk OfflineCourse
$offlinecourse1->setNama("Piano Practice");
$offlinecourse1->setLokasi("Petrof Piano House");


// Menampilkan detail kursus
echo $onlinecourse1->getCourseDetails(); 
echo "<br>";
echo "<br>";
echo $offlinecourse1->getCourseDetails();
?>