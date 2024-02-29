<!doctype html>
<html lang="en">

<head>
    <title>Admin Panel View Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/index.css">



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
    <div style=" width: 70%; margin:auto; background:white; padding:35px; ">


        <p class="alert alert-dark" style="font-size:22px;">Trainers Information
    
        <a href="addtrainer.php"><button class="bg-dark" style="color:white; float:right; margin-right:15px;">Add New Trainer</button></a>
    </p>


        <form action="" method="post">
           <input type="text" name="searchtrainer" id="searchtrainer" placeholder="Enter ID/ name to Search" style="width:40%; padding:5px">
                        <select name="searchinp" id="srchemp" style="width:20%; padding:5px;">

                            <option value="Name">Search by Name</option>
                            <option value="ID">Search by ID</option>
                        </select>&emsp;&emsp;
                        <button name="btnsearch" class="btn btn-primary">Search Trainer</button>
                        &emsp; <button name="viewall" class="btn btn-success">Show All Trainer</button>
             
        </form>

       
        <!-- Showing all data in table -->

        <br>
        <table class='table table-striped'>

            <?php include "../db/admin/dbviewtrainer.php"; ?>


        </table>
    </div>

    </div>

    <br>

</body>

</html>