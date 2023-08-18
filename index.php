<?php 

class Car{
     
    public $name; //Access Modifier
    public $age;
    // Public
    //Protected
    //Private

    function Name($a,$Age){
        $this->name = $a;
        $this->age = $Age;
        echo $this->name;
        echo $this->age;
    }
}

$obj = new Car();
$obj->Name('Abc',20);
?>