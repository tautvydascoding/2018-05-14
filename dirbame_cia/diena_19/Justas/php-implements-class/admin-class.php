<?php
include_once('user-class.php');
include_once('edit-interface.php');

class Admin extends User implements Edit
{
    //=============edit interfaco
    public function getName(){
        echo "pries $this->name <br>";
    }
    public function changeName($a){
        $naujasVardas = $this->name = $a;
        echo "po $naujasVardas <br>";
    }
    public function isLogin(){
        if (true) {
            echo "Prisijunges <br>";
        }

    }
    //===============user klases
    public function Logout(){
        echo "cia turi butinai buti suprogramuota <br>";
    }
    public function clearLastLoginTime(){
        //nieko nera
    }
}
