<?php
  session_start();

if(!isset($_SESSION['login_user'])) {
    header("location: Login_page.php");
}
?>