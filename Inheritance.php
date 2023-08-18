<!-- Inheritance 
        Single Inhertance       // Support
        MultiLevel Inheritance  // Support

        Multiple  Inhertance    // Non Support ALter Interface  Trait

    Parent Class -> Data -> Accessable -> Child
    Child Class -> Data -> Non Accessable For Parent

    keywords extends
-->


<?php 
    class ParentClass{

            public function Data(){
                echo "Parent Have Bike";
            }
    }

    class ChildOne extends ParentClass{
            
            public function ChildMethod(){
                echo "CHild Have Also Bike";
            }
    }

    class ChildTwo extends ChildOne{
           public function __construct()
           {
                echo "Welcome To CHild 2 Class";
           } 
        
    }

    // $a = new ChildOne();
    // $a->Data();
    // $a->ChildMethod();

    // Create Object For Child Two

    $b = new ChildTwo();
    $b->Data();
    $b->ChildMethod();
?>