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
$msg="";
  if(isset($_POST['btnreg'])){
      $id = intval($_GET['Pid']);
      $itb=$_POST['titb'];
      $color=$_POST['tc'];
      $d=$_POST['tds'];
      $stype=$_POST['tst'];
      $hdtr=$_POST['thd'];
      $stv=$_POST['tstv'];
      $ms=$_POST['tms'];
      $hdmi=$_POST['thdmi'];
      $usb=$_POST['tusb'];
      $biwf=$_POST['tbi'];
      $ly=$_POST['tly'];
      $conn= mysqli_connect("localhost","root","","eshopDB");
      $qry="insert into tv_specification(Pid,In_The_Box,Color,Display_Size,Screen_Type,HD_Type_Res,Smart_Tv,Motion_Sensor,HDMI,USB,Built_In_WiFi,Launch_Year) values('$id','$itb','$color','$d','$stype','$hdtr','$stv','$ms','$hdmi','$usb','$biwf','$ly');";
      mysqli_query($conn, $qry);
      if(mysqli_affected_rows($conn)>0)
      {$msg="Desciption added successful";
      }
      else {
          $msg="Description added unsuccessfully";    
      }
      mysqli_close($conn);
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
            <div class="hp1">
                <form method="post" enctype="multipart/form-data">
                    <table  style="align-content: left; border:black; border-width: 2px; height: 100px; border-style: solid; box-shadow: 5px 5px 5px  white; border-radius: 5px; margin-left: 430px;margin-top: 100px; padding: 20px 15px 20px 15px;">
                        <caption>Add Television Description</caption>
                        <tr>
                            <td><label>Product Id</label></td>
                            <td><input type="text" name="tpid" value="
                                       <?php
                                       if(isset($_GET['Pid'])){
                                       echo $_GET['Pid'];}
                                       ?>">
                            </td>
                        </tr>
                         <tr>
                            <td>In The Box</td>
                            <td><input type="text" name="titb"</td>
                        </tr>
                         <tr>
                            <td>Color</td>
                            <td><input type="text" name="tc"</td>
                        </tr>
                        <tr>
                            <td>Display Size</td>
                            <td><input type="text" name="tds"</td>
                        </tr>
                        <tr>
                            <td>Screen Type</td>
                            <td><input type="text" name="tst"</td>
                        </tr>
                        <tr>
                            <td>HD Technology & Resolution</td>
                            <td><input type="text" name="thd"</td>
                        </tr>
                        <tr>
                            <td><label>Smart TV</label></td>
                            <td><input type="radio" name="tstv"><label>Yes</label>
                                <input type="radio" name="tstv"><label>No</label></td>
                        </tr>
                        <tr>
                            <td><label>Motion Sensor</label></td>
                            <td><input type="radio" name="tms"><label>Yes</label>
                                <input type="radio" name="tms"><label>No</label></td>
                        </tr>
                        <tr>
                            <td><label>HDMI</label></td>
                            <td><input type="text" name="thdmi"</td>
                        </tr>
                        <tr>
                            <td><label>USB</label></td>
                            <td><input type="text" name="tusb"</td>
                        </tr>
                        <tr>
                            <td><label>Built In Wi-Fi</label></td>
                            <td><input type="radio" name="tbi"><label>Yes</label>
                                <input type="radio" name="tbi"><label>No</label></td>
                        </tr>
                        <tr>
                            <td><label>Launch Year</label></td>
                            <td><input type="text" name="tly"</td>
                        </tr>
                        <tr>
                             <td  colspan="2"><input type="submit" name="btnreg" value="Add TV Description" style="color: white; background-color: red; padding-left: 125px;padding-right: 125px;"></td>
                             <td></td>
                        </tr> 
           
                    </table>
                </form>
               
            </div>
            </div>
        <?php include './footer.php';?>
            
    </body>
</html>