<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DS - Order</title>
    <style>
        body
        {
            background-color: whitesmoke;
        }
        .navitop
        {
            width:100%;
            position: fixed;
            z-index:50;
            overflow: hidden;
            background-color: white;
            top:0;
            left:0;
            padding:10px;
            text-align:right;
        }
        .navitop a
        {
            text-decoration: none;
            margin:10px;
            color:black;
            font-size:18px;
            font-family: Calibri;
        }
        .profpic
        {
            width:2%;
            float:right;
            border-radius: 100%;
            margin-right:30px;
            cursor: pointer;
            margin-left:20px;
        }
        h1,label
        {
            font-family: Calibri;
            color:silver;
        }
        .formi input[type=submit]
        {
            width:25%;
            font-family: Calibri;
            background-color: transparent;
            color:white;
            font-size:18px;
            border:1px solid white;
            padding:10px;
        }
        .formi input[type=submit]:hover
        {
            background-color: white;
            color:black;
            border:1px solid white;
        }
        .formi input[type=text],.formi input[type=password],.formi input[type=email]
        {
            width:25%;
            padding:10px;
            background-color: transparent;
            color:silver;
            border:none;
            outline:none;
            border-left:4px solid silver;
            font-size:20px;
            font-family: Calibri;
            margin:10px;
        }
        .sidenav
        {
            width: 0;
            position: absolute;
            top:0;
            left:0;
            z-index: 51;
            overflow-x: hidden;
            background-color: #111;
            transition: 0.5s;
            padding-top: 60px;
            text-align: center;
        }
        .sideNavi
        {
            width:15%;
            background-color: #001f3f;
            height:100%;
            position: fixed;
            top:0;
            left:0;
            z-index:52;
            text-align: center;
        }
        .social
        {
            color:whitesmoke;
            text-decoration: none;
            font-family: Calibri;
            padding:10px;
        }
        h3
        {
            color:whitesmoke;
            font-family: Calibri;
        }
        .profi
        {
            width: 50%;
            border-radius: 50%;
            cursor: pointer;
        }
        button
        {
            background-color: transparent;
            width:100%;
            outline:none;
            border: 1px solid transparent;
            color:whitesmoke;
            font-size:20px;
            font-family: Calibri;
            cursor: pointer;
            padding:15px;
            transition-duration: 0.5s;
        }
        button:hover,button:focus
        {
            background-color: whitesmoke;
            border:1px solid whitesmoke;
            color:#001f3f;
        }
        .btndashboard
        {
            background-image: url("dashi.png");
            background-repeat: no-repeat;
            background-size: 30%;
            background-position-x: -5px;
            background-position-y: -5px;
        }
        .btndashboard:hover,.btndashboard:focus
        {
            background-image: url("dashboard.png");
            background-repeat: no-repeat;
            background-size: 30%;
            background-position-x: -5px;
            background-position-y: -5px;
        }
        .btnstock
        {
            background-image: url("stocki.png");
            background-repeat: no-repeat;
            background-size: 30%;
            background-position-x: -5px;
            background-position-y: -5px;
        }
        .btnstock:hover,.btnstock:focus
        {
            background-image: url("stock.png");
            background-repeat: no-repeat;
            background-size: 30%;
            background-position-x: -5px;
            background-position-y: -5px;
        }
        .btnorder
        {
            background-image: url("orderi.png");
            background-repeat: no-repeat;
            background-size: 30%;
            background-position-x: -5px;
            background-position-y: -5px;
        }
        .btnorder:hover,.btnorder:focus
        {
            background-image: url("order.png");
            background-repeat: no-repeat;
            background-size: 30%;
            background-position-x: -5px;
            background-position-y: -5px;
        }
        .btnsetting
        {
            background-image: url("setti.png");
            background-repeat: no-repeat;
            background-size: 30%;
            background-position-x: -5px;
            background-position-y: -5px;
        }
        .btnsetting:hover,.btnsetting:focus
        {
            background-image: url("settings.png");
            background-repeat: no-repeat;
            background-size: 30%;
            background-position-x: -5px;
            background-position-y: -5px;
        }
        .main
        {
            position: absolute;
            float:right;
            top:10%;
            right:0;
            width:84.5%;
            background-color: whitesmoke;
            padding-left:10px;
        }
        h4
        {
            color:black;
            font-family: Calibri;
        }
        h5
        {
            font-family: Calibri;
            font-size:18px;
            color:white;
            margin:10px;
        }
        .tableorder th,.tablestock th
        {
            font-family: Calibri;
            font-size: 18px;
            background-color: #001f3f;
            color:whitesmoke;
            padding:10px;
        }
        .myform input[type=text],.myform option,.myform select,.myform input[type=date]
        {
            width:50%;
            background-color: transparent;
            border:1px solid #001f3f;
            outline:none;
            font-size:15px;
            font-family: Calibri;
            padding:10px;
            margin:10px;
            font-family: Calibri;
            border-radius: 10px;
        }
        .myform select,.myform option
        {
            width:54%;
        }
        .myform input[type=submit]
        {
            width:50%;
            background-color: transparent;
            border:1px solid #001f3f;
            color:#001f3f;
            font-size:15px;
            font-family: Calibri;
            padding:10px;
        }
        .myform input[type=submit]:hover
        {
            background-color: #001f3f;
            border:1px solid #001f3f;
            color:whitesmoke;
        }
        .myform td
        {
            font-family: Calibri;
        }
        .detailsStock th,.detailsStock td
        {
            font-family:Calibri;
            text-align: center;
        }
        .searchbar
        {
            float:left;
            margin-left:10px;
            width:50%;
        }
        .searchbar input[type=text]
        {
            border:none;
            float:left;
            padding-left:10px;
            outline:none;
            border-left:1px solid black;
            font-family: Calibri;
            font-size:15px;
            width:50%;
        }
        .searchbar input[type=submit]
        {
            background-color: #001f3f;
            color:whitesmoke;
            font-family: Calibri;
            border:1px solid #001f3f;
            outline:none;
        }
    </style>
</head>
<body>
<div class="navitop">
    <label style="float:left;margin-left:15%;font-size:18px">Orders Placed by Customers</label>
    <form class="searchbar" method="POST" action="DS-Order.php">
        <input type="text" placeholder="Search" name="searchproduct"><input type="submit" name="btnsearch" value="Search"><input type="submit" name="btnreload" value="Reload">
    </form>
    <a href="sessionDestroy.php">Logout</a>
    <a href="#" onclick="openNav()"><?php echo $_SESSION["userlogin"];?></a>
    <img src="anime1.jpg" class="profpic" onclick="openNav()"/>
</div>
<div class="sideNavi">
    <h3>DVD Stores Admin Panel</h3>
    <img src="anime1.jpg" class="profi" onclick="openNav()"/>
    <h3><?php echo $_SESSION["userlogin"];?></h3>
    <br/>
    <a href="DS-Dashboard.php"><button class="btndashboard">Dashboard</button></a><br/>
    <a href="DS-Stock.php"><button class="btnstock">Stock</button></a><br/>
    <a href="DS-Order.php"><button class="btnorder" style="background-color: whitesmoke;color:#001f3f;background-image: url(order.png);background-repeat: no-repeat;background-size: 30%;background-position-x: -5px;background-position-y: -5px;">Order</button></a><br/>
    <a href="DS-Setting.php"><button class="btnsetting">Settings</button></a><br/><br/>
    <a href="#" class="social">Facebook</a>
    <a href="#" class="social">Instagram</a>
    <a href="#" class="social">Twitter</a>
</div>
<div class="main">
    <h4>Hey <?php echo $_SESSION["userlogin"];?>!, you can now Add/Update/Delete Order details which are placed by Customers.</h4>
    <hr/>
    <form method="POST" action="DS-Order.php" class="myform">
        <table style="float:left;width:50%">
            <tr>
                <td>Order ID: </td>
                <td><input type="text" placeholder="Enter Order ID" name="orderid"></td>
            </tr>
            <tr>
                <td>Customer: </td>
                <td>
                    <select name="customer">
                        <option>--Please Select--</option>
                        <?php
                        $selectUser = "SELECT * FROM user_registration WHERE accounttype='Customer'";
                        $execute = $con->query($selectUser);
                        while($rowUser1 = mysqli_fetch_assoc($execute))
                        {
                            ?>
                            <option><?php echo $rowUser1["username"];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>DVD ID: </td>
                <td>
                    <select name="dvdid">
                        <option>--Please Select--</option>
                        <?php
                        $selectdvd = "SELECT * FROM dvd";
                        $execute1 = $con->query($selectdvd);
                        while($rowdvd1 = mysqli_fetch_assoc($execute1))
                        {
                            ?>
                            <option><?php echo $rowdvd1["dvdid"];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date: </td>
                <td>
                    <input type="date" name="orderdate">
                </td>
            </tr>
        </table>
        <table style="float:right;width:50%">
            <tr>
                <td>Quantity: </td>
                <td><input type="text" placeholder="Enter Quantity" name="quantity"></td>
            </tr>
            <tr>
                <td>Price: </td>
                <td><input type="text" placeholder="Enter Price" name="price"></td>
            </tr>
            <tr>
                <td>Amount: </td>
                <td><input type="text" placeholder="Enter Amount" name="amount"></td>
            </tr>
        </table>
        <br/><br/>
        <table style="width:100%;text-align:center">
            <tr>
                <td><input type="submit" name="btnadd" value="Add"></td>
                <td><input type="submit" name="btnupdate" value="Update"></td>
                <td><input type="submit" name="btndelete" value="Delete"></td>
            </tr>
        </table>
    </form>
    <br/>
    <hr/>
    <br/>
    <table class="detailsStock" style="width:100%;">
        <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>DVD ID</th>
            <th>DVD Name</th>
            <th>Date</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php

            if(isset($_POST["searchproduct"]))
            {
                $searchproduct = $_POST["searchproduct"];
            }

            if(isset($_POST["btnsearch"]))
            {
                $selectOrder = "SELECT * FROM order_detail o,dvd d WHERE o.orderid='$searchproduct' AND d.dvdid=o.orderid";
                $selected = $con->query($selectOrder);
                while ($rowOrder = mysqli_fetch_assoc($selected)) {
                    ?>
                    <tr>
                        <td><?php echo $rowOrder["orderid"]; ?></td>
                        <td><?php echo $rowOrder["username"]; ?></td>
                        <td><?php echo $rowOrder["dvdid"]; ?></td>
                        <td><?php echo $rowOrder["dvdname"]; ?></td>
                        <td><?php echo $rowOrder["date"]; ?></td>
                        <td><?php echo $rowOrder["quantity"]; ?></td>
                        <td><?php echo $rowOrder["price"]; ?></td>
                    </tr>
                    <?php
                }
            }
            else if(isset($_POST["btnreload"]))
            {
                $selectValues = "SELECT * FROM order_detail o,dvd d WHERE o.dvdid=d.dvdid";
                $selected = $con->query($selectValues);
                while ($row = mysqli_fetch_assoc($selected)) {
                    ?>
                    <tr>
                        <td><?php echo $row["orderid"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["dvdid"]; ?></td>
                        <td><?php echo $row["dvdname"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["quantity"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                    </tr>
                    <?php
                }
            }
            else
            {
                $selectOrder = "SELECT * FROM order_detail o,dvd d WHERE o.dvdid=d.dvdid";
                $selected = $con->query($selectOrder);
                while ($rowOrder = mysqli_fetch_assoc($selected)) {
                    ?>
                    <tr>
                        <td><?php echo $rowOrder["orderid"]; ?></td>
                        <td><?php echo $rowOrder["username"]; ?></td>
                        <td><?php echo $rowOrder["dvdid"]; ?></td>
                        <td><?php echo $rowOrder["dvdname"]; ?></td>
                        <td><?php echo $rowOrder["date"]; ?></td>
                        <td><?php echo $rowOrder["quantity"]; ?></td>
                        <td><?php echo $rowOrder["price"]; ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
    <?php
        if(isset($_POST["orderid"]) && isset($_POST["customer"]) && isset($_POST["dvdid"]) && isset($_POST["orderdate"]) && isset($_POST["quantity"]) && isset($_POST["price"]) && isset($_POST["amount"]))
        {
            $orderid = $_POST["orderid"];
            $customer = $_POST["customer"];
            $dvdid = $_POST["dvdid"];
            $orderdate = $_POST["orderdate"];
            $quan = $_POST["quantity"];
            $price = $_POST["price"];
            $amount = $_POST["amount"];
        }

        $type=$_SESSION["account"];

        if(isset($_POST["btnadd"]))
        {
            $insertQuery="INSERT INTO order_detail VALUES('$orderid','$customer','$dvdid','$orderdate','$quan','$price','$amount')";

            if($con->query($insertQuery))
            {
                echo '<script>';
                echo 'alert("Order details added successfully...")';
                echo '</script>';
            }
            else
            {
                echo '<script>';
                echo 'alert("Error occured while adding...")';
                echo '</script>';
            }
        }
        else if(isset($_POST["btnupdate"]))
        {
            if($type=="Administrator" || $type=="Standard")
            {

                $updateQuery = "UPDATE order_detail SET username='$customer',dvdid='$dvdid',date='$orderdate',quantity='$quan',price='$price',amount='$amount' WHERE orderid='$orderid'";

                if ($con->query($updateQuery))
                {
                    echo '<script>';
                    echo 'alert("Order details update successfully...")';
                    echo '</script>';
                }
                else
                {
                    echo '<script>';
                    echo 'alert("Error occured while updated...")';
                    echo '</script>';
                }
            }
            else
            {
                echo '<script>';
                echo 'alert("Access Denied...")';
                echo '</script>';
            }
        }
        else if(isset($_POST["btndelete"]))
        {
            if($type=="Administrator" || $type=="Standard")
            {

                $deleteQuery = "DELETE FROM order_detail WHERE orderid='$orderid'";

                if ($con->query($deleteQuery))
                {
                    echo '<script>';
                    echo 'alert("Order Detail Deleted Successfully...")';
                    echo '</script>';
                }
                else
                {
                    echo '<script>';
                    echo 'alert("Error occured while deleting...")';
                    echo '</script>';
                }
            }
            else
            {
                echo '<script>';
                echo 'alert("Access Denied...")';
                echo '</script>';
            }
        }

    ?>
</div>
<?php
$username1 = $_SESSION["loginuser"];

$selectProfile = "SELECT * FROM user_registration WHERE username='$username1'";
$select = $con->query($selectProfile);
$row7=mysqli_fetch_assoc($select);
?>
<div class="sidenav" id="mySidenav">
    <h1>Profile Settings</h1>
    <h1 style="cursor: pointer" onclick="closeNav()">Close</h1><br/><br/>
    <form class="formi" method="POST" action="">
        <label>First Name: </label><br/>
        <input type="text" placeholder="Enter First Name" name="firstname" value="<?php echo $row7["firstname"];?>"><br/><br/>
        <label>Last Name: </label><br/>
        <input type="text" placeholder="Enter Last Name" name="lastname" value="<?php echo $row7["lastname"];?>"><br/><br/>
        <label>Username: </label><br/>
        <input type="text" placeholder="Enter Username" name="username" value="<?php echo $row7["username"];?>"><br/><br/>
        <label>E-Mail: </label><br/>
        <input type="email" placeholder="Enter E-Mail" name="email" value="<?php echo $row7["email"];?>"><br/><br/>
        <label>Gender: </label><br/>
        <input type="text" placeholder="Enter Gender" name="gender" value="<?php echo $row7["gender"];?>"><br/><br/>
        <label>Password: </label><br/>
        <input type="password" placeholder="Enter Password" name="password" value="<?php echo $row7["password"];?>"><br/><br/>
        <label>No: </label><br/>
        <input type="text" placeholder="Enter No" name="no" value="<?php echo $row7["no"];?>"><br/><br/>
        <label>Street: </label><br/>
        <input type="text" placeholder="Enter Street" name="street" value="<?php echo $row7["street"];?>"><br/><br/>
        <label>City: </label><br/>
        <input type="text" placeholder="Enter City" name="city" value="<?php echo $row7["city"];?>"><br/><br/>
        <label>Country: </label><br/>
        <input type="text" placeholder="Enter Country" name="country" value="<?php echo $row7["country"];?>"><br/><br/>
        <label>Home Phone: </label><br/>
        <input type="text" placeholder="Enter Home Phone" name="homephone" value="<?php echo $row7["homephone"];?>"><br/><br/>
        <label>Mobile Phone: </label><br/>
        <input type="text" placeholder="Enter Mobile Phone" name="mobilephone" value="<?php echo $row7["mobilephone"];?>"><br/><br/>
        <input type="submit" name="btnupdate" value="Update Profile">
        <br/>
        <br/>
    </form>
</div>
<script type="text/javascript" src="function.js"></script>
</body>
</html>