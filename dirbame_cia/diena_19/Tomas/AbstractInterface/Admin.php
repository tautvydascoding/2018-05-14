<?php
include_once('User.php');
include_once('Edit.php');

class Admin extends User implements Edit{
    public function changeName($a){

    }

    public function getname(){
return $this->name;
    }
    public function isLogin(){

    }
    public function Loguot(){
        // code...
    }
     public function clearlastLoginTime(){
        // code...
    }
}
