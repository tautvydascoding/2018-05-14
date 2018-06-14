<?php

interface Edit{
  public function changeName($a);
  public function getName();
  public function isLogin();
}

abstract class User{
  public $name = "name";
  public $password = "password";
  public $createDate = "date";
  public $lastLogin = "last";

  abstract function Logout();

  public function clearlastLoginTime(){
    //code
  }
}

class Admin extends User implements Edit {

  public function Logout(){
    return 'kazkas';
  }

  public function changeName($a){
    //code
  }

  public function getName(){
    return $this->name;
  }

  public function isLogin(){
    //code
  }
}

$Povilas = new Admin();

echo 'veikia puikiai';

echo 'vardas: ' . $Povilas->getName();
