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
      $ops=$_POST['os'];
      $proce=$_POST['proc'];
      $col=$_POST['color'];
      $simty=$_POST['simt'];
      $hysims=$_POST['bb'];
      $dispsize=$_POST['dis'];
      $resol=$_POST['res'];
      $intsto=$_POST['ints'];
      $r=$_POST['ram'];
      $pric=$_POST['pcam'];
      $sec=$_POST['scam'];
      $net=$_POST['ntype'];
      $batc=$_POST['bcap'];
      $w=$_POST['wid'];
      $h=$_POST['ht'];
      $wars=$_POST['wsum'];
      $conn= mysqli_connect("localhost","root","","eshopDB");
      $qry="insert into Mobilespecification(Pid,Os,Processor,Color,SIM_Type,Hybrid_Sim_Slot,Disply_Size,Resolution,Internal_Storage,RAM,Primary_Camera,Secondary_Camera,Network_Type,Battery_Capacity,Width,Height,Warranty_Summary) values('$id','$ops','$proce','$col','$simty','$hysims','$dispsize','$resol','$intsto','$r','$pric','$sec','$net','$batc','$w','$h','$wars');";
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
                <form method="post">
                    <table  style="align-content: left; border:black; border-width: 2px; height: 100px; border-style: solid; box-shadow: 5px 5px 5px  white; border-radius: 5px; margin-left: 400px;margin-top: 50px; padding: 20px 15px 20px 15px;">
                        <caption>Add Mobile Description</caption>
                        <tr>
                            <td><label>Product Id</label></td>
                            <td><input type="text" name="tpid" value="
                                       <?php
                                       if(isset($_GET['Pid'])){
                                       echo $_GET['Pid'];
                                       }
                                       ?>">
                            </td>
                        </tr>
                         <tr>
                            <td>Os</td>
                            <td><input type="text" name="os"</td>
                        </tr>
                         <tr>
                            <td>Processor</td>
                            <td><input type="text" name="proc"</td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td><input type="text" name="color"</td>
                        </tr>
                        <tr>
                            <td>Sim Type</td>
                            <td><input type="text" name="simt"</td>
                        </tr>
                        
                        <tr>
                            <td><label>Hybrid Sim Slot </label></td>
                            <td><input type="radio" name="bb"><label>Yes</label>
                                <input type="radio" name="bb"><label>No</label></td>
                        </tr>
                         <tr>
                            <td><label>Display Size</label></td>
                            <td><input type="text" name="dis"</td>
                        </tr>
                        <tr>
                            <td><label>Resolution</label></td>
                            <td><input type="text" name="res"</td>
                        </tr>
                       
                        <tr>
                            <td><label>Internal Storage</label></td>
                            <td><input type="text" name="ints"</td>
                        </tr>
                        <tr>
                            <td><label>RAM</label></td>
                            <td><input type="text" name="ram"</td>
                        </tr>
                        <tr>
                            <td><label>Primary Camera</label></td>
                            <td><input type="text" name="pcam"</td>
                        </tr>
                        <tr>
                            <td><label>Secondary Camera</label></td>
                            <td><input type="text" name="scam"</td>
                        </tr>
                        <tr>
                            <td><label>Network Type</label></td>
                            <td><input type="text" name="ntype"</td>
                        </tr>
                        <tr>
                            <td><label>Battery Capacity</label></td>
                            <td><input type="text" name="bcap"</td>
                        </tr>
                        <tr>
                            <td><label>Width</label></td>
                            <td><input type="text" name="wid"</td>
                        </tr>
                        <tr>
                            <td><label>Height</label></td>
                            <td><input type="text" name="ht"</td>
                        </tr>
                        <tr>
                            <td><label>Warranty Summary</label></td>
                            <td><input type="text" name="wsum"</td>
                        </tr>
                        
                        <tr>
                             <td  colspan="2"><input type="submit" name="btnreg" value="Add Mobile Description" style="color: white; background-color: red; padding-left: 125px;padding-right: 125px;"></td>
                             <td></td>
                        </tr> 
           
                    </table>
                     <?php echo "$msg"; ?>
                </form>
               
            </div>
            </div>
        <?php include './footer.php';?>
            
    </body>
</html>