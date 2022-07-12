<?php 
session_start();
unset ($_SESSION["imgscr"]);

unset($_SESSION["fullName"]);
unset($_SESSION["emailAddress"]);
unset($_SESSION["birthdate"]);
unset($_SESSION["mobileNumber"]);
unset($_SESSION["gender"]);
unset ($_COOKIE["pass"]);
session_destroy();
    
setcookie("email",$emailOrMobile,time()-60*60);
setcookie("pass",null);
setcookie("Username1",$username,time()-60);
setcookie("emailormob", $emailOrMobile,time()-60);
header("location:first.php");
?>