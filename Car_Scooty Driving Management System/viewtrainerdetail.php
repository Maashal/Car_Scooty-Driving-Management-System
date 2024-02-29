<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">


    <?php

    // if user logged in then 
    if (isset($_SESSION['username'])) {
        include "../header/studentheader.php";
        include "../db/student/dbviewtrainerdetail.php";
    }
    // if user is not logged in 
    else {
        include "header/mainheader.php";
        include "db/student/dbviewtrainerdetail.php";
    }
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
                <td id="tds">Experiences</td>
                <td><?php echo  $exprience; ?> &nbsp; Years</td>
            </tr>

            <tr>
                <td id="tds">Can be Hire for:-</td>
                <td><?php echo $vname; ?></td>
            </tr>
        </table>
        <hr>

        <?php

      
            echo '<br><br><div class="alert alert-info"><span style="color:red"><b>Note:</b></span>
       <span >Please Login First to book trainer. <br><br>
       &emsp; &emsp; <a href="index.php">Click Here to Login</a></span></div>';
        


        ?>


        </td>
        </tr>
        </table>

        <h2>Detail</h2>

        <hr>

        <p><?php echo $detail; ?></p>
    </div>

</body>

</html>