
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <div class="header">
        <ul>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="privacy.php">Privacy</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><?php 
                if(isset($_SESSION['name'])){
                echo "(Welcome $_SESSION[name])";
            }
?></li>
        </ul>
    </div>
    
    <div class="nav">
        <ul>
            <li style="color: yellow; font-weight: bolder; padding-right: 150px; font-size: 30px">e-Shop</li>
            <li><a href="http://localhost:8080/PhpProject2/homepage.php" style="background-color: #d1870f;padding-top: 10px;padding-bottom: 10px">Home</a></li>
            <li><a href="http://localhost:8080/PhpProject2/television.php">Television</a></li>
            <li><a href="http://localhost:8080/PhpProject2/mobile.php">Mobile</a></li>
            
            <?php 
                if(!isset($_SESSION['name'])){
                echo "<li><a href='http://localhost:8080/PhpProject2/signin.php'>Sign In</a></li>";
            }
            ?>
            <li><a href='signup.php'>Sign Up</a></li>
            <li><a href="http://localhost:8080/PhpProject2/cart.php">Cart<?php
            if(isset($_COOKIE['cart'])){
                $data=$_COOKIE['cart'];
                $arr=explode(",",$data);
                echo "<label style='width:10px;background-color:yellow;test-align:center;border-radius:10px'>".count($arr)."</label>";
            }
            ?></a></li>
            <li><a href="http://localhost:8080/PhpProject2/contactus.php">Contact Us</a></li>
            <?php
            if(isset($_SESSION['role'])){
                if($_SESSION['role']=='Admin'){
                   echo "<li><a href='http://localhost:8080/PhpProject2/admin.php'>Admin</a></li>";
                }
            }
                    ?>
            
            <?php 
                if(isset($_SESSION['name'])){
                echo "<li><a href='logout.php'>Log Out</a></li>";
            }
            ?>
        </ul>
    </div>       
    </body>
</html>