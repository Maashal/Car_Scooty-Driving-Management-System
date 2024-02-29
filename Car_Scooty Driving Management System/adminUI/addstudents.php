<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- including css -->
    <link rel="stylesheet" href="../css/registeraccount.css">


    <?php include "../header/adminheader.php";
    include "../db/admin/dbaddstudent.php";

    ?>

<body>

    <br>
    <span style="width:50%; margin:auto;">
        <!-- php script for showing msg for registration  -->
        <?php if (isset($_POST['btnregister'])) {
            echo $msg;
        } ?>
    </span>

    <br>
    <div id="div1">

        <div style="background:#C1F9C6; padding:10;">
            <h1> Add New Student</h1>
            <span>All fields are required.</span>
            <a href="managestudents.php" style="float:right;"><button class="btn-outline-primary">Go Bak</button></a>

        </div>


        <div id="divform">
            <form method="POST">

                     <div class="form-group btns">
                    <label>Full Name:</label>
                    <input type="text" placeholder="Enter Full Name...." name="uname" class="form-control btns" required />
                </div>

                <div class="form-group btns">
                    <label>Gender:</label> &emsp;&emsp;&emsp;
                    <label class="radio-inline">
                        <input type="radio" name="ugender" value="Male" class=" btns" required> &emsp; Male
                    </label> &emsp;&emsp;
                    <label class="radio-inline">
                        <input type="radio" name="ugender" value="Female" class=" btns" required> &emsp; Female
                    </label>
                </div>

                <div class="form-group btns">
                    <label>Contact Number:</label>
                    <input type="number" placeholder="Enter Your Contact Number...." name="ucontact" class="form-control btns" required />
                </div>


                <div class="form-group btns">
                    <label>City Name:</label>
                    <input type="text" placeholder="Enter Your CIty Name...." name="ucity" class="form-control btns" required />
                </div>
                <div class="form-group btns" id="stdaddress">
                    <label>Residence Address:</label>
                    <textarea name="address" rows="4" cols="30" placeholder="Enter Your Full Address...." class="form-control btns"></textarea> </div>
              

                    <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="usremail" id="" class="form-control" placeholder="Enter Valid User email...." required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="usrpasswrd" id="" class="form-control" placeholder="Enter Valid password...." required>
                            </div>
             
                <div class="form-group ">

                    <input type="submit" name="btnregister" value="Register Account" class="btn btn-info" style="margin:auto; float:right;">

                </div>
            </form>
            
        </div>
        <br><br>
    </div>
</body>

</html>