<?php
// membuat Kelas Person
class Person {
    public $name;

    //membuat method getName
    public function getName() {
        return $this->name;
    }
}


// membuat class Student yang mewarisi Person
class Student extends Person {
    private $studentID;

    //membuat method getStudentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Override metode getName()
    public function getName() {
        return "Nama Student : " . $this->name;
    }

    // Getter dan Setter untuk atribut name
    public function getNamePrivate() {
        return "Nama Student : ". $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Getter dan Setter untuk atribut studentID
    public function getStudentIDPrivate() {
        return "Student ID : ". $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

$student1 = new student ();
$student1->setStudentID("202300900");
$student1->setName("Desta");
echo $student1->getNamePrivate(). "<br>";
echo $student1->getStudentIDPrivate().  "<br><br>";

$student1->setStudentID("2023983002");
$student1->setName("Fassha Fanny ");
//menampilkan data setelah update menggunakan set
echo "Data Terbaru";
echo "<br>";
echo $student1->getName(). "<br>";
echo "Student ID : ".$student1->getStudentID(). "<br><br>";
?>