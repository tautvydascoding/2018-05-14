<?php

abstract class User
{
    public $name = "Justas";
    public $password = "none2";
    public $createDate = "none3";
    public $lastLogin = "none3";

    abstract public function Logout();

    public function clearLastLoginTime(){
        //nieko
    }
}
