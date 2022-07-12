<?php 
session_start();
if(isset($_POST["submit"])){

$username = $_POST["username"];
$emailOrMobile = $_POST["emailOrMobile"];
$password = $_POST["password"];




$errors =[];

if(empty($username)){
    $errors[] = "username is required";
}
elseif(
    // !is_string($username) 
     is_numeric($username)){
    $errors[]= " username must be string";
    }
elseif(strlen($username)<6 || strlen($username)>15){
    $errors[]="user name must be <8 and >15";
}





if(!preg_match('/^[0-9]{11}+$/', $emailOrMobile) && !filter_var($emailOrMobile,FILTER_VALIDATE_EMAIL)){
    $errors[]="not valid email mobile number";
}

elseif(empty($emailOrMobile)){
    $errors[] = " email  is required";
}
// elseif(!filter_var($emailOrMobile,FILTER_VALIDATE_EMAIL) ){
//     $errors[] = "not valid email ";
// }
else{
    setcookie("email",$emailOrMobile,time()+60*60);
}
// elseif(!is_numeric($emailOrMobile)){
//     $errors[] = "not valid email or mobile";

// }


// Given password
// $password = 'user-input-pass';

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
$errors[]='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.'
;}






if(empty($errors)){
    header("location:second.php");
    $_SESSION["userData"]=[$emailOrMobile,$password,$username];
    setcookie("pass",$password,time()+30);

    if(isset($_SESSION["WrongData"])){
        unset($_SESSION["WrongData"]);
    }
}else{header("location:first.php");
setcookie("Username1",$username,time()+60);
setcookie("emailormob", $emailOrMobile,time()+60);
}
// if(empty($password)){
//     $errors[] = "pass can not be empty";
// }elseif(strlen($password)<8){
// $errors[]="mus br more than 8";
// }
$_SESSION["errors"]=$errors;

print_r($errors);
echo "<br>";
echo $password;
}
?>