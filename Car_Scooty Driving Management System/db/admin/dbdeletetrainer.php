<?php


#adding db connection files
include 'connection.php';

//deleting data if id found
if(isset($_GET['delete'])){

    //getting id from url
    $id = $_GET['delete'];


//deleting data by studentid+

    $query_delete = "delete from trainertable where tid ='$id'";
    $result = mysqli_query($conn, $query_delete);
    
    if ($result == true) {
        $_SESSION['resultmsg'] =  '<p class="alert-success alert"> <i class="fa fa-check-circle" style="color:green"></i> &emsp; Profile Information is deleted  Successfully.     
        <span style="float:right; margin-right:20px; color:blue;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
        </p>';
          
          //redirecting to user home page
            header('Location: ../../adminUI/managetrainer.php');
        exit();
                        
    } else {
        $_SESSION['resultmsg'] = '<p class="alert-danger alert" > <i class="fa fa-exclamation-triangle" style="color:yellow;"></i> &emsp; Profile Info is not deleted Due to due to '. mysqli_error($conn) . '
        <span style="float:right; margin-right:20px; color:red;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
        </p>';
        header('Location: ../../adminUI/managetrainer.php');
        $conn->close();
    }}

    ?>