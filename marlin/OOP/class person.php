<?php
class Person
{
    public $name;
    public $age;

    public function sayHello($name)
    {
        return'Hi I am' . $this->name . 'and I am ' . $this->sayAge();
    }

    public function setName($name)
    {
        $this->name = $name; // Rahim
    }
}
  public function SetAge($age){
    $this->age= $age;
}
 public function sayAge() {
    return $this->age;//14
}
$myPerson = new Person;
$myPerson2 = new Person;


$myPerson ->setName("Rahim");
$myPerson->setAge(14);
echo $myPerson->sayHello();
