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
  ?>

  <?php if(isset($_SESSION["fullName"])
  &&isset($_SESSION["userData"])
  &&isset($_SESSION["emailAddress"])
  &&isset($_SESSION["birthdate"])
  &&isset($_SESSION["mobileNumber"])
  &&isset($_SESSION["gender"])
  &&isset($_SESSION["imgscr"])) { ?>
  <div class="container mt-5">
    <h3 class="text-center">Your data</h3>
    <div class="d-flex justify-content-end">
  <form action="handleLogOut.php"><button>Log Out</button></form>
    </div>
    <table class="table">
      <thead>
        <tr>

          <!-- <th scope="col">#</th> -->
          <!-- <th>First</th> -->
          <!-- <th ></th> -->
          <!-- <th scope="col">Handle</th> -->
        </tr>
      </thead>
      <tbody>
        <tr>
          <!-- <th scope="row">1</th> -->
          <td>Full Name</td>
          <td><?php  echo $_SESSION["fullName"] ?></td>

          <!-- <td>@mdo</td> -->
        </tr>
        <tr>
          <!-- <th scope="row">2</th> -->
          <td>Email</td>
          <td><?php echo $_SESSION["emailAddress"] ?></td>
          <!-- <td>@fat</td> -->
        </tr>
        <tr>
          <!-- <th scope="row">3</th> -->
          <td>Date Of Birth</td>
          <td><?php echo $_SESSION["birthdate"] ?></td>
          <!-- <td>@twitter</td> -->
        </tr>
        <tr>
          <!-- <th scope="row">3</th> -->
          <td>Mobile</td>
          <td><?php echo $_SESSION["mobileNumber"] ?></td>
          <!-- <td>@twitter</td> -->
        </tr>
        <tr>
          <!-- <th scope="row">3</th> -->
          <td>Geneder</td>
          <td><?php echo $_SESSION["gender"] ?></td>
          <!-- <td>@twitter</td> -->
        </tr>
        <tr>
          <!-- <th scope="row">3</th> -->
          <td>profile</td>
          <td><img width="10%" src="images/<?php echo $_SESSION["imgscr"]; ?>" alt="fff"></td>
          <!-- <td>@twitter</td> -->
        </tr>
      </tbody>
    </table>
    <!-- <p>to update click </p> -->

    <form action="third.php"> <button>Update Data</button></form>
    </p>
  </div>
  <!-- <p>to update click </p> -->

  <!-- <form action="third.php"> <button>here</button></form>
  </p> -->


<?php } else{
  echo "معلش سجل بياناتك الأول (:  ";
}?>
 <!-- <a href="first.php">من هنا</a> -->

</body>
</html>

