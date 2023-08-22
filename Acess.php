<?php 

class ParentClass{
    public $name;
    protected $age = 20;
    private $email;


    // Set Method
    public function SetEmail($email){
        $this->email = $email;
    }
    // Get Method
    public function GetEmail(){
        return $this->email;
    }
    

}

class ChildClass extends ParentClass{
    public function PrintAge(){
        echo $this->age;
    }
}

// Create Object
// $obj = new ParentClass();
// // echo $obj->name = "Abc";
// echo $obj->email = "Abc@gmail.com";

// $obj = new ChildClass();
// $obj->PrintAge();

$obj = new ParentClass();
$obj->SetEmail("Abc@gmail.com");
echo $obj->GetEmail();

?>