<?php

define('GLOBAL_CONST','Gobal Constant Value');

class Demo
{
    private $first_name;
    private $last_name;

    public function __construct($firstName, $lastName)
    {
        $this->first_name = $firstName;
        $this->last_name = $lastName;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function setName($firstName, $lastName){
        $this->first_name = $firstName;
        $this->last_name = $lastName;
    }

}

echo '<h1>Original Name</h1>';

$obj = new Demo('John', 'Doe');
echo 'First Name: ' . $obj->getFirstName();
echo '<br>';
echo 'Last Name: ' . $obj->getLastName();

echo '<h1>Changed Name</h1>';

$obj->setName('Ivan', 'Ursta');

echo 'First Name: ' . $obj->getFirstName();
echo '<br>';
echo 'Last Name: ' . $obj->getLastName();

echo '<h1>Constant Value</h1>';
echo 'Constant Value: ' . GLOBAL_CONST;