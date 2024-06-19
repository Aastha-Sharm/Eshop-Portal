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
        <script>
        var i=0;
        var a=["m1.jpg","m3.jpg","m5.jpg","t1.jpg","t3.jpg","t5.jpg","m2.jpg"];
        function previous()
        {
            
            if(i>=0 )
            {document.getElementById("m").src=a[i];
            i--;}
            else
            i=6;
        }
        function next()
        {
            
            if(i<7)
            {document.getElementById("m").src=a[i];
            i++;}
            else
            i=0;
        }
    </script>
    </head>
    <body>
        <?php include './header.php';?>
        <div class="hp">
            <img id="m" src="m2.jpg" style='align-items: center;' width="100%" height="500px"/>
        <br>
        <input type="button" value="Previous" style="margin-left: 625px" onclick="previous()" />
        <input type="button" value="Next" style="align:center" onclick="next()"/>
        </div>
         <?php include './footer.php';?>
    </body>
</html>