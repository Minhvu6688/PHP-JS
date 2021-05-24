<?php
session_start();
$_SESSION = array(); //empty array
unset($_SESSION);
session_destroy();
//redirect website bằng PHP
header("Location: http://localhost:81/code/index.php");
exit;
