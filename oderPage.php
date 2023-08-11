<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="oderPage_styleSheet.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Order</title>
</head>
<body>

   <div class="container">
        <div class="img_div">
            <img class="girl_img" src="computerGirl.jpg">
        </div>
        <div class="main">
            <table>
                <th colspan="2">
                    T-Shirt Order Form
                </th>
                <tr>
                    <td style="padding-left: 15px; padding-right: 15px;"><img class="tShirt_img" src="t-shirt.png"></td>
                    <td style="padding: 20px 15px 20px 0; ">
                        <form class="formClass" action="add.php" method="POST">
                            <label>Registation Number</label>
                            <input type="text" placeholder="EUSL/TC/IS/2018/COM/66" name="registationNumber" required>

                            <label style="margin-top: 10px;">Full Name</label>
                            <input type="text" placeholder="S.M. Kasun Sampath" name="customer_name" required>
                            
                            <label style="margin-top: 10px;">T-Shirt Color</label>
                            <div style="display: flex;">
                                <label style="margin-top: 10px;">Green</label>
                                <input style="width: 15px; height:15px; margin-top: 10px;" type="checkbox" id="greenCheckbox" onclick="dropdown_greenTable()">
                            </div>
                                <div id="greenTable_div">
                                    <table id="greenTable">
                                        <tr>
                                            <th><span>XS</span></th>
                                            <th><span>S</span></th>
                                            <th><span>M</span></th>
                                            <th><span>L</span></th>
                                            <th><span>XL</span></th>
                                            <th><span>2XL</span></th>
                                            <th><span>3XL</span></th>
                                        </tr>
                                        <tr>
                                            <td><input class="qty" value=0 min="0" type="number" name="green_xs"></td>
                                            <td style="text-align: center;"><input class="qty" value=0 min="0" type="number" name="green_s"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="green_m"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="green_l"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="green_xl"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="green_2xl"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="green_3xl"></td>
                                        </tr>
                                    </table>
                                </div>

                            <div style="display: flex; align-items: center;">
                                <label style="margin-top: 10px;">Blue</label>
                                <input style="width: 15px; height:15px; margin-top: 10px;" type="checkbox" id="blueCheckbox" onclick="dropdown_blueTable()">
                            </div>
                                <div id="blueTable_div">
                                    <table id="blueTable">
                                        <tr>
                                            <th><span>XS</span></th>
                                            <th><span>S</span></th>
                                            <th><span>M</span></th>
                                            <th><span>L</span></th>
                                            <th><span>XL</span></th>
                                            <th><span>2XL</span></th>
                                            <th><span>3XL</span></th>
                                        </tr>
                                        <tr>
                                        <td><input class="qty" value=0 min="0" type="number" name="blue_xs"></td>
                                            <td style="text-align: center;"><input class="qty" value=0 min="0" type="number" name="blue_s"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="blue_m"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="blue_l"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="blue_xl"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="blue_2xl"></td>
                                            <td><input class="qty" value=0 min="0" type="number" name="blue_3xl"></td>
                                        </tr>
                                    </table>
                                </div>
                            <div style="width: 100%; display:flex; justify-content:center; margin-top:20px">
                                <button type="submit">Oder Now</button>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
   </div>

   <script rel="JavaScript" src="oderPage_scriptSheet.js"></script>
</body>
</html>