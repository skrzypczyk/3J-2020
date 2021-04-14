<?php

session_start();


//Timestamp : secondes depuis le 1er Jan 1970 :  création unix

//setcookie("pseudo", "Prof", time()+1000 );


//echo $_COOKIE['pseudo'];


$_SESSION["auth"] = true;
$_SESSION["email"] = "y.skrzypczyk@gmail.com";


//auth|b:1;email|s:22:"y.skrzypczyk@gmail.com"


echo $_SESSION["email"];