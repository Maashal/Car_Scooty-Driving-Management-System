<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- including css -->
    <link rel="stylesheet" href="../css/index.css">
    <?php include_once "../header/trainerheader.php";  ?>

    <style>
        table {
            width: 100%
        }
    </style>

</head>


<body>
<div style="padding:20px; width:65%; margin:auto;">

        <div id="hidemsgsession">

            <?php include "../db/trainer/dbprofile.php";

            if (isset($_SESSION["resultmsg"])) {
                echo  "<br><br>" . $_SESSION["resultmsg"];
                unset($_SESSION["resultmsg"]);
            }
            ?>
        </div>

</div>


    <div style="width:60%; margin:auto; background:lightblue; padding:30px; box-shadow: 0px 0px 10px 0px grey;">

        <p class="alert bg-dark" style="font-size:22px; color:white">Booking's History
            <form method="post">

                <input type="submit" value="Pending Requests" class="btn btn-info" name="pending" style="width:33%">
                <input type="submit" value="Accepted Requests" class="btn btn-success" name="accept" style="width:33%">
                <input type="submit" value="Rejected Requests" class="btn btn-danger" name="reject" style="width:33%">
            </form>
        </p>
 </div>
        
        <?php include "../db/trainer/dbviewbhistory.php";
                 ?>

        <br>
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="../jquery/session.js"></script>

</body>

</html>