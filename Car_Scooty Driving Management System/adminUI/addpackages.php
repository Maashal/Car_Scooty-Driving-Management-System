<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php include_once "../header/adminheader.php";
    include "../db/admin/dbaddpackages.php";  ?>


</head>

<body>
    <br>
    <br>
    <br>
    <div style=" width: 40%; margin:auto; background:white; padding:25px; box-shadow:0px 0px 12px 0px grey; ">
        <div style="background:#C1F9C6; padding:10;">
            <h2>Add New Packages </h2> <span>All fields are required.</span>
            <a href="managepackages.php" style="float:right;"><button class="btn-outline-primary">Go Bak</button></a>
        </div>
        <hr>
        <form method="POST">
            <div class="form-group">
                <label for="">Package Name</label>
                <input type="text" name="ptitle" id="" class="form-control" placeholder="Enter Package Name Here....">
            </div>

            <div class="form-group">
                <label for="">Charges</label>
                <input type="number" name="pfee" id="" class="form-control" placeholder="Enter Charges of Package">

            </div>
            <div class="form-group">
                <label for="">Package Detail</label>
                <textarea name="pdetail" rows="4" cols="30" placeholder="Enter Package Detail"...." class="form-control btns"><?php echo $packagedetail; ?></textarea> 
        </div>

            <div class="form-group">

                <input type="submit" name="add" class="btn btn-primary form-control" value="Save Package Detail">
            </div>
        </form>
        <br>
        <?php if (isset($_POST['add'])) {
            echo $resultmsg;
        } ?>
    </div>
    <br>
    <br>
    <br>



</body>

</html>