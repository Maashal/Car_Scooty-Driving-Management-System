<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/usrprofile.css">

    <?php
    include "../header/studentheader.php";
    ?>


</head>

<body>

    <div style="padding:20px; width:65%; margin:auto;">

        <div id="hidemsgsession">

            <?php include "../db/student/dbprofile.php";

            if (isset($_SESSION["resultmsg"])) {
                echo  "<br><br>" . $_SESSION["resultmsg"];
                unset($_SESSION["resultmsg"]);
            }
            ?>
        </div>

        <h1 style="color:darkolivegreen; letter-spacing:5px">User Profile</h1>
        <hr>
        <div id="divleft">

            <?php
            if ($gender == "Male") {
                echo '    
                              <img class="d" src="../images/male.png" style="width:220px; height: auto;">';
            } else {
                echo ' 
                              <img class="d" src="../images/female.png" style="width:220px; height: auto;">';
            }
            ?>

            <h1>
                <?php
                echo "<h1>" . $name . "</h1>
                        <p id='pemail'>" . $email . "</p>";
                ?>
            </h1>
            <hr>

            <a href="profile.php?updateprofile=12312ml21421&studentid=<?php echo $studentid; ?>"><button class="btn-info btnup">Update Profile</button></a>

            <br>
        </div>

        <div class="divright">
            <h2 class="alert-dark">Personal Detail</h2>

            <table class="table table-borderedless">
                <tr>
                    <td id="col1">Gender</td>
                    <td><?php echo $gender; ?> </td>
                    </td>
                </tr>
                <tr>
                    <td id="col1">Contact Number</td>
                    <td>0<?php echo  $contact; ?> </td>
                </tr>
                <tr>
                    <td id="col1">City</td>
                    <td><?php echo $city; ?></td>
                </tr>
                <tr>
                    <td id="col1">Address</td>
                    <td><?php echo $address; ?></td>
                </tr>

            </table>
        </div>

    </div>
    <br>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../jquery/session.js"></script>
</body>

</html>