<?php


#adding db connection files
include 'connection.php';



//deleting data if id found
if(isset($_GET['deletepackageid'])){

    //getting id from url
    $pid = $_GET['deletepackageid'];


//deleting data by packageiod+

    $query_delete = "delete from packagestable where pid ='$pid'";
    $result = mysqli_query($conn, $query_delete);
    
    if ($result == true) {
        
        $_SESSION['resultmsg'] =  '<p class="alert-success alert"> <i class="fa fa-check-circle" style="color:green"></i> &emsp; Package Record is Deleted Successfully.
          
        <span style="float:right; margin-right:20px; color:blue;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
        </p>';
       
        header("Location: ../../adminUI/managepackages.php");
   } else {
        $_SESSION['resultmsg'] = '<p class="alert-warning alert" > <i class="fa fa-exclamation-triangle" style="color:yellow;"></i> &emsp; Unable to Delete package due to '. mysqli_error($conn) . '
        <span style="float:right; margin-right:20px; color:red;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
        </p>';
                
        header("Location: ../../adminUI/managepackages.php");
   }
    }

    ?>