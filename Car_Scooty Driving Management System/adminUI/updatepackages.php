<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php include_once "../header/adminheader.php";
    include "../db/admin/dbupdatepackages.php";  ?>
    <style>
        body {
            background-image: url("../pictures/headimg.jpg");
            background-color: #cccccc;
            background-repeat: no-repeat;

            background-size: 100%;
        }
        label{
            font-weight: bold;
        }
    </style>

</head>

<body>
    <br>
    <br>
    <br>
    <div style=" width: 50%; margin:auto;background:white; padding:35px; ">
    <div style="background:#C1F9C6; padding:10;">
            <h2>Update Package Detail </h2>
             <span>All fields are required.</span>
            <a href="managepackages.php" style="float:right;"><button class="btn-outline-primary">Go Bak</button></a>
        </div>
        <hr>
<form method="POST">
        <div class="form-group">
            <label for="">Package Title</label>
            <input type="text" name="ptitle" id="" class="form-control" placeholder="Enter Package Name Here...." value="<?php echo $packagename; ?>">
        </div>

        <div class="form-group">
            <label for="">Package Price/Fee</label>
            <input type="text" name="pfee" id="" class="form-control" placeholder="Enter Fee of Package in Rupees"  value="<?php echo $packagefee; ?>" >

        </div>
        <div class="form-group">
            <label for="">Package Detail</label>
            <textarea name="pdetail" rows="4" cols="30" placeholder="Enter Package Detail"...." class="form-control btns"><?php echo $packagedetail; ?></textarea> 
        </div>


        <div class="form-group">
            <label for="">Status</label>
            <select name="spstatus" class="form-control">
                <option value="Active" <?php if ($status == "Active"){
                    echo "selected"; } ?>
                >Active</option>
                <option value="De-Activated"  <?php if ($status == "De-Actived"){
                    echo "selected"; } ?>>De-Activated</option>
            </select>
        </div>

        <div class="form-group">

            <input type="submit" name="update" id="" class="btn btn-success form-control" value="Update Packages">
        </div>
                </form>
                <br>
       
    </div>
    <br>
    <br>
    <br>



</body>

</html>