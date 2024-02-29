<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- including css -->
    <link rel="stylesheet" href="../css/index.css">
    <?php include_once "../header/adminheader.php"; ?>

    <style>
        table {
            width: 100%
        }
    </style>

</head>


<body>
<div style="width:70%; margin:auto; padding:15px; box-shadow:0px 0px 12px 0px grey;">
    <div style="width:100%; margin:auto; background:white; padding:30px;">

        <p class="alert alert-info" style="font-size:22px;">Hirings Information
            <form method="post">
                <input type="submit" value="Accepted Bookings" class="btn btn-success" name="accept" style="width:33%">
                <input type="submit" value="Rejected Bookings" class="btn btn-danger" name="reject" style="width:33%">
                <input type="submit" value="All Bookings" class="btn btn-info" name="all" style="width:33%">
            </form>
        </p>
    </div>



        <table class='table table-striped'>
            <?php include "../db/admin/dbviewbookings.php"; ?>
        </table>
    </div>


    <br>
    <br>
    <br>

</body>

</html>