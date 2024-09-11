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
    
    // Override metode getName()
    public function getName() {
        return "Student : " . $this->name;
    }
}
// Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    public $teacherID;

    public function getTeacherID() {
        return $this->teacherID;
    }

    // Override metode getName()
    public function getName() {
        return "Teacher: " . $this->name;
    }
}

$student1 = new student();
$teacher1 = new teacher();

echo "Nama student : " .$student1->name = "Fassha Fanny Purwanto". "<br>";
echo "Student ID : ".$student1->studentID = "230202035". "<br><br>";
echo "Nama Teacher : ". $teacher1 ->name = "Dimas M.M". "<br>";
echo "Teacher ID : ". $teacher1->teacherID = "230209007". "<br>";
?>
