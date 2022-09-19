<?php
class Person
{
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
    return "Hi, $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName()
  {
    return $this->name;
  }
  function getLastname()
  {
    return $this->lastname;
  }
  function getAge()
  {
    return $this->age;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getInfo()
  {
    return "
    <h3> A few words about my self:</h3><br>" .
      "<b>Ma name is:</b> " . $this->getName() .
      "<br><b>My last name is:</b> " . $this->getLastname() .
      "<br><b>My age:</b> " . $this->getAge() .
      "<br>" .
      "<br><b>My father is:</b> " . $this->getFather()->getName() . "&nbsp" . $this->getFather()->getLastname() . "&nbsp" . $this->getFather()->getAge() . "&nbsp" . " years old" .
      "<br><b>My mother is:</b> " . $this->getMother()->getName() . "&nbsp" . $this->getMother()->getLastname() . "&nbsp" . $this->getMother()->getAge() . "&nbsp" . " years old" .
      "<br>" .
      "<br><b>My paternal grandfather:</b> " . $this->getFather()->getFather()->getName() . "&nbsp" . $this->getFather()->getFather()->getLastname() . "&nbsp" . $this->getFather()->getFather()->getAge() . "&nbsp" . " years old" .
      "<br><b>My paternal grandmother:</b> " . $this->getFather()->getMother()->getName() .  "&nbsp" . $this->getFather()->getMother()->getLastname() . "&nbsp" . $this->getFather()->getMother()->getAge() . "&nbsp" . " years old" .
      "<br>" .
      "<br><b>My maternal grandfather:</b> " . $this->getMother()->getFather()->getName() . "&nbsp" . $this->getMother()->getFather()->getLastname() . "&nbsp" . $this->getMother()->getFather()->getAge() . "&nbsp" . " years old" .
      "<br><b>My maternal grandmother:</b> " . $this->getMother()->getMother()->getName() . "&nbsp" . $this->getMother()->getMother()->getLastname() . "&nbsp" . $this->getMother()->getMother()->getAge() . "&nbsp" . " years old";
  }
}

$galina = new Person("Galina", "Samokatova", 65);
$anastasia = new Person("Anastasia", "Ivanova", 69);

$igor = new Person("Igor", "Samokatov", 68);
$viktor = new Person("Viktor", "Ivanov", 71);

$alex = new Person("Alex", "Ivanov", 42, $anastasia, $viktor);
$olga = new Person("Olga", "Ivanova", 36, $galina, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();
