<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
	<link rel="stylesheet" type="text/css" href="updateForm_styleSheet.css">
</head>
<body>
    <?php
    $host = 'localhost'; 
    $dbUsername = 'root'; 
    $dbPassword = ''; 
    $dbName = 'order_db'; 

    $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

    if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
    }
	
	$blue_id = $_GET['blue_id'];
	$blue_registrationNumber = $_GET['blue_registationNumber'];
	$blue_name = $_GET['blue_name'];
	$blue_xs = $_GET['blue_xs'];
	$blue_s = $_GET['blue_s'];
	$blue_m = $_GET['blue_m'];
	$blue_l = $_GET['blue_l'];
	$blue_xl = $_GET['blue_xl'];
	$blue_2xl = $_GET['blue_2xl'];
	$blue_3xl = $_GET['blue_3xl'];


    mysqli_close($connection);
    ?>

    <div class="container">
        <h2>Update Details</h2>
        <form action="update.php" method="POST">
        <div id="blueTable_div">
            <table id="blueTable">
				<tr><th colspan="9" style="background-color:#000080;">Blue</th></tr>
                <tr>
                    <th><label>Registation Number</label></th>
                    <th><label>Full Name</label></th>
                    <th><label>XS</label></th>
                    <th><label>S</label></th>
                    <th><label>M</label></th>
                    <th><label>L</label></th>
                    <th><label>XL</label></th>
                    <th><label>2XL</label></th>
                    <th><label>3XL</label></th>
                </tr>

                <tr>
					<input type="hidden" name="blue_id" value="<?php echo $blue_id; ?>">
					<td><input type="text" name="blue_registationNumber" placeholder="Registration Number" value="<?php echo $blue_registrationNumber; ?>" required/></td>
					<td><input type="text" name="blue_name" value="<?php echo $blue_name; ?>" placeholder="Full Name" required></td>
					<td><input type="number" name="blue_xs" value="<?php echo $blue_xs; ?>" placeholder="XS" required min="0"></td>
					<td><input type="number" name="blue_s" value="<?php echo $blue_s; ?>" placeholder="S" required min="0"></td>
					<td><input type="number" name="blue_m" value="<?php echo $blue_m; ?>" placeholder="M" required min="0"></td>
					<td><input type="number" name="blue_l" value="<?php echo $blue_l; ?>" placeholder="L" required min="0"></td>
					<td><input type="number" name="blue_xl" value="<?php echo $blue_xl; ?>" placeholder="XL" required min="0"></td>
					<td><input type="number" name="blue_2xl" value="<?php echo $blue_2xl; ?>" placeholder="2XL" required min="0"></td>
					<td><input type="number" name="blue_3xl" value="<?php echo $blue_3xl; ?>" placeholder="3XL" required min="0"></td>
				</tr>

            </table>
        </div>

                    <table class="add_table">
                        <tr class="btn">
                            <td class="td_update" colspan="3">
                                <button id="btn_update" type="submit"></button>
                                <button id="btn_cancel" type="button" onclick="window.location.href='admin_index.php'"></button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

    </body>
</html>