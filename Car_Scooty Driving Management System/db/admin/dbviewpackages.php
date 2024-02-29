<?php

include "connection.php";

//getting packages info
$query = "SELECT * from packagestable";

$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $packageid = $row['pid'];
        $packagename = $row['p_name'];
        $packagefee = $row['p_charges'];
        $packagedetail = $row['p_detail'];
        $status = $row['pstatus'];



        echo ' 
        <div style="height:auto; padding: 15px; background:#BBDEFB;" class="form-control">
        <h3 style="background:#FFFFFF; padding:12px;">' . $packagename . ' 
         <span style="float:right; margin-right:20px;"> <b>Price: </b> &emsp; PKR ' . $packagefee . '/- &nbsp; </span>
         </h3><hr>
       
        <span >&emsp;&emsp;&emsp;' . $packagedetail . ' </span><br><hr> ';   
        
        echo "<div style='float:right; margin-right:20px;'>
        <a href='updatepackages.php?updatepackageid=" . $packageid . "'><button type='button' class='btn btn-warning' >Update Package Detail</button></a>
        <a href='../db/admin/dbdeletepackage.php?deletepackageid=" . $packageid . "'><button type='button' class='btn btn-danger'>Delate Package</button></a>
        </div><br><br>
        </div><br>
        ";
       
       
    };
}

else{
    echo " No Package Information Available at this time";
}
