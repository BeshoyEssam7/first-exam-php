<?php 
if( isset($_POST["submit"])){
session_start();
 
 $fullName= trim($_POST["fullName"]);
$emailAddress=$_POST["emailAddress"];
$mobileNumber =$_POST["mobileNumber"];
$gender=$_POST["gender"];
$BirthDate = $_POST["BirthDate"];
$formErrors = [];


// print_r($_FILES["profie"]);
$prfieTmp_name=$_FILES["profie"]["tmp_name"];
$prfieError = $_FILES["profie"]["error"];
$profieName = $_FILES["profie"]["name"];
$profieExt = strtoupper( pathinfo($profieName,PATHINFO_EXTENSION));
$random= uniqid();
$profieNewName =$random." ". $profieName;
// echo $profieNewName;
$imgError=[];
if(!empty($prfieError)){
    $imgError[]="plz upload valid image";
}elseif(!in_array($profieExt,["PNG","JPG","JPEG"])){
$imgError[]= "image extention should be ( png,jpg,jpeg)";
}

if(empty($imgError)){
move_uploaded_file($prfieTmp_name,"images/$profieNewName");
$_SESSION["imgscr"]=$profieNewName;
}

else{
   
}
// print_r($imgError);

if(empty( trim( $fullName))){
    $formErrors[]= "Full Name is Reuired";
}elseif(is_numeric($fullName)){
    $formErrors[]=" name can not be number";
}elseif(strlen( trim( $fullName))<8 || strlen (trim( $fullName))>30){
    $formErrors[]="name should be more than 8 character and less than 30";
}
else{
    $_SESSION["fullName"]=$fullName;
   
}


if(empty($emailAddress)){
    $formErrors[]="email is reuired";
}elseif(!filter_var($emailAddress,FILTER_VALIDATE_EMAIL)){
    $formErrors[]="not valid email";
}
else{
    $_SESSION["emailAddress"]=$emailAddress;
}

if(empty($BirthDate)){
    $formErrors[]="date of birth is requied";
}
else{
    $_SESSION["birthdate"]=$BirthDate;
}

if(!preg_match('/^[0-9]{11}+$/', $mobileNumber)) {
   $formErrors []="not valid mobile number ";
    } 
else{
    $_SESSION["mobileNumber"]=$mobileNumber;
}


if(empty($gender)){
    $formErrors[]="gender is required";
}elseif(!in_array($gender,["male","female"])){
    $formErrors[]="gender should be male or female";
}
else{
    $_SESSION["gender"]=$gender;
}



if(!empty($formErrors) || !empty($imgError)){
    print_r($formErrors);
    print_r($imgError);
   
    header("location:third.php");
}


else{
   header("location:fourth.php");
}

$_SESSION["formAndImageErrors"]=[$formErrors,$imgError];

}
// print_r($_POST);
// echo "<br>";
// print_r($_FILES);
?>