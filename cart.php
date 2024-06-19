<?php
session_start();?>
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
        <div class="hp">
            <?php 
             if(isset($_COOKIE['cart'])){
                $products = $_COOKIE['cart'];
                include 'dbinfo.php';
                $con = mysqli_connect(hostname,username,password,dbname);
                $result = mysqli_query($con, "select * from productmaster where pid in ($products)");
                    if(mysqli_num_rows($result)>0){
                        echo "<table style='width:50%;margin-right: 100px;' class='table table-striped'>";
                        echo "<tr>";
                        echo "<th>Product</th>";
                        echo "<th>Name</th>";
                        echo "<th>Price</th>";
                        echo "<th style='text-align:right'></th>";
                        echo "</tr>";
                        $amount=0;
                       while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td><img src='$row[4]' width='50px' height='50px'/></td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            $amount+=$row[2];
                            echo "<td style='text-align:right'><a href='deletecart.php'><img src='del.jpg'/></a></td>";
                            echo "</tr>";
                        }
                        $_SESSION['total']=$amount;
                        echo "<tr>";
                            echo "<td colspan='4' align='right'>Total Amount : <b>$amount</b></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td colspan='3'></td>";
                            echo "<td align='right'><a class='btn' href='placeorder.php'>Place Order</a></td>";
                        echo "</tr>";
                        echo "</table>";
                    }
                     mysqli_close($con);
             }
             else
                echo "<h2>Cart is Empty!!!!</h2>";
                   
             ?>
        </div>
         <?php include './footer.php';?>
    </body>
</html>