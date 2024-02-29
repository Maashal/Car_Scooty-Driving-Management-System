<?php
include "connection.php";

if (isset($_GET['searchtrd'])) {
    $searchtext = $_GET['searchtxt'];
    $optiondropdown = $_GET['optiondrp'];

    //getting filter info from option

    if (isset($_SESSION['username'])) {
        $clearfilterbutton = "<small><a href='stdsearchtrainers.php?filterscl=akldfldskf123adf' style='float:right; margin-right:25px;' style='float:right; margin-right:25px;'><button class='btn btn-secondary'>Clear Filters</button></a></small>";
    } else {
        $clearfilterbutton = "<small><a href='searchtrainer.php?filterscl=akldfldskf123adf' style='float:right; margin-right:25px;' style='float:right; margin-right:25px;'><button class='btn btn-secondary'>Clear Filters</button></a></small>";

    }

    if ($optiondropdown == 'By Name') {
        $query = "SELECT  *  FROM trainertable where t_name LIKE '%$searchtext%' ";

        $mainheader = "<h3  style='padding:8px; margin-left:25px;'>Trainer Search Result for  <span style='color:darkblue;'><u>  " . $optiondropdown . "(" . $searchtext . ")</u></span> ".$clearfilterbutton."</h3>"; //%is used to search specific word or charact in any location in current row  like %abc% will search abc in any psition
    }
    if ($optiondropdown == 'By ID') {
        $query = "SELECT  *  FROM trainertable where tid LIKE '%$searchtext%' ";

        $mainheader = "<h3  style='padding:8px; margin-left:25px;'>Trainer Search Result for  <span style='color:darkblue;'><u>  " . $optiondropdown . "(" . $searchtext . ")</u></span>
        ".$clearfilterbutton."</h3>"; //%is used to search specific word or charact in any location in current row  like %abc% will search abc in any psition
    } else  if ($optiondropdown == 'By City') {
        $query = "SELECT  *  FROM trainertable where t_city LIKE '%$searchtext%' ";

        $mainheader = "<h3  style='padding:8px; margin-left:25px;'>Trainer Search Result for   <span style='color:darkblue;'><u>  " . $optiondropdown . "(" . $searchtext . ")</u></span>".$clearfilterbutton."</h3>";
    } else  if ($optiondropdown == 'By Vehicle') {
        $query = "SELECT  *  FROM trainertable where vehicle_detail = '$searchtext'  ";

        $mainheader = "<h3  style='padding:8px; margin-left:25px;'>Trainer Search Result for   <span style='color:darkblue;'><u>  " . $optiondropdown . "(" . $searchtext . ")</u>".$clearfilterbutton."</h3>";
    } else  if ($optiondropdown == 'By Gender') {
        $query = "SELECT  *  FROM trainertable where t_gender = '$searchtext'   ";

        $mainheader = "<h3  style='padding:8px; margin-left:25px;'>Trainer Search Result for  <span style='color:darkblue;'><u> " . $optiondropdown . "(" . $searchtext . ")</u>".$clearfilterbutton."</h3>";
    }
}

//showing all data based of click on show all venue buton
else if (isset($_GET['filterscl'])) {
    $query = "SELECT  *  FROM trainertable ";

    $mainheader = "<h3  style='padding:8px; margin-left:25px;'>All Trainers Profiles</h3>";
} else {
    $query = "SELECT  *  FROM trainertable ";

    $mainheader = "<h3  style='padding:8px; margin-left:25px;'>All Trainers Profiles</h3>";
}
$result = mysqli_query($conn, $query) or die("Unable to Fetch" . mysqli_error($conn));
if ($result == true) {

    echo  $mainheader . "<hr><br>";


    while ($row = mysqli_fetch_assoc($result)) {

        $trainerid = $row["tid"];
        $trainername = $row["t_name"];
        $trainergender = $row["t_gender"];
        $trainerexprience = $row["experience"];
        $trainercity = $row["t_city"];
        $sdetail = $row["vehicle_detail"];


        echo '  
        <div  style="width:80%; margin:auto; box-shadow: 0px 0px 12px 0px grey; padding:25px;">  
        <table class="table-borderless">
        <tr>
        <td style="width:10%">';
        if ($trainergender == "Male") {
            echo '      
        <img  src="../images/male.png" style="width:150px; height: 160px;" class="img-thumbnail" >';
        } else {
            echo ' 
        <img class="d" src="../images/female.png" style="width:150px; height: 160px;" class="img-thumbnail" >';
        };

        echo '</td>

      <td style="width:70%" valign="top">
       
        <h3 style="color:#0275d8"><b>' . $trainername . '</b> &emsp; &emsp; <small> (<b>Location</b> &emsp;' . $trainercity . ' )</small></h3><hr>
        
        <span> I can teach you ' . $sdetail . ' </span>
        </td></tr>
        <tr>
        <td colspan="2" align="right"> ';

        // now checking if user logged in or not

        if (isset($_SESSION['username'])) {
            echo '<a href="viewtrainerdetail.php?trainerregid=' . $trainerid . '" ><button class="btn btn-secondary">View Trainer Profile</button></a>
                  <a href="booktrainer.php?trainerregid=' . $trainerid . '" ><button class="btn btn-info">Book Trainer</button></a>
            </td>
            </tr>
            </table>
            </div><br>';
        } else {
            echo ' <a href="viewtrainerdetail.php?trainerregid=' . $trainerid . '" ><button class="btn btn-secondary">View Trainer Profile</button></a>
            <button class="btn btn-info" disabled>Login First to Book This Trainer</button>
            </td>
            </tr>
            </table>
            </div><br>';
        }
    }
    if (mysqli_num_rows($result) == false) {
        echo "<br> <span class='alert alert-danger' style='font-size:15px;'>There nor record available in the database.</span><br>";
    }
}
