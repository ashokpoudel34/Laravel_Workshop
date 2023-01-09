<?php
  class person{
    private $name;
    private $age;
    private $is_mad;

    public function set_person($name,$age,$is_mad){
        $this->name = $name;
        $this->age = $age;
        $this->is_mad = $is_mad;
    }

    public function show_person(){
       echo "Name: ".$this->name."<br";
       echo "Age: ".$this->age."<br";
       echo "Is_Mad: ".$this->is_mad."<br";
    }
  }



  class student extends person{
    private $roll;
    private $batch;

    public function set_student($roll,$batch){
        $this->roll = $roll;
        $this->batch = $batch;
    }

    public function show_student(){
        echo "Roll: ".$this->roll."<br>";
        echo "Batch: ".$this->batch."<br>";

    }

  }

  $p1 = new person();
  $p1->set_person("sunil","33",true);
  $p1->show_person();

//   $s1 = new student();
//   $s1->set_person("joker",-20,true);
//   $s1_>show_person();
?>