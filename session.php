<?php

    session_start();

    $link = mysqli_connect("localhost", "root", "root", 'Hotel');
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $que = "SELECT * from 'Employees' where 'EMPLID' = '".$user."' and 'Password' ='".$pass."'";
    $res = mysqli_query($link, $que);
    if(mysqli_connect_errno())
    {
        echo "Failed to connect: " . mysqli_connect_error();
    }

    if(mysqli_num_rows($res)>0)
    {
        $_SESSION['username']=$user;
        echo "<script>window.location='reservation.php';</script>";
    }
    else
    {
        $message = "Incorrect username or password!";
        echo "<script type = 'text/javascript'>alert('$message');</script>";
        echo "<script>window.location='login.php';</script>";
        echo "<script>close()</script>";
    }

?>