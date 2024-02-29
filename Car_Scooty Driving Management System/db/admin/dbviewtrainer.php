<?php
include 'connection.php';
//searching only specific student with id
if (isset($_POST['btnsearch'])) {

    $searchinpt = $_POST['searchtrainer'];
    $searchby = $_POST["searchinp"];

    if ($searchby == "Name") {

        $query = "SELECT * from  trainertable WHERE t_name like '%$searchinpt%' ";
    } else if ($searchby == "ID") {

        $query = "SELECT * from  trainertable WHERE tid  = '$searchinpt' ";
    }
}

//showing all trainers data
else if (isset($_POST['viewall'])) {

    $query = "SELECT * from  trainertable ";
}


//showing all trainers list without button

else {
    $query = "SELECT * from  trainertable";
}

$result = mysqli_query($conn, $query);
if (!$result) {
    echo mysqli_error($conn);
}
if ($result->num_rows > 0) {
    //fetching data

    echo "
    <tr style='background:darkgreen; color:white;'>

            <td>ID</td>
            <td>Name</td>
            <td>Service Details</td>
            <td>Experience</td>
            <td colspan='2'>Actions</td>
            </tr>";

    while ($row =  mysqli_fetch_assoc($result)) {
        $trainerid = $row['tid'];
        $name = $row['t_name'];
        $gender = $row['t_gender'];
        $contact = $row['t_contact'];
        $city = $row['t_city'];
        $address = $row['t_address'];
        $exprnce = $row['experience'];
        $srdetail = $row['servicedetail'];
        $vdetail = $row['vehicle_detail'];
        $email = $row['t_email'];

        echo "<tr>
            <td>$trainerid</td>
            <td>$name</td>
            <td>$vdetail</td>
            <td>$exprnce</td>
            <td align='center'><a href='viewtrainerdetail.php?trainerregid=" . $trainerid . "' target='_blank'>View Detail</a></td>
            <td align='center'><a href='updatetrainer.php?update=" . $trainerid . "'>Update</a> &emsp; &emsp;
            <a href='../db/admin/dbdeletetrainer.php?delete=" . $trainerid . "'>Delete</a></td></tr>";
    }
} else {
    echo "<span class='alert-info alert' style='width:80%; margin:auto; padding:5px;'>There is no Student Record exist with in database";
}
