<?php
// Kelas abstrak Course
abstract class Course {

    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
private $nama;
    private $media;

    public function __construct($nama, $media){
        $this->nama = $nama;
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

    public function __construct($nama, $lokasi){
        $this->nama = $nama;
        $this->lokasi = $lokasi;
    }
    public function getCourseDetails() {
        return "Offline course : ". $this->nama."<br>". "Lokasi : " .$this->lokasi;
    }
}

$onlinecourse1 =  new OnlineCourse("Musik Piano", "Gmeet");
$offlinecourse1 =  new OfflineCourse("Biola", "Petrof House");

 echo $onlinecourse1->getCourseDetails(). "<br>";
 echo $offlinecourse1->getCourseDetails(). "<br>";
 ?>