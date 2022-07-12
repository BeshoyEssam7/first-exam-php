<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>first</title>
</head>

<body>
    <div class="container mt-5">
        <?php session_start(); ?>
        <h3 class="text-center">Log in</h3>


        <form action="Fsecond.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" value="<?php if(!empty($_COOKIE["email"])) { echo $_COOKIE["email"];}?>" name="userEmail">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" value="<?php if(!empty($_COOKIE['pass'])) echo $_COOKIE["pass"]?>" class="form-control" id="exampleInputPassword1" name="userPass">
            </div>
            <?php
            if (isset($_SESSION["WrongData"])) {
                if (!empty($_SESSION["WrongData"])) { ?>
                   
                   <div class="alert alert-danger">
                   <?php  echo $_SESSION["WrongData"]; ?>
                   <br>
                   <a href="first.php"> not register ?</a>
                </div>
              <?php 
                }
            }
            else {
                unset($_SESSION["WrongData"]);
            }
            ?>
            <button type="submit"  class="btn btn-primary" name="submitS">Log in</button>
        </form>

    </div>

</body>

</html>