<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">


    <?php

    include "../header/studentheader.php";
    include "../db/student/dbbooktrainer.php";
    ?>

</head>

<body>

    <br>
    <br>
    <br>
    <div style="padding:20px; width:40%; background:white; margin:auto; box-shadow: 0px 0px 12px 0px grey;">

        <h1>Trainer Booking Form</h1>
        <p>All Fields are Required.</p>
        <hr>
        <?php if (isset($_POST['btnbook'])) {
            echo "<br>" . $resultmsg . "<br><br>";
        } ?>

        <form method="post">
            
        <div class="form-group">
                <label>Please Select Package </label> &emsp; &emsp;
                
                    <?php echo $packge; ?>

            </div>

            <div class="form-group">
                <label>Please Select Time of Class: </label>
                <input type="time" name="timing" placeholder=" Select class timing...." class="form-control" required>
            </div>
         

            
                <div class="form-group">
                        <label >Please Comments (Optional) </label>
                        <textarea class="form-control" id="exampleInput" rows="3" name="comments" placeholder="Enter your message/comment here... if(any)" required></textarea>
                    </div>

         
            <div class="form-group">

                <input type="submit" value="Create Booking" name="btnbook" class="form-control btn-info">
            </div>

        </form>



    </div>

</body>

</html>