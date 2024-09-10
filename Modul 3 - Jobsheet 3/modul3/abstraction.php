<?php
/*
Nama : Fassha Fanny Purwanto
Kelas : TI - 2B
NPM : 230202035 */

//mendefinisikan class shape
abstract class Shape
{
    //method abstract function
    abstract public function area();
}

//mendefinisikan class rectangle turunan shape
class Rectangle extends Shape
{
    //atribut
    private $width;
    private $height;

    //construct
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    //method area
    public function area()
    {
        return $this->width * $this->height;
    }
}

//mendefinisikan class circle turunan shape
class Circle extends Shape
{
    //atribut
    private $radius;

    //construct
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    //method area
    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

//instansiasi objek
$rectangle = new Rectangle(5, 10);
//memanggil function area
echo "Area of Rectangle : " . $rectangle->area();
echo "<br>";
$circle = new Circle(7);
echo "Area of Circle : " . $circle->area();
