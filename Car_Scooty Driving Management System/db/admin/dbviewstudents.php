<?php
include 'connection.php';
//searching only specific student with id
if (isset($_POST['btnsearch'])) {

    $searchinpt = $_POST['searchtrainer'];
    $searchby = $_POST["searchinp"];

    if ($searchby == "Name") {

        $query = "SELECT * from  studenttable WHERE s_name like '%$searchinpt%' ";
    } else if ($searchby == "ID") {

        $query = "SELECT * from  studenttable WHERE sid  = '$searchinpt' ";
    }
}

//showing all trainers data
else if (isset($_POST['viewall'])) {

    $query = "SELECT * from  studenttable ";
}


//showing all trainers list without button

else {
    $query = "SELECT * from  studenttable";
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
            <td>City</td>
            <td>User ID</td>
            <td colspan='2'>Actions</td>
            </tr>";

    while ($row =  mysqli_fetch_assoc($result)) {;
        $id = $row["sid"];
        $name = $row["s_name"];
        $contact = $row["s_contact"];
        $gender = $row["s_gender"];
        $city = $row["s_city"];

        echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$contact</td>
            <td>$city</td>
            <td align='center'><a href='viewstudentdetail.php?studentprofile=" . $id . "' target='_blank'>View Detail</a></td>
            <td align='center'><a href='updatestudent.php?update=" . $id . "'>Update</a> &emsp; &emsp;
            <a href='../db/admin/dbdeletestudent.php?delete=" . $id . "'>Delete</a></td></tr>";
      }
} else {
    echo "<span class='alert-info alert' style='width:80%; margin:auto; padding:5px;'>There is no Student Record exist with in database";
}
