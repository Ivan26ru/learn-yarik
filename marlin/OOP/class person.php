<?php
class Person
{
    public $name;
    public $age;

    public function sayHello($name){
 echo 'Hello i am'.$name.'<br>';
}
    public function setName($name){
    $this->name = $name; // Rahim
        }
}
$myPerson = new Person;
$myPerson2 = new Person;


$myPerson ->setName("Rahim");
$myPerson2->setName("Alisa");
echo $myPerson->name; // Rahim
echo $myPerson2->name; // Alisa