<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/usrprofile.css">


    <?php

    include "../header/trainerheader.php";
    include "../db/trainer/dbprofile.php";
    ?>


</head>

<body>

    <div style="padding:20px; width:65%; margin:auto;">
        <h1 style="color:darkolivegreen; letter-spacing:5px">User Profile</h1>
        <hr>
        <div id="divleft">

            <?php
            if ($gender == "Male") {
                echo '    
                              <img class="d" src="../images/male.png" style="width:220px; height: auto;">';
            } else {
                echo ' 
                              <img class="d" src="../images/female.png" style="width:220px; height: auto;">';
            }
            ?>

            <h1>
                <?php
                echo "<h1>" . $name . "</h1>
                        <p id='pemail'>" . $email . "</p>";
                ?>
            </h1>
            <hr>

            <a href="profile.php"><button class="btn-danger btnup">Cancel</button></a>

            <br>
        </div>
        <div class="divright">
            <h2 class="alert-dark">Update Profile</h2>

            <form method="POST">

                <table class="table table-borderedless">

                    <tr>
                        <td id="col1">Full Name</td>
                        <td> <input type="text" placeholder="Enter Full Name...." name="uname" class="form-control btns" required value="<?php echo $name; ?>" />

                        </td>

                    </tr>

                    <tr>
                        <td id="col1">Gender</td>
                        <td> <label class="radio-inline">
                                <input type="radio" name="ugender" value="Male" class=" btns" required <?php
                                                                                                        if ($gender == "Male") {
                                                                                                            echo 'checked';
                                                                                                        }
                                                                                                        ?>> &emsp; Male
                            </label> &emsp;&emsp;
                            <label class="radio-inline">
                                <input type="radio" name="ugender" value="Female" class=" btns" required <?php
                                                                                                            if ($gender == "Female") {
                                                                                                                echo 'checked';
                                                                                                            }
                                                                                                            ?>> &emsp; Female
                            </label>
                        </td>

                    </tr>
                    <tr>
                        <td id="col1">Contact Number</td>
                        <td><input type="number" placeholder="Enter Your Contact Number...." name="ucontactd" class="form-control btns" value="<?php echo $contact; ?>" required />
                        </td>
                    </tr>



                    <tr>
                        <td id="col1">City</td>
                        <td><input type="text" placeholder="Enter Your CIty Name...." name="ucity" class="form-control btns" value="<?php echo $city; ?>" required />
                        </td>
                    </tr>


                    <tr>
                        <td id="col1">Address</td>
                        <td> <textarea name="address" rows="4" cols="30" placeholder="Enter Your Full Address...." class="form-control btns"> <?php echo $address; ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td id="col1">Email</td>
                        <td> <input type="email" name="usremail" class="form-control" placeholder="Enter Valid User email...." value="<?php echo $email; ?>" required>
                        </td>
                    </tr>

                    <tr>
                        <td id="col1">Password<br> <small> (Your Old Password is: <?php echo $password; ?> )</small></td>
                        <td> <input type="password" name="usrpasswrd" class="form-control" placeholder="Enter Valid password...." value="<?php echo $password; ?>" required>
                        </td>
                    </tr>

                    <tr>
                        <td id="col1">About You/Your Service</td>
                        <td> <textarea name="udetail" rows="4" cols="30" placeholder="Enter detail here...." class="form-control btns"><?php echo $srdetail; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td id="col1">Services Categoroy: <small>Check boxes which you are providing</td>
                        <td>
                            <input type="checkbox" name="services[]" id="" value="Scooty/Bike" class="btns" <?php if (strpos($vdetail, "Scooty/Bike") !== false) {   //strpos stands for string positoin it is use to seprate words in specific format
                                                                                                                                        echo "checked";
                                                                                                            } ?>> &nbsp; Scooty/Bike &emsp;
                            <input type="checkbox" name="services[]" id="" value="Car" class="btns" <?php if (strpos($vdetail, "Car") !== false) {
                                                                                                        echo "checked";
                                                                                                    } ?>> &nbsp; Car &emsp;
                            <input type="checkbox" name="services[]" id="" value="Public Transport Vehicles " class="btns" <?php if (strpos($vdetail, "Public Transport Vehicles") !== false) {
                                                                                                                                echo "checked";
                                                                                                                            } ?>> &nbsp; Public Transport Vehicles &emsp;
                            <input type="checkbox" name="services[]" id="" value="Loading Vehicles" class="btns" <?php if (strpos($vdetail, "Loading Vehicles") !== false) {
                                                                                                                        echo "checked";
                                                                                                                    } ?>> &nbsp; Loading Vehicles &emsp;
                        </td>
                    </tr>
                    <tr>
                        <td id="col1">Experience</td>
                        <td>
                            <input type="number" placeholder="Enter your experience in years only...." name="exprnce" class="form-control btns" value="<?php echo $exprnce; ?>" />
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">

                            <input type="submit" name="update" value="Save Changes" class="btn btn-info" style="margin:auto; float:right;">
                        </td>
                    </tr>



                </table>

        </div>
        </form>
    </div>
    <br>
    <br>
</body>

</html>