<?php

$host = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbName = 'order_db'; 

$connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

if (!$connection) {
  die('Database connection failed: ' . mysqli_connect_error());
}

$user_id = $_POST['user_id'];
$registationNumber = $_POST['registationNumber'];
$name = $_POST['name'];
$xs = $_POST['xs'];
$s = $_POST['s'];
$m = $_POST['m'];
$l = $_POST['l'];
$xl = $_POST['xl'];
$green_2xl = $_POST['2xl'];
$green_3xl = $_POST['3xl'];

$blue_user_id = $_POST['blue_id'];
$blue_registrationNumber = $_POST['blue_registationNumber'];
$blue_name = $_POST['blue_name'];
$blue_xs = $_POST['blue_xs'];
$blue_s = $_POST['blue_s'];
$blue_m = $_POST['blue_m'];
$blue_l = $_POST['blue_l'];
$blue_xl = $_POST['blue_xl'];
$blue_2xl = $_POST['blue_2xl'];
$blue_3xl = $_POST['blue_3xl'];

$query = "UPDATE greentable SET 
          registationNumber = '$registationNumber',
          name = '$name',
          xs = '$xs',
          s = '$s',
          m = '$m',
          l = '$l',
          xl = '$xl',
          2xl = '$green_2xl',
          3xl = '$green_3xl'
          WHERE id = '$user_id'";
		  
$query2 = "UPDATE bluetable SET 
          _registationNumber = '$blue_registrationNumber',
          _name = '$blue_name',
          _xs = '$blue_xs',
          _s = '$blue_s',
          _m = '$blue_m',
          _l = '$blue_l',
          _xl = '$blue_xl',
          _2xl = '$blue_2xl',
          _3xl = '$blue_3xl'
          WHERE id = '$blue_user_id'";


if (mysqli_query($connection, $query)) {
    header("Location: admin_index.php");
} else {
  echo 'Error updating data: ' . mysqli_error($connection);
}

mysqli_close($connection);
?>