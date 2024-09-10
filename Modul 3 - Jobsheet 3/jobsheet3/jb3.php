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

    // Override metode getName()
    public function getName() {
        return "Student Name: " . $this->name;
    }

    // Getter dan Setter untuk atribut name
    public function getNamePrivate() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Getter dan Setter untuk atribut studentID
    public function getStudentIDPrivate() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
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
        return "Teacher Name: " . $this->name;
    }
}

// Kelas abstrak Course
abstract class Course {
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "This is an online course.";
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "This is an offline course.";
    }
}

// Contoh penggunaan
$student = new Student("Alice", "S12345");
echo $student->getName(); // Output: Student Name: Alice
echo "<br>";
echo $student->getStudentID(); // Output: S12345
echo "<br>";

$teacher = new Teacher("Mr. Smith", "T67890");
echo $teacher->getName(); // Output: Teacher Name: Mr. Smith
echo "<br>";
echo $teacher->getTeacherID(); // Output: T67890
echo "<br>";

$onlineCourse = new OnlineCourse();
echo $onlineCourse->getCourseDetails(); // Output: This is an online course.
echo "<br>";

$offlineCourse = new OfflineCourse();
echo $offlineCourse->getCourseDetails(); // Output: This is an offline course.
?>
