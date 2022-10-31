<h1>List of employees</h1>
<?php

class Employee{
    private $name;
    private $id;

    public function __construct($n, $id){
        $this->name = $n;
        $this->id = $id;
    }

    public function __destruct()
    {
        echo 'Now destroying previous objects created...';
        echo '<br>';
    }

    function setEmployeeInfo($n, $id){
        $this->name = $n;
        $this->id = $id;
    }

    function getEmployeeInfo(){
        echo 'Name: ' . $this->name;
        echo '<br>';
        echo 'ID Number :' . $this->id;
        echo '<br><br>';
    }
}

$employee_1 = new Employee('Ivan', '1');
$employee_1->getEmployeeInfo();

$employee_2 = new Employee('John', '2');
$employee_2->getEmployeeInfo();

$employee_3 = new Employee('Vasil', '3');
$employee_3->getEmployeeInfo();
