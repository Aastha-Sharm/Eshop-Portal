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
                include './dbinfo.php';
                $con = mysqli_connect(hostname,username,password,dbname);
                $qry = "select * from productmaster where ptype='mobile'";
                $result = mysqli_query($con, $qry);
                if(mysqli_num_rows($result)>0)
                {
                    $count = 0;
                    while($r = mysqli_fetch_assoc($result)){
                        
                        if($count==0)
                            echo "<div class='row'>";
                        $count++;
                        echo "<div class='column' align='center'>";
                           echo "<a style='text-decoration:none' href='mdesc.php?Pid=$r[Pid]'><div class='product'>";
                                echo "<div class='row1'>";
                                    echo "<div class='datacolumn'><img src='$r[Pimage]' width='280px' height='180px' /></div>";
                                echo "</div>";
                                echo"<div class='row1'>";
                                    echo "<div class='datacolumn'>Rs. $r[Pname]</div>";
                                echo "</div>";
                                echo"<div class='row1'>";
                                    echo "<div class='datacolumn'>Rs. $r[Pprice]</div>";
                                echo "</div>";
                            echo "</div></a>";
                        echo "</div>";
                        
                        if($count==4){
                            echo "</div>";
                            $count=0;
                        }
                    }
                }
                else{
                    echo "<h2>No Product Found!!!</h2>";
                }
        mysqli_close($con);     ?>
        </div>
    
         <?php include './footer.php';?>
    </body>
</html>