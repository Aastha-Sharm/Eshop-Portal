<?php
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role']!='Admin'){
        header("location:homepage.php");
    }
}
 else {
        header("location:signin.php");    
}?>
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
                <?php 
                    $con = mysqli_connect("localhost","root","","eshopDB");
                    $result = mysqli_query($con,"select * from UserMaster");
                    if(mysqli_num_rows($result)>0){
                        echo "<table width='162%' border='1'>";
                        echo "<tr>";
                        echo "<th>User ID</th>";
                        echo "<th>User Name</th>";
                        echo "<th>User Email</th>";
                        echo "<th>User Password</th>";
                        echo "<th>User Gender</th>";
                        echo "<th>User Mobile</th>";
                        echo "<th>User DOB</th>";
                        echo "<th>Role</th>";
                        echo "<th></th>";
                        echo "</tr>";
                     while($row= mysqli_fetch_array($result))
                     {
                         echo "<tr>";
                         echo "<td>$row[0]</td>";
                         echo "<td>$row[1]</td>";
                         echo "<td>$row[2]</td>";
                         echo "<td>$row[3]</td>";
                         echo "<td>$row[4]</td>";
                         echo "<td>$row[5]</td>";
                         echo "<td>$row[6]</td>";
                         echo "<td>$row[7]</td>";
                         
                        
                         echo "<td><a href='deleteuser.php?uid=$row[0]'>Delete</a></td>";
                         echo "</tr>";
                     }   
                     echo "</table>";
                    }
                    else
                        echo "<h2>No Product Found</h2>";
                    mysqli_close($con);
                ?>
            </div>
            </div>
        <?php include './footer.php';?>
            
    </body>
</html>