<?php
abstract class User {
public $name="none";
public $password="xxx";
public $createdDate="0000-00-00";
public $lastLogin="0000-00-00";
abstract function Loguot();
function clearlastLoginTime(){
    // code...
}
}
