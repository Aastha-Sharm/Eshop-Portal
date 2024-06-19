
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
      $name=$_POST['uname'];
      $email=$_POST['uemail'];
      $pass=$_POST['upwd'];
      $gender=$_POST['ugender'];
      $mobile=$_POST['umobile'];
      $dob=$_POST['udob'];
      $role=$_POST['uRole'];
      
      
      $conn= mysqli_connect("localhost","root","","eshopDB");
      $qry="insert into UserMaster(user_name,user_email,user_pwd,user_gender,user_mobile,user_dob,role) values('$name','$email','$pass','$gender','$mobile','$dob','$role');";
      mysqli_query($conn, $qry);
      if(mysqli_affected_rows($conn)>0)
          $msg="New User added successful";
      else {
          $msg="New User added unsuccessful";    
      }
      mysqli_close($conn);
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
                    <form method="post">
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
             
            <form method="post">
            <table style="align-content: center; border:black; border-width: 2px; height: 100px; border-style: solid; box-shadow: 5px 5px 5px  white; border-radius: 5px; margin-left: 450px;margin-top: 150px;">
                <caption style="font-weight: bold">Add New User</caption>
               
            <tr>
                <td><br></td>
            </tr>
            <tr>
           <td> <label>Name </label></td>
           <td> <input type="text" name="uname"></td>
            </tr>
            <tr>
            <td> <label>Email Id </label></td>
            <td><input type="email" name="uemail"></td>
            </tr>
            <tr>
            <td><label>Password </label></td>
            <td><input type="password" name="upwd"></td>
            </tr>
            <tr>
                <td><label>Confirm Password </label></td>
                <td><input type="password" name="ucpwd"></td>
            </tr>
            <tr>
                <td><label>Gender </label></td>
                <td><input type="radio" name="ugender" value="male"> Male
                    <input type="radio" name="ugender" value="female"> Female
                </td> 
            </tr>
            <tr>
                    <td><label>Contact No. </label></td>
                    <td><input type="number" name="umobile"></td>
            </tr>   
            <tr>
                    <td><label>Date of Birth</label></td>
                    <td><input type="date" name="udob"></td>
            </tr>
             <tr>
                    <td><label>User type(Role)</label></td>
                    <td><select name="uRole"><option value="">Role</option><option value="Client">Client</option><option value="Admin">Admin</option></select></td>
            </tr> 
            <tr>
                <td></td>
                <td><input type="submit" name="btnreg" value="Add User" style="color: white; background-color: red; padding-left: 5px;padding-right: 5px;"></td>
                </tr>  
                
                 </table>
            <?php echo "$msg"; ?>
        </form>
        </div>
        
            </div>
       
        <?php include './footer.php';?>
    </body>
</html>