<?php
    $id=$_GET['uid'];
    include './dbinfo.php';
    $con= mysqli_connect(hostname,username,password,dbname);
    mysqli_query($con, "delete from usermaster where user_id=$id");
    mysqli_close($con);
    header("location:viewalluser.php");
?>