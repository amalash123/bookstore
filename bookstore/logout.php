<?php
session_start();
session_destroy();
header('location:login/main-login.php');
?>