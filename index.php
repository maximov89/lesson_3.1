<?php

function vardump($var) {
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
}

echo '<a href="news.php"><button>Посмотреть дополнительное задание</button></a>';
echo '<br/>';
echo '<p>1. Инкапсуляция - формирование оболочки-функционала для работы со свойствами и методами объектов одного класса и называемой классом. Этакого закрытого ящика с ручками и кнопками для создания обьектов и управления их свойствами. При этом содержимое ящика может быть как доступно извне, так и закрыто.</p>';
echo '<p>2. Плюсы объектов - это группировка свойств и методов для объектов в одном классе, возможность создания объектов по шаблону класса - масштабируемость, единая логика управления свойствами и методами объектов через класс, удобнее работать с кодом. Из минусов - наверное недостаточная гибкость при создании объектов по шаблону при нетиповых задачах, требовательность к высокой организации кода.</p>';

class Car
{
    public $model;
    public $color = 'black';
    public $price;
    public function changeColor($color)
    {
        $this->color = $color;
    }
}

$audi = new Car();
$audi->model = 'Audi Q7';
$audi->price = 3000000;
$bmw = new Car();
$bmw->model = 'BMW X6';
$bmw->price = 3200000;
$bmw->changeColor('red');
vardump($audi);
vardump($bmw);

class TV
{
    public $model = 'Samsung';
    public $size;
    public function __construct($size)
    {
        $this->size = $size;
    }
}
$tvOne = new TV('32 дюйма');
$tvTwo = new TV('50 дюймов');
vardump($tvOne);
vardump($tvTwo);

class Pen
{
    public $price;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}
$penOne = new Pen('PARKER', 'черная с золотом');
$penOne->price = 3499;
$penTwo = new Pen('Zebra', 'синяя с серебром');
vardump($penOne);
vardump($penTwo);

class Duck
{
    private $name;
    private $age;
    public function __construct($name, $age, $hobby)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
    } 
}
$duckOne = new Duck('Donald', 25, 'рыбалка');
$duckTwo = new Duck('Daffy', 22, 'музыка');
$duckTwo->hobby = 'шахматы';
vardump($duckOne);
vardump($duckTwo);

class Product
{
    public static $count = 0;
    public $sell = 0;
    public function __construct($position, $price)
    {
        self::$count++;
        $this->position = $position;
        $this->price = $price;
    }
}	

function inc($num) 
{
    $num->sell++;
}
$products = [
    new Product(1, 599),
    new Product(2, 389),
    new Product(3, 999)
];
inc($products[1]);
inc($products[2]);
inc($products[2]);
vardump(Product::$count);
vardump($products);