<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <?php include_once "../header/adminheader.php"; ?>


</head>

<body>

  <div style="padding:20px; width:65%; margin:auto;">

    <div id="hidemsgsession">

      <?php

      if (isset($_SESSION["resultmsg"])) {
        echo  "<br><br>" . $_SESSION["resultmsg"];
        unset($_SESSION["resultmsg"]);
      }
      ?>
    </div>
  </div>
  <div style=" width: 50%; margin:auto; ">

    <p class="alert alert-dark" style="font-size:22px;">Manage Packages Information
      <a href="addpackages.php"><button class="bg-dark" style="color:white; float:right; margin-right:15px;">Add New Package</button></a>
    </p>
    <?php
    include "../db/admin/dbviewpackages.php"; ?>

  </div>
  <br>
  <br>
  <br>



</body>

</html>