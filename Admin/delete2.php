<?php
// delete.php

// Retrieve the user ID from the form
$blue_id = $_POST['blue_id'];

// Connect to your database (modify the parameters as needed)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "order_db";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Construct the SQL query to delete the data
$sql = "DELETE FROM bluetable WHERE id = $blue_id";

// Execute the query
if (mysqli_query($conn, $sql)) {
    header("Location: admin_index.php");
} else {
  echo "Error deleting data: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>