<?php
class Demo
{

    public $firstName = 'N/A';
    public $lastName = 'N/A';

    const CITY = 'Uzhgorod';

    function setName(){
        $this->firstName = 'Ivan';
        $this->lastName = 'Ursta';
    }

    function getName(){
        echo 'Changed name: ' . $this->firstName . ' ' . $this->lastName;
    }
}

$obj = new Demo;

echo 'Default name: ' . $obj->firstName . ' ' . $obj->lastName;
$obj->setName();
echo '<br>';
$obj->getName();
echo '<br>';
echo 'Constant name: ' . Demo::CITY;