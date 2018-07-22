<?php
ob_start();
session_start();
class Login {
        public static function isLoggedIn() {
                                    if(isset($_SESSION['login_username'])&&!empty($_SESSION['login_username']))
                          {
                          return true;
                          }
                          else
                          {
                          return false;
                          }
                                  }
}
?>
