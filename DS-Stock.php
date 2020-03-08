<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DS - Stock</title>
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
        .myform input[type=text],.myform option,.myform select
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
    <label style="float:left;margin-left:15%;font-size:18px">Stock/Inventory</label>
    <form class="searchbar" method="POST" action="DS-Stock.php">
        <input type="text" placeholder="Search" name="searchproduct"><input type="submit" name="btnsearch" value="Search"><input type="submit" name="btnreload" value="Reload">
    </form>
    <a href="sessionDestroy.php">Logout</a>
    <a href="#" onclick="openNav()"><?php echo $_SESSION["loginuser"];?></a>
    <img src="anime1.jpg" class="profpic" onclick="openNav()"/>
</div>
<div class="sideNavi">
    <h3>DVD Stores Admin Panel</h3>
    <img src="anime1.jpg" class="profi" onclick="openNav()"/>
    <h3><?php echo $_SESSION["loginuser"];?></h3>
    <br/>
    <a href="DS-Dashboard.php"><button class="btndashboard">Dashboard</button></a><br/>
    <a href="DS-Stock.php"><button class="btnstock" style="background-color: whitesmoke;color:#001f3f;background-image: url(stock.png);background-repeat: no-repeat;background-size: 30%;background-position-x: -5px;background-position-y: -5px;">Stock</button></a><br/>
    <a href="DS-Order.php"><button class="btnorder">Order</button></a><br/>
    <a href="DS-Setting.php"><button class="btnsetting">Settings</button></a><br/><br/>
    <a href="#" class="social">Facebook</a>
    <a href="#" class="social">Instagram</a>
    <a href="#" class="social">Twitter</a>
</div>
<div class="main">
    <h4>Hey <?php echo $_SESSION["userlogin"];?>!, you can now Add/Update/Delete Stock details.</h4>
    <hr/>
    <form method="POST" action="DS-Stock.php" enctype="multipart/form-data" class="myform">
        <table style="float:left;width:50%">
            <tr>
                <td>DVD Image: </td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td>DVD ID: </td>
                <td><input type="text" placeholder="Enter DVD ID" name="dvdid"></td>
            </tr>
            <tr>
                <td>DVD Name: </td>
                <td><input type="text" placeholder="Enter DVD Name" name="dvdname"></td>
            </tr>
            <tr>
                <td>Type: </td>
                <td>
                    <select name="type">
                        <option>--Please Select--</option>
                        <option>Romance</option>
						<option>Action</option>
						<option>Thriller</option>
						<option>Comedy</option>
						<option>Horror</option>
                        <option>Adult</option>
                    </select>
                </td>
            </tr>
        </table>
        <table style="float:right;width:50%">
            <tr>
                <td>Categories: </td>
                <td>
                    <select name="categories">
                        <option>--Please Select--</option>
                        <option>Hollywood</option>
						<option>Kollywood</option>
						<option>Bollywood</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Quantity: </td>
                <td><input type="text" placeholder="Enter Quantity" name="quantity"></td>
            </tr>
            <tr>
                <td>Price: </td>
                <td><input type="text" placeholder="Enter Price" name="price"></td>
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
            <th>DVD ID</th>
            <th>DVD Name</th>
            <th>Type</th>
            <th>Categories</th>
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
                $selectValues = "SELECT * FROM dvd WHERE dvdid='$searchproduct'";
                $selected = $con->query($selectValues);
                while ($row = mysqli_fetch_assoc($selected)) {
                    ?>
                    <tr>
                        <td><?php echo $row["dvdid"]; ?></td>
                        <td><?php echo $row["dvdname"]; ?></td>
                        <td><?php echo $row["type"]; ?></td>
                        <td><?php echo $row["categories"]; ?></td>
                        <td><?php echo $row["quantity"]; ?></td>
                        <td><?php echo $row["unitprice"]; ?></td>
                    </tr>
                    <?php
                }
            }
            else if(isset($_POST["reload"]))
            {
                $selectValues = "SELECT * FROM dvd";
                $selected = $con->query($selectValues);
                while ($row = mysqli_fetch_assoc($selected)) {
                    ?>
                    <tr>
                        <td><?php echo $row["dvdid"]; ?></td>
                        <td><?php echo $row["dvdname"]; ?></td>
                        <td><?php echo $row["type"]; ?></td>
                        <td><?php echo $row["categories"]; ?></td>
                        <td><?php echo $row["quantity"]; ?></td>
                        <td><?php echo $row["unitprice"]; ?></td>
                    </tr>
                    <?php
                }
            }
            else
            {
                $selectValues = "SELECT * FROM dvd";
                $selected = $con->query($selectValues);
                while ($row = mysqli_fetch_assoc($selected)) {
                    ?>
                    <tr>
                        <td><?php echo $row["dvdid"]; ?></td>
                        <td><?php echo $row["dvdname"]; ?></td>
                        <td><?php echo $row["type"]; ?></td>
                        <td><?php echo $row["categories"]; ?></td>
                        <td><?php echo $row["quantity"]; ?></td>
                        <td><?php echo $row["unitprice"]; ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
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
    <form class="formi" method="POST" action="DS-Stock.php">
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

    if(isset($_FILES["image"]["tmp_name"]) && isset($_POST["dvdid"]) && isset($_POST["dvdname"]) && isset($_POST["type"]) && isset($_POST["categories"]) && isset($_POST["quantity"]) && isset($_POST["price"]))
    {
        $imageHolder = $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $dvdid = $_POST["dvdid"];
        $dvdname = $_POST["dvdname"];
        $type = $_POST["type"];
        $category = $_POST["categories"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
    }

    $type=$_SESSION["account"];

    if(isset($_POST["btnadd"]))
    {
        $insertQuery="INSERT INTO dvd VALUES('$imageHolder','$dvdid','$dvdname','$type','$category','$quantity','$price')";

        if($con->query($insertQuery))
        {
            echo '<script>';
            echo 'alert("Stock Added Successfully")';
            echo '</script>';
        }
        else
        {
            echo '<script>';
            echo 'alert("Error occured while adding....")';
            echo '</script>';
        }
    }
    else if(isset($_POST["btnupdate"]))
    {
        if($type=="Administrator")
        {

            $updateQuery = "UPDATE dvd SET dvdimage='$imageHolder', dvdname='$dvdname',type='$type',categories='$category',quantity='$quantity',unitprice='$price' WHERE dvdid='$dvdid'";

            if ($con->query($updateQuery))
            {
                echo '<script>';
                echo 'alert("Stock detail updated successfully...")';
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
    else if(isset($_POST["btndelete"]))
    {
        if($type=="Administrator")
        {
            $deleteQuery = "DELETE FROM dvd WHERE dvdid='$dvdid'";

            if ($con->query($deleteQuery))
            {
                echo '<script>';
                echo 'alert("Stock details Deleted Successfully...")';
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