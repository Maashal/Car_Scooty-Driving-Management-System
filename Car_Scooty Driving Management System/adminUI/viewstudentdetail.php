<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">


    <?php

    include "../header/trainerheader.php";
    include "../db/trainer/dbviewstudentdetail.php";

    ?>

    <!-- css -->
    <style>
        #tr1 {
            background: lightgray;
            padding: 10px;
        }

        #tds {
            width: 25%;
            font-weight: bold;
            color: darkblue;
        }
    </style>
</head>

<body>

    <div style="padding:15px; width:65%; margin:auto; box-shadow: 0px 0px 15px 0px grey;">


        <?php

        if (isset($_SESSION['requestmsg'])) {

            echo  $_SESSION['requestmsg'];
            unset($_SESSION['requestmsg']);
        }

        ?>
        <table class="table table-borderless">

            <tr id="tr1">
                <td style="width:50%">

                    <?php
                    if ($gender == "Male") {

                        echo '      
        <img  src="../images/male.png" style="width:100%; height: auto;" class="img-thumbnail" >';
                    } else {
                        echo ' 
        <img class="d" src="../images/female.png" style="width:100%; height: auto;" class="img-thumbnail" >';
                    }
                    ?>

                </td>

                <td style="width:75%">
                    <h1>
                        <?php echo $name;  ?>
                    </h1>
                    <hr>
                    <table class="table table-borderedless">
                        <tr>
                            <td id="tds">Gender</td>
                            <td><?php echo $gender; ?> </td>
                </td>
            </tr>
            <tr>
                <td id="tds">Contact Number</td>
                <td>0<?php echo  $contact; ?> </td>
            </tr>


            <tr>
                <td id="tds">City Name</td>
                <td><?php echo $city; ?></td>
            </tr>

            <tr>
                <td id="tds">Email Address</td>
                <td><?php echo  $email; ?> &nbsp; </td>
            </tr>

        </table>
        <hr>
        <?php

        echo "<a href='updatestudent.php?update=" . $trainerid . "'><button class='btn btn-success' style='width:45%;'>Update</button></a> &emsp;
<a href='../db/admin/dbdeletestudent.php?delete=" . $trainerid . "'><button class='btn btn-danger' style='width:45%;'>Delete</button></a>";



        ?>
        </td>
        </tr>
        </table>


    </div>

</body>

</html>