<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php include_once "../header/trainerheader.php"; ?>


</head>

<body>
    <br>
    <br>
    <br>
    <div id="div1" style="width:60%; margin:auto; background:lightgray; padding:10px; text-align:center;">

        <h1>Welcome <span style="color:blue;"> <?php
                                                    if (isset($_SESSION["username"])) {
                                                        echo $_SESSION["username"];
                                                    } ?></span></h1>

        <p>Please Select any option from above navigation bar to get touch with this project features.</p>

    </div>
    <br>
    <br>
    <br>



</body>

</html>