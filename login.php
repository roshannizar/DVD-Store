<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NA - Signin</title>
    <style>
        .carousel
        {
            width:55%;
            float:left;
            margin-top:8%;
            margin-left:5%;
            height:420px;
            border-top-left-radius:20px;
            border-bottom-left-radius:20px;
            background-image: url(splasher.gif);
            background-size: cover;
        }
        .heading
        {
            font-family: Calibri;
            font-size:20px;
            color:white;
            padding:8px;
            background-color: #001f3f;
            width:25%;
        }
        .loginDetails
        {
            width:34.5%;
            float:right;
            margin-top:8%;
            margin-right:5%;
            background-color: whitesmoke;
            border-top-right-radius:20px;
            border-bottom-right-radius:20px;
        }
        .backiColor
        {
            background-color: #001f3f;
        }
        .details
        {
            text-align:center;
        }
        .uname,.pass
        {
            width:70%;
            padding:10px;
            margin:10px;
            font-family: Calibri;
            font-size:14px;
            border:none;
            background-color: transparent;
            border-left:4px solid black;
            outline:none;
            transition-duration: 0.5s;
        }
        .btnsignin
        {
            border:2px solid black;
            width:75%;
            padding:10px;
            font-size: 18px;
            background-color: transparent;
            font-family: Calibri;
            transition-duration: 0.5s;
            outline:none;
        }
        .formdetails
        {
            float:left;
            margin-left:13%;
            font-family: Calibri;
        }
        .btnsignin:hover
        {
            background-color: #001f3f;
            color:white;
            border:2px solid #001f3f;
            border-radius: 20px;
        }
        .uname:hover,.pass:hover
        {
            border-left:4px solid #001f3f;
        }
        .checkiBox
        {
            margin-left:-50%;
        }
        .forgot
        {
            float:left;
            margin-left:13%;
            font-family: Calibri;
            text-decoration: none;
            margin-bottom:13px;
        }
    </style>
</head>
<body class="backiColor">
<div class="carousel">

</div>
<div class="loginDetails">
    <br/>
    <form method="POST" action="login.php">
        <label class="heading">ECorner DVD Store - Sign in</label><br/><br/>
        <br/>
        <div class="details">
            <img src="" class="loginuser"><br/>
            <label class="formdetails">Username:</label><br/>
            <input type="text" placeholder="Enter Username" name="uname" class="uname"><br/><br/>
            <label class="formdetails">Password:</label><br/>
            <input type="password" placeholder="Enter Password" name="pass" class="pass"><br/><br/>
            <input type="checkbox" class="checkiBox"><label style="font-family:Calibri">Show Password</label><br/><br/>
            <input type="submit" value="Sign in" name="btnsignin" class="btnsignin"><br/><br/>
        </div>
        <a href="#" class="forgot">Forgot Password?</a>
    </form>
    <br/>
</div>
<?php

session_start();

if(isset($_POST["uname"]) && isset($_POST["pass"]))
{
    $username = $_POST["uname"];
    $password = $_POST["pass"];
}


if(isset($_POST["btnsignin"]))
{
    if($username=="" && $password=="")
    {
        echo '<script>';
        echo 'alert("Invalid Credentials...")';
        echo '</script>';
    }
    else
    {
        $selectUserPass = "SELECT * FROM user_registration WHERE username='$username' AND password='$password'";
        $selectedDetails = $con->query($selectUserPass);
        $rowUserPass = mysqli_fetch_assoc($selectedDetails);

        $_SESSION["userlogin"]=$username;

        if ($username == $rowUserPass["username"] && $password == $rowUserPass["password"])
        {
            header("location: index.php");
        }
        else
        {
            echo '<script>';
            echo 'alert("Invalid Credentials..")';
            echo '</script>';

        }
    }
}
?>
</body>
</html>