<?php 


class MagicMethod{

    // __ magic method
    public $name;

    public function __construct($Name)
    {
        $this->name = $Name;
    }

    public function __destruct()
    {
        echo $this->name;
    }    
}

$a = new  MagicMethod("Abc"); // Constructor Call When Object Is Created
?>