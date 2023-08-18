<!-- 
    polymorphism
        poly -> Many
        morphism -> forms

        Method Name Remain Same
            1 Method overriding  // Support
            2 Method Overloading    // Non Support

 -->


<?php 

class Animal{
    public function Legs(){
        echo "This Animal Have Two Legs<br>";
    }

    public function fly(){
        echo "This Animal Is Fly <br>";
    }
    public function walk(){
        echo "This Animal Is Walk <br>";
    }
}


class Hen extends Animal{

}

class Cat extends Animal{
    public function Legs(){
        echo "This Animal Have Four Legs<br>";
    }

}

$hen = new Hen();
// $hen->Legs();
// $hen->fly();

$cat = new Cat();
$cat->Legs();
$cat->walk();

?>