<?php
    session_start();
    $user = $_SESSION["loginuser"];
    $useraccount = $_SESSION["account"];

    if(!($user=="" && $useraccount==""))
    {
        session_destroy();
        header("location: DS-Intro.html");
    }
    else
    {
        echo '<a href="DS-Signin.php">Back to Sign in</a>';
    }
?>