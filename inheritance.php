<?php

class A {
    protected $attribute1_A = 'Attribute 1 from class A';
    protected $attribute2_A = 'Attribute 2 from class A';

    public function getAttributesFromClassA(){
        echo 'Attribute 1: ' . $this->attribute1_A;
        echo '<br>';
        echo 'Attribute 2: ' . $this->attribute2_A;
    }
}

class B extends A{
    private $attribute1_B = 'Attribute 1 from class B';
    private $attribute2_B = 'Attribute 2 from class B';

    public function getAttributesFromClassB()
    {
        echo '<h1>Call attributes from class B </h1>';
        echo 'Attribute 1: ' . $this->attribute1_B;
        echo '<br>';
        echo 'Attribute 2: ' . $this->attribute2_B;
    }

    public function getAttributesFromParentClass()
    {
        echo '<h1>Call attributes from class A </h1>';
        parent::getAttributesFromClassA();
    }
}

$obj_B = new B;

$obj_B->getAttributesFromClassB();

$obj_B->getAttributesFromParentClass();