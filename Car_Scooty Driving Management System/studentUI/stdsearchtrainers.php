<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tutorial.css">

    <?php
    include "../header/studentheader.php";

    if (isset($_REQUEST['searchbtn'])) {

        $searchtext1 = $_POST['searchtxt'];
        $optiondropdown1 = $_POST['sp'];
        header("Location: stdsearchtrainers.php?searchtrd=adfadsfasf&searchtxt=$searchtext1&optiondrp=$optiondropdown1");
    }
    ?>
    <!-- css -->
    <style>
        #searchdiv {
            width: 85%;
            background: #b39ddb;
            margin: auto;
            padding: 15px;
        }

        .navc,
        #button {
            padding: 12px;
            width: 27%;
        }
    </style>

</head>

<body>

    <!-- search div -->
    <div id="searchdiv">
        <form method="post">

            <span style="font-size:22px;">
                <b>Search &nbsp;</b></span><input type="text" name="searchtxt" class="navc" id="inputfieldsearch" required="required" placeholder="Enter Text to Search" size="40">
            <select name="sp" class="navc">
                <option value="By Name">By Name</option>
                <option value="By ID">By ID</option>
                <option value="By City">By City</option>
                <option value="By Gender">By Gender</option>
                <option value="By Vehicle">By Vehicle Type</option>
            </select>
            &emsp;

            <button type="submit" class="btn btn-primary" name="searchbtn" id="button">Search Traier</button>

        </form>

    </div>

    <div style="width:90%; margin:auto;">

        <br>
        <?php include "../db/student/dbsearchtrainer.php";



        ?>

    </div>
    <br>
    <br>
</body>

</html>