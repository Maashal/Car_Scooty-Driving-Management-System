<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- including css -->
    <link rel="stylesheet" href="css/index.css">

    <!-- including backend filesF -->
    <?php include "header/mainheader.php";
    include "db/dbregisteraccount.php";
    ?>
</head>

<body>
    <div id="div1">
        <section>
            <!-- left div -->
            <div class="divm">

                <div style="background:#5CB85C; padding:5px; text-align:center">
                    <h2>Welcome to <br>Car & Scooty Driving School Management System</h2>
                </div>

                <div id="section2">


                    <div class="mindiv" style="width:35%">
                        <br>
                        <br>
                        <a href="login.php?loginas=Admin"><button class="buttns" style="background:#5BC0DE; padding:5px;">Login As Admin</button></a> <br>
                        <a href="login.php?loginas=Trainer"><button class="buttns" style="background:#5B68DE; padding:5px; color:white">Login As Trainer</button></a><br>
                        <a href="login.php?loginas=Student"><button class="buttns" style="background:#5BDE7A; padding:5px;">Login As Student</button></a><br>
                    </div>

                    <div class="mindiv" style="  border-left: 2px solid grey; padding-left:70px; width: 55%">
                        <h1>Register Account</h1>
                        <hr>
                        <form method="post">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="usremail" id="" class="form-control" placeholder="Enter Valid User email...." required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="usrpasswrd" id="" class="form-control" placeholder="Enter Valid password...." required>
                            </div>

                            <div class="form-group">

                                <input type="submit" name="btncontinueregister" id="" class="form-control btn btn-primary" value="Go to Step 2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- right div -->
            <div class="divm">

                <img src="images/maingimg.jpg" style="width:100%; height:auto;" />

            </div>

        </section>


    </div>
</body>

</html>