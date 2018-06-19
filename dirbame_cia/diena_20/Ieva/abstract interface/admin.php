<?php

include ('user.php');
include ('edit.php');

class Admin extends User implements Edit {

    function logOut () {

    }

    public function changeName($a){
        echo "vardas:". $this->name=$a;
    }
    public function getName(){
        return $this->name;
    }
    public function isLogin(){

    }
}
