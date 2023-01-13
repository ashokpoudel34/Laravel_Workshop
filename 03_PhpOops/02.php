<?php
class student{
    private $name;
    private $age;
    private $roll;

    // function __construct(){
    //     echo "Hey!!";
    // }

    public function set($a,$b,$c){
        $this->name = $a;
        $this->age = $b;
        $this->roll = $c;
    }
    public function show(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
        echo "Roll: ".$this->roll."<br";
    }
}
$s1 = new student();
$s1->set("raj","9898","123");
$s1->show();

$s2 = new student();
$s2->set("ash","9898","910");
$s2->show();
?>