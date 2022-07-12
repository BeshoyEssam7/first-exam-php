<?php 
if(isset($_POST["submitS"])){
session_start();


$userEmail = $_POST["userEmail"];
$userPass = $_POST ["userPass"];


$storedEmailinServer = $_SESSION["userData"][0];
$storedPassinServer=  $_SESSION["userData"][1];
 if(!empty($userEmail) && !empty($userPass) && $userEmail==$storedEmailinServer&&$userPass==$storedPassinServer){
    unset($_SESSION["WrongData"]);
     header("location:third.php");
  

// echo "write";
 }
 
 else{
     header("location:second.php");
     $_SESSION["WrongData"] = "user name or password is not correct";
 }

}

// else{
//     header("location:first.php");
// }
?>