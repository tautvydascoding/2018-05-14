


<?php
      include_once('user.php');
      include_once('edit.php');

      class Admin extends User implements Edit {
          function Logout(){
            //code..
          }
          public function changeName($a) {
            $this->name = $a;
          }
          public function getName() {
            return $this->name;
          }
          public function isLogin() {

          }
      }

      $Povilas = new Admin();
