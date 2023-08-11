<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="admin_indexstyleSheet.css">
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

  $query = "SELECT * FROM greentable"; 
  $result = mysqli_query($connection, $query);
  
  $query2 = "SELECT * FROM bluetable"; 
  $result2 = mysqli_query($connection, $query2);
  
  //count table details
	$queryCountGreen = "SELECT COUNT(*) AS totalGreen,
    SUM(xs) AS totalGreen_xs,
    SUM(s) AS totalGreen_s,
    SUM(m) AS totalGreen_m,
    SUM(l) AS totalGreen_l,
    SUM(xl) AS totalGreen_xl,
    SUM(`2xl`) AS totalGreen_2xl,
    SUM(`3xl`) AS totalGreen_3xl
    FROM greentable";

    $queryCountBlue = "SELECT COUNT(*) AS totalBlue,
        SUM(_xs) AS totalBlue_xs,
        SUM(_s) AS totalBlue_s,
        SUM(_m) AS totalBlue_m,
        SUM(_l) AS totalBlue_l,
        SUM(_xl) AS totalBlue_xl,
        SUM(`_2xl`) AS totalBlue_2xl,
        SUM(`_3xl`) AS totalBlue_3xl
    FROM bluetable";

    $resultCountGreen = mysqli_query($connection, $queryCountGreen);
    $resultCountBlue = mysqli_query($connection, $queryCountBlue);

    $countGreen = mysqli_fetch_assoc($resultCountGreen);
    $countBlue = mysqli_fetch_assoc($resultCountBlue);
  //end
  
  ?>
  
  <nav>
			<div class="topnav" id="myTopnav">
				<a href="http://localhost/order/index.php">Home</a>
				<a href="http://localhost/order/Admin/admin_index.php" class="active">Admin</a>
        <a href="http://localhost/order/oderPage.php">Order</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
				</a>
			</div>
	</nav>
  <div class="container">
	
	<table class="count_table">
            <tr style="background-color:black;"><th colspan="8">Total Count</th></tr>
            <tr>
				<th style="background-color: #03ac13;" rowspan="2">Green T-shirt</th>
				<th>XS</th>
				<th>S</th>
				<th>M</th>
				<th>L</th>
				<th>XL</th>
				<th>2XL</th>
				<th>3XL</th>
			</tr>
            <tr>
                <td><?php echo $countGreen['totalGreen_xs']; ?></td>
                <td><?php echo $countGreen['totalGreen_s']; ?></td>
                <td><?php echo $countGreen['totalGreen_m']; ?></td>
                <td><?php echo $countGreen['totalGreen_l']; ?></td>
                <td><?php echo $countGreen['totalGreen_xl']; ?></td>
                <td><?php echo $countGreen['totalGreen_2xl']; ?></td>
                <td><?php echo $countGreen['totalGreen_3xl']; ?></td>
            </tr>
            <tr>
				<th style="background-color: #000080;" rowspan="2">Blue T-shirt</th>
				<th>XS</th>
				<th>S</th>
				<th>M</th>
				<th>L</th>
				<th>XL</th>
				<th>2XL</th>
				<th>3XL</th>
			</tr>
            <tr>
                <td><?php echo $countBlue['totalBlue_xs']; ?></td>
                <td><?php echo $countBlue['totalBlue_s']; ?></td>
                <td><?php echo $countBlue['totalBlue_m']; ?></td>
                <td><?php echo $countBlue['totalBlue_l']; ?></td>
                <td><?php echo $countBlue['totalBlue_xl']; ?></td>
                <td><?php echo $countBlue['totalBlue_2xl']; ?></td>
                <td><?php echo $countBlue['totalBlue_3xl']; ?></td>
            </tr>
        </table>
	
    <table class="view_table">
    <tr><th colspan="11" style="background-color:#03ac13;">Green</th><tr>
    <tr>
      <th>ID</th>
      <th>Registration Number</th>
      <th>Name</th>
      <th>XS</th>
      <th>S</th>
      <th>M</th>
      <th>L</th>
      <th>XL</th>
      <th>2XL</th>
      <th>3XL</th>
      <th>Actions</th>
    </tr>

      <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <tr id="row-<?php echo $row['id']; ?>">
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['registationNumber']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['xs']; ?></td>
          <td><?php echo $row['s']; ?></td>
          <td><?php echo $row['m']; ?></td>
          <td><?php echo $row['l']; ?></td>
          <td><?php echo $row['xl']; ?></td>
          <td><?php echo $row['2xl']; ?></td>
          <td><?php echo $row['3xl']; ?></td>
		  
          <td class="action_area_btn">

                  <form method="get" action="updateForm.php">
					  <input type="hidden" name="_user_id" value="<?php echo $row['id']; ?>">
					  <input type="hidden" name="_registationNumber" value="<?php echo $row['registationNumber']; ?>">
					  <input type="hidden" name="_name" value="<?php echo $row['name']; ?>">
					  <input type="hidden" name="_xs" value="<?php echo $row['xs']; ?>">
					  <input type="hidden" name="_s" value="<?php echo $row['s']; ?>">
					  <input type="hidden" name="_m" value="<?php echo $row['m']; ?>">
					  <input type="hidden" name="_l" value="<?php echo $row['l']; ?>">
					  <input type="hidden" name="_xl" value="<?php echo $row['xl']; ?>">
					  <input type="hidden" name="_2xl" value="<?php echo $row['2xl']; ?>">
					  <input type="hidden" name="_3xl" value="<?php echo $row['3xl']; ?>">

					  <input class="btn_update" type="submit" value="">
                  </form>

                  <form method="post" action="delete.php">
                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                    <button id="btn_delete" type="submit"></button>
                  </form>
                          
                  </td>
              </tr>
      <?php endwhile; ?>
    </table>

    <table class="view_table">
    <tr><th colspan="11" style="background-color:#000080;">Blue</th><tr>
    <tr>
      <th>ID</th>
      <th>Registration Number</th>
      <th>Name</th>
      <th>XS</th>
      <th>S</th>
      <th>M</th>
      <th>L</th>
      <th>XL</th>
      <th>2XL</th>
      <th>3XL</th>
      <th>Actions</th>
    </tr>

      <?php while ($row = mysqli_fetch_assoc($result2)): ?>
          <tr id="row-<?php echo $row['id']; ?>">
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['_registationNumber']; ?></td>
          <td><?php echo $row['_name']; ?></td>
          <td><?php echo $row['_xs']; ?></td>
          <td><?php echo $row['_s']; ?></td>
          <td><?php echo $row['_m']; ?></td>
          <td><?php echo $row['_l']; ?></td>
          <td><?php echo $row['_xl']; ?></td>
          <td><?php echo $row['_2xl']; ?></td>
          <td><?php echo $row['_3xl']; ?></td>
          <td class="action_area_btn">

                  <form method="get" action="updateForm2.php">
					  
						<input type="hidden" name="blue_id" value="<?php echo $row['id']; ?>">
						<input type="hidden" name="blue_registationNumber" value="<?php echo $row['_registationNumber']; ?>">
						<input type="hidden" name="blue_name" value="<?php echo $row['_name']; ?>">
						<input type="hidden" name="blue_xs" value="<?php echo $row['_xs']; ?>">
						<input type="hidden" name="blue_s" value="<?php echo $row['_s']; ?>">
						<input type="hidden" name="blue_m" value="<?php echo $row['_m']; ?>">
						<input type="hidden" name="blue_l" value="<?php echo $row['_l']; ?>">
						<input type="hidden" name="blue_xl" value="<?php echo $row['_xl']; ?>">
						<input type="hidden" name="blue_2xl" value="<?php echo $row['_2xl']; ?>">
						<input type="hidden" name="blue_3xl" value="<?php echo $row['_3xl']; ?>">
						<input class="btn_update" type="submit" value="">
					</form>

                  <form method="post" action="delete2.php">
                    <input type="hidden" name="blue_id" value="<?php echo $row['id']; ?>">
                    <button id="btn_delete" type="submit"></button>
                  </form>      
             </td>
		  </tr>
      <?php endwhile; ?>
    </table>
  </div>

  <script>
      function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}

            function dropdown_greenTable() {
          var checkBox = document.getElementById("greenCheckbox");
          var _table = document.getElementById("greenTable_div");
          if (checkBox.checked == true){
            _table.style.display = "flex";
          } else {
            _table.style.display = "none";
          }
      }

      function dropdown_blueTable() {
          var checkBox = document.getElementById("blueCheckbox");
          var _table = document.getElementById("blueTable_div");
          if (checkBox.checked == true){
            _table.style.display = "flex";
          } else {
            _table.style.display = "none";
          }
      }
    </script>
</body>
</html>
