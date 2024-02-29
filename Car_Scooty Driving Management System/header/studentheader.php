<!doctype html>
<html lang="en">

<head>


    <title>Car and Scooty Driving School Management System</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- font awsome css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> <!-- Required meta tags -->
    <!-- google font cdn -->
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- including external css -->
    <link rel="stylesheet" href="../css/headeruser.css">

</head>

<body>
    <!-- starting session -->
    <?php session_start();
    ?>

    <div style=" background:#4BECE2; width: 100%; padding:12px;">
        <h1 id="head">Car and Scooty Driving School Management System</h1>
    </div>

    <!-- Creating Menu without bootstrap-->
    <div id="divnav">
        <!-- creating home icone -->
        <a href="studenthome.php" style="color:black" > <i class="fa fa-home" ></i></a>

        <a href="stdsearchtrainers.php"  class="links">Search Trainers</a>
        <a href="packages.php"  class="links"> Packages Info</span></a>
        <a href="viewbookingshistory.php" class="links"> Booking History</a>
        <a href="profile.php"  class="links"> Manage Profile</a>

        <section>
            <span id="uslog">Logged in as <?php echo $_SESSION['role']; ?></span>
            <a href="../db/dblogout.php"  class="logout">
                <i class="fa fa-sign-out" style="font-size:30px; color:white;"></i>
                &nbsp; <span style="font-size:20px; color:orange;">Logout</span></a>

        </section>
    </div>

    <!-- footer -->
    <!-- <div class="footer"> <a href="http://www.vu.edu.pk" target="_blank" style="color:yellow;">Virtual University of Pakistan's</a> Final Project Developed by Hasnain Ahmed (BC170200335)</div> -->
    <hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../jquery/search.js"></script>

</body>

</html>