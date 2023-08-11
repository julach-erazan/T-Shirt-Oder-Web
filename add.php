<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "order_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Green table
$green_registationNumber = $_POST['registationNumber'];
$green_name = $_POST['customer_name'];
$green_xs = $_POST['green_xs'];
$green_s = $_POST['green_s'];
$green_m = $_POST['green_m'];
$green_l = $_POST['green_l'];
$green_xl = $_POST['green_xl'];
$green_2xl = $_POST['green_2xl'];
$green_3xl = $_POST['green_3xl'];


    $sql = "INSERT INTO greentable (registationNumber,name,xs, s, m, l, xl, 2xl, 3xl) VALUES 
		('$green_registationNumber', '$green_name', '$green_xs', '$green_s', '$green_m', '$green_l',
     '$green_xl', '$green_2xl', '$green_3xl')";

//Blue table
$blue_registationNumber = $_POST['registationNumber'];
$blue_name = $_POST['customer_name'];
$blue_xs = $_POST['blue_xs'];
$blue_s = $_POST['blue_s'];
$blue_m = $_POST['blue_m'];
$blue_l = $_POST['blue_l'];
$blue_xl = $_POST['blue_xl'];
$blue_2xl = $_POST['blue_2xl'];
$blue_3xl = $_POST['blue_3xl'];


    $sql2 = "INSERT INTO bluetable (_registationNumber,_name,_xs, _s, _m, _l, _xl, _2xl, _3xl) VALUES 
		('$blue_registationNumber','$blue_name','$blue_xs', '$blue_s', '$blue_m', '$blue_l',
     '$blue_xl', '$blue_2xl', '$blue_3xl')";
//Check table input null
//Green table all values null
$green_nullInp = ($green_xs== 0 && $green_s== 0 && $green_m== 0 && $green_l == 0 && $green_xl == 0 && 
                  $green_2xl == 0 && $green_3xl == 0);
  
$blue_nullInp = ($blue_xs== 0 && $blue_s== 0 && $blue_m== 0 && $blue_l == 0 && $blue_xl == 0 &&
                $blue_2xl == 0 && $blue_3xl == 0);
  
  if($green_nullInp && $blue_nullInp){
      header("Location: index.php");
      exit();
  }else if($blue_nullInp){
      $conn->query($sql);
      header("Location: index.php");
      exit();
  }else if($green_nullInp){      
      $conn->query($sql2);
      header("Location: index.php");
      exit();
  }else if($conn->query($sql) === FALSE || $conn->query($sql2) === FALSE){
      echo "Error: " . $sql . "<br>" . $conn->error;
      echo "Error: " . $sql2 . "<br>" . $conn->error;
  }else {
      $conn->query($sql);
      $conn->query($sql2);
      header("Location: index.php");
      exit();
  }

$conn->close();
?>
