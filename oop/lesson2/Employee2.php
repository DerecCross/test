<?php

class Employee2
{
    public $name;
    public $salary;

    public function doubleSalary(): int
    {
        return $this->salary * 2;
    }
}

$worker1 = new Employee2();
$worker1->name = 'John';
$worker1->salary = 5;
echo 'Зарплата ' . $worker1->name . ' после удвоения = ' . $worker1->doubleSalary() . '<br>';

class Rectangle
{
    public $width;
    public $height;

    public function getSquare(): int
    {
        return $this->width * $this->height;
    }

    public function setPerimeter(): int
    {
        return ($this->width + $this->height) * 2;
    }
}

$rectangle = new Rectangle();
$rectangle->width = 5;
$rectangle->height = 10;

echo 'Площадь прямоугольника = ' . $rectangle->getSquare() . '<br>';
echo 'Периметр прямоугольника = ' . $rectangle->setPerimeter() . '<br>';

