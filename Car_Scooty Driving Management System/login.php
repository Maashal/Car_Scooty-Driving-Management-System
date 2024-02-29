<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- including css -->
    <link rel="stylesheet" href="css/index.css">

    <!-- including backend filesF -->
    <?php include "header/mainheader.php";
    include "db/dbloginuser.php";
    ?>
    <style>
        input {
            padding: 15px;

        }

        .btn {
            width: 30%;
            float: right;
        }
    </style>
</head>

<body>
    <br>
    <br>
    <div style="width:40%; margin:0 auto; box-shadow: 0px 0px 10px 0px grey; padding:15px;">
        <h1>Login as <?php echo $_GET['loginas']; ?></h1>
        <p>Enter Valid Email Address and Password
            <a href="index.php" style="float:right;"><button class="btn-outline-primary">Go Bak</button></a>
        </p>
        <hr>
        <form method="POST">
                        <div class="form-group">
                            <label>User Email</label>
                            <input type="email" name="useridd" id="usrid" placeholder="Enter Valid Email Address..." required class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="upasss" placeholder="Enter Valid password..." required class="form-control">
                        </div>
                       
                        <div class="form-group">

                            <input type="submit" name="btnsubmit" value="Login" class="btn btn-primary form-control" >
                        </div>
                    </form>

                    <p>Do not have Account? &emsp; <a href="index.php">Create Here</a></p>
      
        <!-- showing error msg -->
        <?php if (isset($_POST['btnsubmit'])) {
            echo "        <br>  <br>
            ".$rmsg;
        }
        ?>
        <br>

    </div>
</body>

</html>