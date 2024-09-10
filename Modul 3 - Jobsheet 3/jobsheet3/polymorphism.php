<?php
// membuat Kelas Person
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    //membuat method getName
    public function getName() {
        return $this->name;
    }
}


// membuat class Student yang mewarisi Person
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    //membuat method getStudentID
    public function getStudentID() {
        return $this->studentID;
    }
}
// Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getTeacherID() {
        return $this->teacherID;
    }

    // Override metode getName()
    public function getName() {
        return "Teacher Name : " . $this->name;
    }
}

$student1 = new student("Fassha Fanny Purwanto", "230202035");
$teacher1 = new teacher("Dimas Muh. Marzuki", "230209007");

echo $student1->getName(). "<br>";
echo "Student ID : ".$student1->getStudentID(). "<br><br>";
echo $teacher1 -> getName(). "<br>";
echo "Teacher ID : ". $teacher1->getTeacherID()."<br>";
?>
