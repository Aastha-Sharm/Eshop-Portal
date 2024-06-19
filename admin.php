<?php
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role']!='Admin'){
        header("location:homepage.php");
    }
}
 else {
        header("location:signin.php");    
}
?>
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
        <?php include './header.php';?> 
        <div class="hp1">
            <div style="background-color: #5182ed;">
                <table style="background-color: white; border-style: double;">
                    <form>
                    <tr>
                        <td><button  type="button" value="Add New User" style="color: white; background-color: green; padding-left: 5px;padding-right: 25px;"><a href="http://localhost:8080/PhpProject2/addnewuser.php" style="color: white; text-decoration: none">Add New User</a></button></td>
                    </tr>
                    <tr>
                        <td><button type="button" value="View All User" style="color: white; background-color: green; padding-left: 5px;padding-right: 26px;"><a href="http://localhost:8080/PhpProject2/viewalluser.php" style="color: white; text-decoration: none">View All Users</a></td>
                    </tr>
                    <tr>
                        <td><button type="button" value="Add New Product" style="color: white; background-color: green; padding-left: 5px;padding-right: 7px;"><a href="http://localhost:8080/PhpProject2/addnewproduct.php" style="color: white; text-decoration: none">Add New Product</a></td>
                    </tr>
                    <tr>
                        <td><button type="button" value="View All Products" style="color: white; background-color: green; padding-left: 5px;padding-right: 8px;"><a href="http://localhost:8080/PhpProject2/viewallproduct.php" style="color: white; text-decoration: none">View All Products</a></td>
                    </tr>
                    <tr>
                        <td><button type="button" value="Orders" style="color: white; background-color: green; padding-left: 5px;padding-right: 70px;"><a href="http://localhost:8080/PhpProject2/orders.php" style="color: white; text-decoration: none">Orders</a></td>
                    </tr>
                    <tr>
                        <td><button type="button" value="Query/Feedback" style="color: white; background-color: green; padding-left: 5px;padding-right: 12px;"><a href="http://localhost:8080/PhpProject2/Queryfeedback.php" style="color: white; text-decoration: none">Query/Feedback</a></td>
                    </tr>
                </form>
                </table>
            </div>
            <hr>

            <div>
                ADMIN PAGE
            </div>
            </div>
        <?php include './footer.php';?>
            
    </body>
</html>