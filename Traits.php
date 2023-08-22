<?php 
// Multiple Inheritance Using Traits 


trait ParentClass{
    public function ParentMethod(){
        echo "ParentMethod";
    }
}

trait AnOtherParent{
    public function AnOtherMethod(){
        echo "An Other Method Data";
    }
}

trait myOwnClass{
    public function Walk(){
        echo "Walk Method";
    }
}

// Multiple Inheritance
class ChildMethod{
    use ParentClass;
    use AnOtherParent;
    use  myOwnClass;
}

$obj = new ChildMethod();
$obj->ParentMethod();
$obj->AnOtherMethod();
$obj->Walk();
?>