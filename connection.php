<?php
    $con = new mysqli("localhost","root","","ds");

    if($con->connect_error)
    {
        echo "Server not  responding...";
    }
?>