<?php

abstract class User {
        public $name = "neturi";
        public $password = "12345 ";
        public $createdDate = "123 ";
        public $lastLogin = "456 ";

        abstract function logOut();

      function clearLastLoginTime() {

        }


}
