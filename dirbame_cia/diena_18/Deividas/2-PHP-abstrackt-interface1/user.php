<?php




abstract class User  {
  // name, password , createdDate, lastLogin
  public $name = "neturi";
  public $password = "xxxx";
  public $createdDate = "1900-00-00";
  public $lastLogin = "1900-00-01";
  // B) privaloma funkcija "Loguot()"
  // C) neprivaloma funkcija clearlastLoginTime()

  abstract function Logout();
  function clearlastLoginTime() {
    //code
  }

}
