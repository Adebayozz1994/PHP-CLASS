<?php
class Myclass {
    public $name = 'adebayo';
    private $school = 'fountain university';
    protected $address = 'stadium';
    public $user= 'adebayo';


    public function myfunction() {
        echo $this->name ;
        echo $this->school ;
        echo $this->address ;


    }
    public function __construct($name) {
        echo 'constructor is connected' .$name;
    }
    public function __destruct() {
        echo 'destructor is connected';
    }

}


$newClass = new Myclass('adebayozz');
$newClass->myfunction();
// echo $newClass->school ;


class Secondclass extends Myclass {
    public function echouser() {
        echo $this->user ;
        echo $this->address ;

    }
}

// $thirdClass = new SecondClass;
$thirdClass->echouser();
?>