<?php 
session_start();
session_unset();
session_destroy();

//set cookies to expire
setcookie("userID", '' , time() - 3600, "/");
setcookie("userHash", '' , time() - 3600, "/");

header('Location: index.php');

