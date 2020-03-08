<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DS - Dashboard</title>
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
        input[type=submit]
        {
            width:25%;
            font-family: Calibri;
            background-color: transparent;
            color:white;
            font-size:18px;
            border:1px solid white;
            padding:10px;
        }
        input[type=submit]:hover
        {
            background-color: white;
            color:black;
            border:1px solid white;
        }
        input[type=text],input[type=password],input[type=email]
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
        .detail
        {
            height:140px;
            width:23%;
            float:left;
            margin:10px;
            border-radius: 10px;
        }
        h5
        {
            font-family: Calibri;
            font-size:18px;
            color:white;
            margin:10px;
        }
        .users
        {
            background-image: url("users.png");
            background-size: 50%;
            background-repeat: no-repeat;
            background-position-y: 10px;
        }
        .customers
        {
            background-image: url("customers.png");
            background-size: 50%;
            background-repeat: no-repeat;
            background-position-y: 10px;
        }
        .stocks
        {
            background-image: url("stocks.png");
            background-size: 50%;
            background-repeat: no-repeat;
            background-position-y: 10px;
        }
        .orders
        {
            background-image: url("orders.png");
            background-size: 50%;
            background-repeat: no-repeat;
            background-position-y: 10px;
        }
        .tableorder,.tablestock
        {
            width:50%;
            float:left;
        }
        .tableorder th,.tablestock th
        {
            font-family: Calibri;
            font-size: 18px;
            background-color: #001f3f;
            color:whitesmoke;
            padding:10px;
            text-align:center;
        }
    </style>
</head>
<body>
<?php

    $usertotal = 0;
    $customertotal = 0;
    $ordertotal = 0;
    $stocktotal = 0;


    $selectCustomer = "SELECT * FROM user_registration WHERE accounttype='Customer'";
    $selectUser = "SELECT * FROM user_registration WHERE NOT accounttype='Customer'";
    $selectOrder = "SELECT * FROM order_detail";
    $selectStock = "SELECT * FROM dvd";
    $customer = $con->query($selectCustomer);
    $user = $con->query($selectUser);
    $order = $con->query($selectOrder);
    $stock = $con->query($selectStock);

    while($rowUser=mysqli_fetch_assoc($user))
    {
        $usertotal = $usertotal+1;
    }

    while($rowStock=mysqli_fetch_assoc($stock))
    {
        $stocktotal = $stocktotal+($rowStock["unitprice"]*$rowStock["quantity"]);
    }

    while($rowOrder = mysqli_fetch_assoc($order))
    {
        $ordertotal = $ordertotal +1;
    }

    while($rowCustomer = mysqli_fetch_assoc($customer))
    {
        $customertotal = $customertotal+1;
    }

?>
<div class="navitop">
    <label style="float:left;margin-left:15%;font-size:18px">Dashboard</label>
    <a href="sessionDestroy.php">Logout</a>
    <a href="#" onclick="openNav()"><?php echo $_SESSION["userlogin"];?></a>
    <img src="anime1.jpg" class="profpic" onclick="openNav()"/>
</div>
<div class="sideNavi">
    <h3>DVD Stores Admin Panel</h3>
    <img src="anime1.jpg" class="profi" onclick="openNav()"/>
    <h3><?php echo $_SESSION["userlogin"];?></h3>
    <br/>
    <a href="DS-Dashboard.php"><button class="btndashboard" style="background-color: whitesmoke;color:#001f3f;background-image: url(dashboard.png);background-repeat: no-repeat;background-size: 30%;background-position-x: -5px;background-position-y: -5px;">Dashboard</button></a><br/>
    <a href="DS-Stock.php"><button class="btnstock">Stock</button></a><br/>
    <a href="DS-Order.php"><button class="btnorder">Order</button></a><br/>
    <a href="DS-Setting.php"><button class="btnsetting">Settings</button></a><br/><br/>
    <a href="#" class="social">Facebook</a>
    <a href="#" class="social">Instagram</a>
    <a href="#" class="social">Twitter</a>
</div>
<div class="main">
    <h4>Hi <?php echo $_SESSION["userlogin"];?>, you can now check your progress.</h4>
    <hr/>
    <div class="detail users" style="background-color: teal">
        <h5>Total No User: <?php echo $usertotal;?></h5>
    </div>
    <div class="detail stocks" style="background-color: crimson">
        <h5>Total No Stock: Rs <?php echo $stocktotal;?>/=</h5>
    </div>
    <div class="detail orders" style="background-color: goldenrod">
        <h5>Total No Order: <?php echo $ordertotal;?></h5>
    </div>
    <div class="detail customers" style="background-color: seagreen">
        <h5>Total No Customer: <?php echo $customertotal;?></h5>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <hr/>
    <table class="tableorder">
        <tr>
            <th>Order ID</th>
            <th>Stock Name</th>
            <th>Customer</th>
            <th>Date</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php
            $selectOrder = "SELECT * FROM order_detail o,dvd d WHERE o.dvdid=d.dvdid";
            $execute = $con->query($selectOrder);

            while($row9=mysqli_fetch_assoc($execute))
            {
                ?>
                    <tr>
                        <td><?php echo $row9["orderid"];?></td>
                        <td><?php echo $row9["dvdname"];?></td>
                        <td><?php echo $row9["username"];?></td>
                        <td><?php echo $row9["date"];?></td>
                        <td><?php echo $row9["quantity"];?></td>
                        <td><?php echo $row9["price"];?></td>
                    </tr>
        <?php
            }
        ?>
    </table>
    <table class="tablestock">
        <tr>
            <th>Stock ID</th>
            <th>Stock Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php
            $stock = "SELECT * FROM dvd";
            $stockdetails1 = $con->query($stock);
            while($row8=mysqli_fetch_assoc($stockdetails1))
            {
                ?>
                <tr>
                    <td><?php echo $row8["dvdid"];?></td>
                    <td><?php echo $row8["dvdname"];?></td>
                    <td><?php echo $row8["quantity"];?></td>
                    <td><?php echo $row8["unitprice"];?></td>
                </tr>
        <?php
            }
        ?>
    </table>
</div>
<?php
    $username1 = $_SESSION["userlogin"];

    $selectProfile = "SELECT * FROM user_registration WHERE username='$username1'";
    $select = $con->query($selectProfile);
    $row7=mysqli_fetch_assoc($select);
?>
<div class="sidenav" id="mySidenav">
    <h1>Profile Settings</h1>
    <h1 style="cursor: pointer" onclick="closeNav()">Close</h1><br/><br/>
    <form method="POST" action="DS-Dashboard.php">
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
<?php
    if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["gender"]) && isset($_POST["password"]) && isset($_POST["no"]) && isset($_POST["street"]) && isset($_POST["city"]) && isset($_POST["country"]) && isset($_POST["homephone"]) && isset($_POST["mobilephone"]))
    {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $uname = $_POST["username"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $pass = $_POST["password"];
        $no = $_POST["no"];
        $street = $_POST["street"];
        $city = $_POST["city"];
        $country  = $_POST["country"];
        $hphone = $_POST["homephone"];
        $mphone = $_POST["mobilephone"];
    }

    if(isset($_POST["btnupdate"]))
    {
        $updateProfile = "UPDATE user_registration SET firstname='$fname',lastname='$lname',email='$email',gender='$gender',password='$pass',no='$no',street='$street',city='$city',country='$country',homephone='$hphone',mobilephone='$mphone' WHERE username='$uname'";

        if($con->query($updateProfile))
        {
            echo '<script>';
            echo 'alert("Profile Updated Successfully...")';
            echo '</script>';
        }
        else
        {
            echo '<script>';
            echo 'alert("Erroro ccured while updating your profile")';
            echo '</script>';
        }
    }
?>
<script type="text/javascript" src="function.js"></script>
</body>
</html>