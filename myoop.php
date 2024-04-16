<?php
class Myclass {
    public $name = 'adebayo';
    private $school = 'fountain university';
    protected $address = 'stadium';
    public $user= 'adebayo';


    public function myfunction() {
        echo $this->name ;
        echo $this->school ;


    }
    public function __construct($name) {
        echo 'constructor';
    }

}


$newClass = new Myclass('adebayozz');
$newClass->myfunction();
// echo $newClass->school ;


class Secondclass extends Myclass {
    public function echouser() {
        echo $this->user ;

    }
}

// $thirdClass = new SecondClass;
$thirdClass->echouser();
?>