<?php

$serverid = 'localhost';
$userid = 'root';
$password = '';
$db = 'car_scooty_driving_management_system';

$conn = mysqli_connect($serverid, $userid, $password, $db);

if (!$conn) {
    echo "unable to conect to database server because of  " . mysqli_error($conn);
} else {
    //TODO NOTHING HERE
}


?> 
