<!doctype html>
<html lang="en">

<head>
 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- including css -->
<link rel="stylesheet" href="../css/index.css">
    <?php include_once "../header/studentheader.php"; ?>

<style>
    table{
        width:100%
    }
</style>

</head>


<body >
    <div style="width:60%; margin:auto; background:white; padding:30px; box-shadow: 0px 0px 10px 0px grey;">

            <p class="alert alert-info" style="font-size:22px;">Booking's History
            <form method="post">
               
            <input type="submit" value="Pending Requests" class="btn btn-info" name="pending" style="width:33%">
             <input type="submit" value="Accepted Requests" class="btn btn-success" name= "accept" style="width:33%">
                <input type="submit" value="Rejected Requests" class="btn btn-danger" name="reject" style="width:33%">
         </form>
        </p>

            <span >
                <?php

                //showing message from session after delete/update
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?> </span>
     
            <hr>
            <table class='table table-striped'>
                <?php include "../db/student/dbviewbhistory.php"; ?>
                </table>
    </div>

<br>
<br>
<br>

</body>

</html>