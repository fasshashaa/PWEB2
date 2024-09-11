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
    public $studentID;

    //membuat method getStudentID
    public function getStudentID() {
        return $this->studentID;
    }
}
$student = new Student();
echo "Nama : ". $student->name = "Fassha Fanny Purwanto"; 
echo"<br>";
echo "Student ID : ". $student->studentID = "274837264";
echo "<br>";
?>