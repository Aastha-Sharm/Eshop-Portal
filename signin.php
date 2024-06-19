<?php
session_start();
if(isset($_SESSION['name'])){
    header("location:homepage.php");
}
$msg="";
if(isset($_POST['btn']))
{
    $name=$_POST['uemail'];
    $pa=$_POST['upass'];
    include './dbinfo.php';
    $con= mysqli_connect(hostname,username,password,dbname);
    $query=mysqli_query($con,"select * from usermaster where user_email='$name' and user_pwd='$pa'");
    if(mysqli_num_rows($query)>0)
    {   
        $row= mysqli_fetch_array($query);
        if(isset($_POST['rem'])){
            setcookie("cookie1",$name,time()+60*60*24);
            setcookie("cookie2",$pa,time()+60*60*24);
        }
        $_SESSION['name']=$row[1];
        $_SESSION['role']=$row[7];
        $_SESSION['uid']=$row[0];
        header("location:homepage.php");
    }
    else{
        $msg="Invalid login";
    }
    mysqli_close($con);
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
            <div class="hp" style="background:linear-gradient(whitesmoke,white)"> 
                <form method="post">
                <table style="align-content: center; border:black;margin-top: 150px;margin-left: 500px; border-width: 2px; height: 75px; border-style: solid; box-shadow: 5px 5px 5px  white; border-radius: 5px;">
            <caption style="font-weight: bold">Sign In</caption>
            
            <tr>
                <td><br></td>
            </tr>
            
            <tr>
            <td> <label>Username </label></td>
            <td><input type="email" name="uemail" 
            value="<?php
            if(isset($_COOKIE['cookie1']))
                echo $_COOKIE['cookie1'];
            ?>"/></td>
            </tr>
            <tr>
            <td><label>Password </label></td>
            <td><input type="password" name="upass" value="<?php
            if(isset($_COOKIE['cookie2'])){
                echo $_COOKIE['cookie2'];
            }?>"/></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="rem">Remember me</td>
            </tr>
            
            <tr>
                
                <td colspan="2"><input type="submit" name="btn" value="Sign In"  style="color: white; background-color: red; padding-left: 150px;padding-right: 150px;"></td>
                <td></td>
            </tr>  
                <tr>
                    <td><a href="">Forgot your password?</a></td>
                </tr>
            
        </table> 
                <?php echo "$msg"; ?>
                </form>
        </div>
         <?php include './footer.php';?>
    </body>
</html>