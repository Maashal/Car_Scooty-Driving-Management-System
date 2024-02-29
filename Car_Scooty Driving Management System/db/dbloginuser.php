<?php

// if (isset($_GET['btnsubmit'])) {

//   $username = $_POST['usridd'];
//   $userpassword = $_POST['upasss'];

//   $userrole = $_REQUEST['loginas'];   ///getting user info from url

//   if ($userrole == "Admin") {

//     $query = "SELECT * FROM admin where  userID = '$username' and passwrd='$userpassword'";
//     $result = mysqli_query($conn, $query);
//     if (mysqli_num_rows($result) == true) {
//       //redirecting to admin home page
//       header('Location: admin/adminhome.php');
//       $msg  = "<span class='alert alert-danger'>Username or Password is Wrong.</span><br>";
//     } else {
//       $msg  = "<span class='alert alert-danger'>Username or Password is Wrong.</span><br>";
//     }
//   } else if ($userrole == "Trainer") {
//     $query1 = "SELECT * FROM trainertable where t_email = '$username' and t_loginpasswrd='$userpassword'";

//     $result1 = mysqli_query($conn, $query1);

//     #this is optional   fetching first and last name from database 
//     while ($row = $result1->fetch_assoc()) {
//       $uname = $row["t_name"];
//       $userid = $row["tid"];
//     }

//     if (mysqli_num_rows($result1) == true) {

//       #starting session to show name
//       $_SESSION['username'] = $uname;
//       $_SESSION['userid'] = $userid;

//       //redirecting to admin home page
//       header('Location: trainer/trainerhome.php');
//     } else {
//       $msg = "<span class='alert alert-danger'>Username or Password is Wrong.</span><br><br>";
//     }
//   } else if ($userrole == "Student") {
//     $query2 = "SELECT * FROM studenttable where s_email = '$username' and s_loginpasswrd='$userpassword'";

//     $result2 = mysqli_query($conn, $query2);

//     #this is optional   fetching first and last name from database 
//     while ($row = $result2->fetch_assoc()) {
//       $studentid = $row["sid"];
//       $uname = $row["s_name"];
//     }

//     if (mysqli_num_rows($result2) == true) {

//       #starting session to show name in next homepage activity

//       $_SESSION['uid'] = $studentid;
//       $_SESSION['uname'] = $uname;

//       //redirecting to admin home page
//       header('Location: student/studenthome.php');
//     } else {
//       $msg = "<span class='alert alert-danger'>Username or Password is Wrong.</span><br><br>";
//     }
//   }
// } //if statement end


include 'connection.php';
$rmsg = "";
$hiddenfields = false;
 //query for inserting data
 if (isset($_POST['btnsubmit'])) {
  $username = $_POST['useridd'];
  $userpassword = $_POST['upasss'];
  $role = $_GET['loginas'];

  if ($role == "Admin") {

    //if admin option is selected then ....
    $query = "SELECT * FROM admin where userid = '$username' and userpasswrd='$userpassword'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == true) {
      //redirecting to admin home page
      $_SESSION['role'] ="Admin";

      header('Location: adminUI/adminhome.php');
    } else {
      $rmsg  = "<span class='alert alert-danger'>Username or Password is not matched".mysqli_error($conn)."</span><br>";
    }
  } 
  
  
  else if ($role == "Trainer") {
    $query1 = "SELECT * FROM trainertable where t_email = '$username' and t_loginpasswrd='$userpassword'";

    $result1 = mysqli_query($conn, $query1);

    #this is optional   fetching first and last name from database 
    while ($row = $result1->fetch_assoc()) {
      $uname = $row["t_name"];
      $userid = $row["tid"];
    }

    if (mysqli_num_rows($result1) == true) {

      #starting session to show name in next homepage activity
      $_SESSION['role'] ="Trainer";
      $_SESSION['username'] = $uname;
      $_SESSION['userid'] = $userid;

      //redirecting to admin home page
      header('Location: trainerUI/trainerhome.php');
    } else {
      $rmsg = "<span class='alert alert-danger'>Username or Password is not matched.</span><br><br>";
    }
  }
  
  else if ($role == "Student") {
    $query2 = "SELECT * FROM studenttable where s_email = '$username' and s_loginpasswrd='$userpassword'";

    $result2 = mysqli_query($conn, $query2);

    #this is optional   fetching first and last name from database 
    while ($row = $result2->fetch_assoc()) {
      $studentid = $row["sid"];
      $uname = $row["s_name"];
    }

    if (mysqli_num_rows($result2) == true) {

      #starting session to show name in next homepage activity

      $_SESSION['role'] ="Student";
      $_SESSION['userid'] = $studentid;
      $_SESSION['username'] = $uname;

      //redirecting to admin home page
      header('Location: studentUI/studenthome.php');
    } else {
      $rmsg = "<span class='alert alert-danger'>Username or Password is not matched.</span><br><br>";
    }
  }
} //if statement end
