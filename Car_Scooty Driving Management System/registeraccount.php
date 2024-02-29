<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- including css -->
    <link rel="stylesheet" href="css/registeraccount.css">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="jquery/register.js"></script>


    <?php include "header/mainheader.php";
    include "db/dbregisteraccount.php";

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
            <h1> Account Registration Form</h1>
            <span>All fields are required.</span>
            <a href="index.php" style="float:right;"><button class="btn-outline-primary">Go Bak</button></a>

        </div>

        <h3 id="h3step">Step 2</h3>

        <div id="divform">
            <form method="POST">

                <div class="form-group">
                    <label>Select Role</label>
                    <select class="form-control btns"  id="userrole" name="userrole">
                        <option value="Student">Student</option>
                        <option value="Trainer">Trainer</option>
                    </select>
                </div>

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
                <!-- div for trainer only -->
                <div id="divhide">

                    <div class="form-group btns">
                        <label>About You/Your Service:</small> </label>
                        <textarea name="udetail" rows="4" cols="30" placeholder="Enter detail here...." class="form-control btns"></textarea> </div>
                    <div class="form-group btns">
                        <label>Services Categoroy: <small>Check boxes which you are providing</small></label> <br>
                         <input type="checkbox" name="services[]" id="" value="Scooty/Bike" class="btns"> &nbsp; Scooty/Bike &emsp;
                        <input type="checkbox" name="services[]" id="" value="Car" class="btns"> &nbsp; Car &emsp;
                        <input type="checkbox" name="services[]" id="" value="Public Transport Vehicles " class="btns"> &nbsp; Public Transport Vehicles &emsp;
                        <input type="checkbox" name="services[]" id="" value="Loading Vehicles" class="btns"> &nbsp; Loading Vehicles &emsp;
                    </div>
                    <div class="form-group btns">
                        <label>Experience:</label>
                        <input type="number" placeholder="Enter your experience in years only...." name="exprnce" class="form-control btns" />
                    </div>

                </div>
                <div class="form-group ">

                    <input type="submit" name="btnregister" value="Register Account" class="btn btn-info" style="margin:auto; float:right;">

                </div>
            </form>
            <hr>
            <p style="text-align:center; font-size:18px;">Already have an account? &emsp; &emsp;
                <a href="index.php">Login Here</a></p>
        </div>
        <br><br>
    </div>
</body>

</html>