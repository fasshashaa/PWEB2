## Modul 3  
### Jobsheet 3 : Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP  
#### A. Jobsheet 3  
1. Inheritance

   > Membuat kelas Person dengan atribut name dan metode getName().

   ```PHP
   <?php
// membuat Kelas Person
class Person {
    protected $name;
```
Membuat function construct untuk menginisialisasi

```PHP
public function __construct($name) {
        $this->name = $name;
    }
```
>Membuat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID
serta metode getStudentID()

```PHP
class student extends Person {
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
```
> Membuat metode getName()

```PHP
public function getName() {
        return $this->name;
    }
}
```
>Instansiasi dan menampilkan data

```PHP
$student = new Student("Fassha Fanny Purwanto", "8374657");
echo "Name   : ". $student->getName(); 
echo"<br>";
echo "Student ID    : ". $student->getStudentID(); 
echo "<br>";
```
>Full kode Program

```PHP
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
class student extends Person {
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
$student = new Student("Fassha Fanny Purwanto", "8374657");
echo "Name   : ". $student->getName(); 
echo"<br>";
echo "Student ID    : ". $student->getStudentID(); 
echo "<br>";
```
>Output


