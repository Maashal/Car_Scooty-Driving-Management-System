<?php
include "connection.php";

//getting packages info
$packageid = $_GET['updatepackageid'];

if(isset($_GET['updatepackageid'])){
    $query = "SELECT * from packagestable where pid = '$packageid'";
    $result = mysqli_query($conn, $query);    
    if ($result->num_rows > 0) {    
       $row = mysqli_fetch_assoc($result); 

       $packageid = $row['pid'];
       $packagename = $row['p_name'];
       $packagefee = $row['p_charges'];
       $packagedetail = $row['p_detail'];
       $status = $row['pstatus'];
    
    }
}

//updating packages detail

if(isset($_POST['update'])){

    $name = $_POST['ptitle'];
    $fee = $_POST['pfee'];
    $detail = $_POST['pdetail'];
    $pstatus = $_POST['spstatus'];

    $query = "UPDATE packagestable SET p_name = '$name', p_charges= '$fee', p_detail='$detail', pstatus='$pstatus' where pid = '$packageid'";
    $result = mysqli_query($conn, $query);    
    if ($result == true){
        $_SESSION['resultmsg'] =  '<p class="alert-success alert"> <i class="fa fa-check-circle" style="color:green"></i> &emsp; Package  Information is updated Successfully.
          
        <span style="float:right; margin-right:20px; color:blue;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
        </p>';
        header("Refresh: 1, managepackages.php");
    } else {
        $_SESSION['resultmsg'] = '<p class="alert-danger alert" > <i class="fa fa-exclamation-triangle" style="color:yellow;"></i> &emsp; Package Info is not Updated Due to due to '. mysqli_error($conn) . '
          <span style="float:right; margin-right:20px; color:red;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
          </p>';
          header("Refresh: 1, managepackages.php");
          $conn->close();
    }
    
    
}