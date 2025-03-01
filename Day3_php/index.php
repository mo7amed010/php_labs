<?php
class Author{
    private $name;
    private $email;
    private $gender;

    function __construct($name,$email,$gender)
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    function get_name(){
        return $this->name;
    }
    function set_email($email){
        $this->email = $email;
    }
    function get_email(){
        return $this->email;
    }
    function get_gender(){
        return $this->gender;
    }
    function __toString()
    {
        return "Author [Name: $this->name , Email: $this->email , Gender: $this->gender]";
    }

}

$testAuthor = new Author("John Doe","johndoe@example.com","M");
echo $testAuthor->get_email();
echo "<br>";
echo $testAuthor;
echo "<br>=========== 2 =========<br>";


class Book{
    private $name;
    private Author $author;
    private $price;
    private $qty;

    function __construct($name,Author $author,$price,$qty){
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }
    function get_name(){
        return $this->name;
    }
    function get_author(){
        return $this->author;
    }
    function set_price($price){
        $this->price = $price;
    }
    function get_price(){
        return $this->price;
    }
    function set_qty($qty){
        $this->qty = $qty;
    }
    function get_qty(){
        return $this->qty;
    }
    function __toString(){
        return "Book [Name: $this->name , $this->author , Pric: $this->price , Quantity: $this->qty]";
    }
}
$testBook = new Book("Harry Potter",$testAuthor,155.5,10);
echo $testBook;
echo "<br>=========== 3 =========<br>";


class Book2{
    private $name;
    private array $authors;
    private $price;
    private $qty;

    function __construct($name,array $authors,$price,$qty){
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;
    }
    function get_name(){
        return $this->name;
    }
    function get_author(){
        return $this->authors;
    }
    function set_price($price){
        $this->price = $price;
    }
    function get_price(){
        return $this->price;
    }
    function set_qty($qty){
        $this->qty = $qty;
    }
    function get_qty(){
        return $this->qty;
    }
    function __toString(){
        return "Book [Name: $this->name , $this->authors , Pric: $this->price , Quantity: $this->qty]";
    }
    function get_authors_names() {
        foreach ($this->authors as $author) { 
            echo $author->get_name() . " --- ";
        }
    }
    
}
$testAuthor2 = new Author("J.K. Rowling","jack@gmail.com","M");
$testBook2 = new Book2("Harry Potter",[$testAuthor,$testAuthor2],155.5,23);
echo $testBook2."<br>";
echo $testBook2->get_authors_names();
echo "<br>=========== 4 =========<br>";

trait circle{
    private $radius;
    private $color;
    function get_radius(){
        return $this->radius;
    }
    function get_color(){
        return $this->color;
    }
    function set_radius($radius){
        $this->radius = $radius;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_area(){
        return 3.14*$this->radius*$this->radius;
    }
    function __toString(){
        return "Circle [radius: $this->radius , color: $this->color]";
    }
}

class clyinder{
    use circle;
    private $height;
    function __construct($radius = 1.0,$color = "red",$height = 1.0){
        $this->set_radius($radius);
        $this->set_color($color);
        $this->height = $height;
    }
    function get_height(){
        return $this->height;
    }
    function set_height($height){
        $this->height = $height;
    }
    function get_volume(){
        return 3.14*$this->get_radius()*$this->get_radius()*$this->get_height();
    }
}
$c = new clyinder();
$c->set_height(5);
echo "Area : ".$c->get_area() ."<br>";
echo "Voluem : ".$c->get_volume() ."<br>";
echo $c ."<br>";
echo "=========== 5 =========<br>";

abstract class Person{
    protected $name;
    protected $address;
    abstract function get_name();
    abstract function get_address();
    abstract function set_address($address);
    abstract function set_name($name);
}
class Student extends Person{
    private $program;
    private $year;
    private $fee;
    function __construct($name,$address,$program,$year,$fee){
        $this->set_name($name);
        $this->set_address($address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }
    function get_name(){
        return $this->name;
    }
    function get_address(){
        return $this->address;
    }
    function set_address($address){
        $this->address = $address;
    }
    function set_name($name){
        $this->name = $name;
    }
    function get_program(){
        return $this->program;
    }
    function get_year(){
        return $this->year;
    }
    function get_fee(){
        return $this->fee;
    }
    function set_program($program){
        $this->program = $program;
    }
    function set_year($year){
        $this->year = $year;
    }
    function set_fee($fee){
        $this->fee = $fee;
    }
    function __toString()
    {
        return "Student : [Name: $this->name,Address: $this->address,Program: $this->program, Year: $this->year,Fee: $this->fee]";
    }
    
}
class Staff extends Person{
    private $school;
    private $pay;
    function __construct($name,$address,$school,$pay){
        $this->set_name($name);
        $this->set_address($address);
        $this->school = $school;
        $this->pay = $pay;
    }
    function get_school(){
        return $this->school;
    }
    function get_pay(){
        return $this->pay;
    }
    function set_school($school){
        $this->school = $school;
    }
    function set_pay($pay){
        $this->pay = $pay;
    }
    function set_name($name)
    {
        $this->name = $name;
    }
    function set_address($address){
        $this->address = $address;
    }
    function get_address()
    {
        return $this->address;
    }
    function get_name(){
        return $this->name;
    }
    function __toString(){
        return "Staff : [Name: $this->name,Address: $this->address,School : $this->school ,PAY: $this->pay]";
    }
}

$student = new Student("John","123 Main St", "Computer Science", 2015, 100);
echo $student . "<br>";
$staff = new Staff("Jane","456 Elm St","Math", 50000);
echo $staff . "<br>";
echo "=========== 6 =========<br>";


abstract class Shape {
    protected string $color;
    protected bool $filled;

    function __construct($color = "red",$filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    function getColor(){
        return $this->color;
    }

    function setColor($color){
        $this->color = $color;
    }

    function isFilled(){
        return $this->filled;
    }

    function setFilled($filled){
        $this->filled = $filled;
    }

    function toString(){
        return "Shape[color={$this->color}, filled=" . ($this->filled ? "true" : "false") . "]";
    }
    abstract function getArea();
    abstract function getPerimeter();
}

class Circle2 extends Shape {
    private float $radius;

    function __construct($radius = 1.0,$color = "red",$filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    function getRadius(){
        return $this->radius;
    }

    function setRadius($radius){
        $this->radius = $radius;
    }

    function getArea(){
        return pi() * pow($this->radius, 2);
    }

    function getPerimeter(){
        return 2 * pi() * $this->radius;
    }

    function toString(){
        return "Circle[" . parent::toString() . ", radius={$this->radius}]";
    }
}

class Rectangle extends Shape {
    protected float $width;
    protected float $length;

    function __construct($width = 1.0,$length = 1.0,$color = "red",$filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    function getWidth(){
        return $this->width;
    }

    function setWidth($width)  {
        $this->width = $width;
    }

    function getLength() {
        return $this->length;
    }

    function setLength($length)  {
        $this->length = $length;
    }

    function getArea() {
        return $this->width * $this->length;
    }

    function getPerimeter() {
        return 2 * ($this->width + $this->length);
    }

    function toString()  {
        return "Rectangle[" . parent::toString() . ", width={$this->width}, length={$this->length}]";
    }
}


class Square extends Rectangle {
    function __construct($side = 1.0, $color = "red", $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    function getSide() {
        return $this->width;  
    }

    function setSide($side)  {
        $this->width = $side;
        $this->length = $side;
    }

    function toString()  {
        return "Square[" . parent::toString() . "]";
    }
}


$circle = new Circle2(10, "blue", false);
$rectangle = new Rectangle(3, 4, "green", true);
$square = new Square(5, "yellow", false);

echo $circle->toString() . "<br>";
echo "Circle Area: " . $circle->getArea() . ", Perimeter: " . $circle->getPerimeter() . "<br><br>";

echo $rectangle->toString() . "<br>";
echo "Rectangle Area: " . $rectangle->getArea() . ", Perimeter: " . $rectangle->getPerimeter() . "<br><br>";

echo $square->toString() . "<br>";
echo "Square Area: " . $square->getArea() . ", Perimeter: " . $square->getPerimeter() . "<br>";

echo "=========== 7 =========<br>";

class Animal {
    protected string $name;

    function __construct($name) {
        $this->name = $name;
    }

    function toString()  {
        return "Animal: Animal[name={$this->name}]";
    }
}

class Mammal extends Animal {
    function __construct($name) {
        parent::__construct($name);
    }

    function toString()  {
        return "Mammal: Mammal[" . parent::toString() . "]";
    }
}


class Cat extends Mammal {
    function __construct($name) {
        parent::__construct($name);
    }

    function greets()  {
        echo "Meow\n";
    }

    function toString()  {
        return "Cat: Cat[" . parent::toString() . "]";
    }
}
class Dog extends Mammal {
    function __construct($name) {
        parent::__construct($name);
    }

    function greets()  {
        echo "Woof\n";
    }

    function greetsAnother(Dog $another)  {
        echo "Woooof\n";
    } function

    toString()  {
        return "Dog: Dog[" . parent::toString() . "]";
    }
}

$animal = new Animal("Generic Animal");
echo $animal->toString() . "\n\n";

$mammal = new Mammal("Generic Mammal");
echo $mammal->toString() . "\n\n";

$cat = new Cat("Kitty");
echo $cat->toString() . "\n";
$cat->greets();
echo "\n";

$dog1 = new Dog("Buddy");
echo $dog1->toString() . "\n";
$dog1->greets();

$dog2 = new Dog("Rocky");
$dog1->greetsAnother($dog2);