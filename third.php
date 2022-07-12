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

    <?php

    session_start();
    // echo $_SESSION["WrongData"];
    // unset($_SESSION["WrongData"]);
    ?>
  <?php if(isset($_SESSION["userData"])) { ?>

    <div class="container my-5">
        <div class="d-flex justify-content-end">
            <form action="handleLogOut.php"><button>Log Out</button></form>
        </div>
        <h3 class="text-center"> Form apply for a job</h3>
        <?php

        if (isset($_SESSION["formAndImageErrors"])) foreach ($_SESSION["formAndImageErrors"] as $key => $value) {
            foreach ($value as $errorvalue) {      ?>


                <div class="alert alert-danger "> <?php
                                                    echo $errorvalue;
                                                    ?> </div>



        <?php
            }
        };


        ?>
        

        <form action="Fthird.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="fullName" value="<?php if (!empty($_SESSION["fullName"])) {
                                                                echo $_SESSION["fullName"];
                                                            } else   ?>" placeholder="full name" <?php ?> class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input placeholder="Email" type="text" name="emailAddress" value="<?php if (!empty($_SESSION["emailAddress"]))  echo $_SESSION["emailAddress"]; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" placeholder="mobile" name="mobileNumber" value="<?php if (!empty($_SESSION["mobileNumber"]))  echo $_SESSION["mobileNumber"]; ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female" id="gender">
                    <label class="form-check-label" for="gender">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" id="gender2">
                    <label class="form-check-label" for="gender2">
                        Male
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date of birth</label>
                    <input type="date" value="<?php if (!empty($_SESSION["birthdate"]))  echo $_SESSION["birthdate"]; ?>" name="BirthDate">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload profile picture</label>
                    <div>
                        <input type="file" name="profie" id="formFile">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload screenshots of your projects</label>
                    <div>
                        <input type="file" name="projectScrs" id="formFile">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">upload your cv and files of your projects
                    </label>
                    <div>
                        <input type="file" name="cv" id="formFile">

                    </div>
                </div>
            </div>



            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <?php } else{
  echo "معلش سجل بياناتك الأول (:  ";
}?>
 <!-- <a href="first.php">من هنا</a> -->


</body>

</html>