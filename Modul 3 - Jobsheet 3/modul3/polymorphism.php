<?php
/*
Nama : Fassha Fanny Purwanto
Kelas : TI - 2B
NPM : 230202035 */

//mendefinisikan class Animal
class Animal
{
    //Atribut
    protected $name;

    //Function Construct
    public function __construct($name)
    {
        $this->name = $name;
    }

    //method untuk mengambil nilai
    public function getName()
    {
        return $this->name;
    }
}

//mendefinisika class Dog turunan Animal
class Dog extends Animal
{
    public function makeSound()
    {
        return "Woof!";
    }
}

//mendefinisika class Cat turunan Animal
class Cat extends Animal
{
    public function makeSound()
    {
        return "Meow!";
    }
}

//mendefinisikan class printer
class Printer
{
    //method print untuk menampilkan nama dan suara
    public function print(Animal $animal)
    {
        echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
    }
}
//instansiasi objek
$dog = new Dog("Buddy");
$cat = new Cat("Kitty");
$printer = new Printer();

//memanggil method print untuk print dog dan cat
$printer->print($dog);
$printer->print($cat);
