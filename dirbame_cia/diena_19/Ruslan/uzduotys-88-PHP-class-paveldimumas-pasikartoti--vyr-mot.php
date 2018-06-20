
<?php

// class zmogus {
//     public $ugis = "-99";
//     protected $svoris = "-99";
//     private $pinigai = "-99";
// }

// class moteris extends zmogus {
//     public $estrogenai = 3550;
// }

// class vyras extends zmogus {
//     public $testosteronai = 8600;
// }


// $Monika = new moteris();
// echo $Monika->ugis;

interface Z {
    public function setSvoris($x);
    public function getSvoris();
}

class A implements Z {
    protected $svoris = 100;
    public function setSvoris($x){
        $this->svoris = $x;
    }
    public function getSvoris(){
       echo $this->svoris;
    }
}

// $TEST = new A();



// echo "<br>";
// // echo $TEST->svoris;
// $TEST->setSvoris(85);
// $TEST->getSvoris();
// // $TEST->setSvoris(50);
// // echo getSvoris();


interface Edit {
    public function changeName($a);
    public function getName ();
    public function isLogin ();
}

abstract class User {
    public $name = "Gretute";
    private $password = "000";
    protected $createDate = "0000-00-00";
    protected $lastLogin = "0000-00-00";
    abstract function Logout ();
    public function clearlastloginTime() {
        $this->lastLogin("0000-00-00");
    } 
}

class Admin extends User implements Edit  {
    public function changeName($a){
        $this->name = $a;
    }

    public function getName(){
        echo $this->name;
    }

    public function isLogin(){

    }

    public function Logout(){

    }

    
}

$test1 = new Admin();
echo $test1->getName();
$test1->changeName("Onute");
echo $test1->getName();






?>

