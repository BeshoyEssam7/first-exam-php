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
        <h3 class="text-center">Register page</h3>
        <?php
        session_start();
        ?>
        <form action="Fhandle.php" method="post">
            <?php if (!empty($_SESSION['errors'])) {
                foreach ($_SESSION['errors'] as $value) { ?>

                    <div class="alert alert-danger">
                        <?php echo $value . "<br>"; ?>
                    </div>

                <?php  } ?>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Username</label>

                <input type="text"  value=" <?php if(isset($_COOKIE["Username1"])) echo $_COOKIE["Username1"]; ?>" class="form-control" name="username">

            </div>
            <div class="mb-3">
                <label class="form-label">Email or Mobile </label>
                <input type="text" value="<?php if(isset($_COOKIE["emailormob"])) echo $_COOKIE["emailormob"]; ?>" class="form-control" name="emailOrMobile">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <div>
                <a href="second.php">Already register</a>
            </div>

        </form>
        <?php
        // $_SESSION["errors"];

        ?>
    </div>

</body>

</html>