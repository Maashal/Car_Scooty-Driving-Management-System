<?php


#adding db connection files
include 'connection.php';


//deleting data if id found
if(isset($_GET['delete'])){

    //getting id from url
    $id = $_GET['delete'];


//deleting data by studentid+

    $query_delete = "delete from studenttable where sid ='$id'";
    $result = mysqli_query($conn, $query_delete);
    
    if ($result == true) {
        session_start();
       $_SESSION["sessionmsg"] = "<span class='alert alert-danger'>Record Has been Deleted Successfully</span><br>";
          //redirecting to user home page
            header('Location: ../../adminUI/managestudents.php');
        exit();
                        
    } else {
       echo "<p > Data not deleted due to".mysqli_error($conn). "</p>";
       $conn->close();
    }}

    ?>