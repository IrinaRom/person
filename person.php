<?php
class Person
{
  //Здоровье человека не может быть более 100 ед.
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
  }
  function setHP($hp)
  {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHP()
  {
    return $this->hp;
  }
  function getAge()
  {
    return $this->age;
  }
  function getName()
  {
    return $this->name;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getLastname() {
    return $this->lastname;
  }
  function getInfo(){
    return "<h3>A few words about myself.</h3><br>".
    "My name is: ".$this->getName()."<br>
    my lastname is: ".$this->getLastname()."
    <br>my father is: ".$this->getFather()->getName()."
    <br>his age: ".$this->getFather()->getAge()."
    <br>my mother is: ".$this->getMother()->getName()."
    <br>her age: ".$this->getMother()->getAge()."
    <br>my grandpa (mother`s father) is: ".$this->getMother()->getFather()->getName()."
    <br>his age:  ".$this->getMother()->getFather()->getAge()."

    <br>my granny (father`s mom) is: ".$this->getFather()->getMother()->getName()."
    <br>her age:  ".$this->getFather()->getMother()->getAge()."
    <br>my granpa (father`s pa) is: ".$this->getFather()->getFather()->getName()."
    <br>his age:  ".$this->getFather()->getFather()->getAge()."   
    
    
    ";
  }
}
$petr = new Person("Petr", "Ivanov", 72);
$anna = new Person("Anna", "Ivanova", 65);
$igor = new Person("Igor", "Petrov", 68);


$alex = new Person("Alex", "Ivanov", 42, $anna, $petr);
$olga = new Person("Olga", "Ivanova", 42, null, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

// echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();
