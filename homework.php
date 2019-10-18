<?php

class Human
{
    private $name;
    private $surname;
    private $age;
    private $gender;

    public const MALE = "мужской";
    public const FEMALE = "женский";
  

    function __construct($name, $surname,$age, $gender )
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function __set($property, $value){
        if((property_exists($this, $property))){
                if($this->$property == $this->age || $this->$property == $this->surname){
                    $this->$property = $value;
                }else{
                    echo "Не правильные данные". "<br>";
                }
                
            }else{
                echo "Не правильные данные". "<br>";
            }
            
        }
  
   
    public function getProps()
    {
        echo 'Фамилия:  ' . $this->surname . "<br>";
        echo 'Имя: ' . $this->name . "<br>";
        echo 'Возраст: ' . $this->age . "<br>";
        echo 'Пол: ' . $this->gender . "<br>";
    }
}

$human = new Human("Наталья", "Краснова", 30, Human::FEMALE);
$human->surname = "Василькова";
$human->name = "Ксения";
$human->gender = Human::MALE;

echo $human->getProps()."<br>";
