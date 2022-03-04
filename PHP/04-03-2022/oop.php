<?php

class Car {
    public $color; //Properties
    public $manufacturer;
    public $fuelType;
    public $model;
    public $noOfSeat;
    protected $driver;
    private $emi;

    public function __construct($col, $manuf, $fuel, $mod, $seats) {
        $this->color = $col;
        $this->manufacturer = $manuf;
        $this->fuelType = $fuel;
        $this->model = $mod;
        $this->noOfSeat = $seats;
    }

    public function ignitionStart() { //Methods
        echo "Car Started";
    }

    public function ignitionStop() { //Methods
        echo "Car Stopped";
    }

    public function calculation($a, $b){
        return $a + $b;
    }
}

class Family extends Car {
    public $noOfFamilyMember;

    public function getDriver($name) {
        $this->driver = $name;
        return $this->driver;
    }

    public function getNoOfFamilyMember() {
        echo "hie";
    }

    public function payEmi($emi) {
        $this->emi = $emi;
    }

    public function calculation($a, $b){
        return $a - $b;
    }
}

class Relative extends Family {
    public $myProperty;

    public function calculation($a, $b){
        return $a * $b;
    }
}

$familyMember1 = new Relative('Red','BMW','Petrol','Az100','5');
$familyMember1->color = 'Magma Gray';
$familyMember1->getDriver('Younger Brother');
$familyMember1->payEmi('25000');
echo "<pre>";
print_r($familyMember1);

$car1 = new Car('Red','BMW','Petrol','Az100','5');
$car1->color = 'Magma Gray';

echo "<pre>Car 1 OBJ";
print_r($car1);


$obj1 = new Car('Red','BMW','Petrol','Az100','5');
echo '<br>'.$obj1->calculation(10,20);

$obj2 = new Family('Red','BMW','Petrol','Az100','5');
echo '<br>'.$obj2->calculation(10,20);

$obj3 = new Relative('Red','BMW','Petrol','Az100','5');
echo '<br>'.$obj3->calculation(10,20);

?>
<br/>
========================================================================
Encapsule
========================================================================

<?php

class Ecapsulation {
    public $name;
    private $salary;

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }


}

$obj1 = new Ecapsulation();
$obj1->name = 'Ajay';
echo $obj1->name;

$obj1->setSalary(100000);
echo '<br>'.$obj1->getSalary();
?>


<br/>
========================================================================
Abstraction
========================================================================

<?php

abstract class Person {
    public $name;

    abstract public function getName();
}

class Human extends Person {
    public function getName() {
        echo "helel";
    }
}
$absPer = new Human();
$absPer->name = 'Ajay';
echo '<br>'.$absPer->name;



Class
Object
Inheritance
Access Modifier
Constructor & Destructor
Polymorphism
Encapsulation
Abstract Class

Lab Task
=======================================================
Define class Department,
Define property: departmentName - should not be public

Define class Employee
Define property: name, email, phone, address, city - should not be public

Define class EmployeeSalary
Define property: employee salary. - should be be public or protected.
Define method: To get & set all properties of department, employee, employee salary class.