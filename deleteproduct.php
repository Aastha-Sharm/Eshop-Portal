<?php
   session_start();
   include 'dbinfo.php';
   $id = $_GET['pid'];
   $con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
   $result = mysqli_query($con,"delete from productmaster where pid=$id");
   mysqli_close($con);
   header("location:viewallproduct.php");
?>
