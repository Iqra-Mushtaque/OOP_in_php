<?php 
// Bound User For Use Only That Name Method
abstract class AbstractClass{

    abstract public function Print();
    abstract public function myMethod();
}

class ChildMethod extends AbstractClass{
     
    public function Print(){
        echo "Print Method";
    }

    public function myMethod(){
        echo "My Method";
    }
}

class AnOtherChild extends AbstractClass{

    public function __construct(){
        echo "Welcome To ABstract Class And Abstract MEthod Topic <br>";
    }
    
    public function Print(){
        echo "An Other Print Method";
    }

    public function myMethod(){
        echo "An Other My Method";
    }
}

// $obj = new ChildMethod();
// $obj->Print();

$newObj = new AnOtherChild();
$newObj->Print();
?>