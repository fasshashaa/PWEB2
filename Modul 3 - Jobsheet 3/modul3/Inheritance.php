<?php
/*
Nama : Fassha Fanny Purwanto
Kelas : TI - 2B
NPM : 230202035 */

//Mendefinisikan class Animal
class Animal
{
    //Atribut
    protected $name;

    //function construct
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

//mendefinisikan class Dog turunan class Animal
class Dog extends Animal
{
    //method suara
    public function makeSound()
    {
        return "Woof!";
    }
}

//mendefinisikan class cat turunan Animal
class Cat extends Animal
{
    //method suara
    public function makeSound()
    {
        return "Meow!";
    }
}

//Instansiasi Objek
$dog = new Dog("Buddy");
echo $dog->getName() . " says " . $dog->makeSound();
