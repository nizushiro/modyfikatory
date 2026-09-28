<?php

class Employee {
    private $salary;
    protected $password;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
print("4. Dlaczego private chroni lepiej niż public? <br>

private jest prywatny <br>
public nie jest prywatny <br><br>");

class Human
{
    private $name;
    private $gender;
    private $age = 0;
    private $nationality;

    public function __construct($name, $gender, $age, $nationality)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->nationality = $nationality;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function showInfo()
    {
        echo $this->getName() . "<br>";
        echo $this->getGender() . "<br>";
        echo $this->getAge() . "<br>";
        echo $this->getNationality() . "<br>";
    }
}

$human = new Human("bob", "Man", 67, "Poland");

$human->showInfo();



?>