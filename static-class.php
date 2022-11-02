<?php

class Person{
     const SCHOOL = 'Palomar';

     public static $first_name = 'N/A';
     public static $last_name = 'N/A';

     static function setName($fName, $lName){
        self::$first_name = $fName;
        self::$last_name = $lName;
     }
     static function getName(){
         return  self::$first_name . ' ' . self::$last_name;
     }
}

echo "<h1> Static class attributes default values </h1>";
echo 'First Name: ' . Person::$first_name;
echo '<br>';
echo 'Last Name: ' . Person::$last_name;


echo "<h1> New values for static class attributes </h1>";
Person::setName('Ivan', 'Ursta');
echo 'Full name: ' . Person::getName();

echo "<h1> Class Constants </h1>";
echo 'School: ' . Person::SCHOOL;