<?php
session_start();
  $msg="";
  if(isset($_POST['btnreg'])){
      $name=$_POST['txtname'];
      $email=$_POST['txtemail'];
      $pass=$_POST['txtpwd'];
      $gender=$_POST['txtgender'];
      $mobile=$_POST['mobile'];
      $dob=$_POST['dob'];
      $role='client';
      
      $conn= mysqli_connect("localhost","root","","eshopDB");
      $qry="insert into UserMaster(user_name,user_email,user_pwd,user_gender,user_mobile,user_dob,role) values('$name','$email','$pass','$gender','$mobile','$dob','$role');";
      mysqli_query($conn, $qry);
      if(mysqli_affected_rows($conn)>0)
          $msg="Sign Up successful";
      else {
          $msg="Sign Up unsuccessful";    
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
        <script>
            function validatepassword()
            {
                var flag = true;
                var pwd = document.getElementsByClassName("txtpwd").value;
                var ob = document.getElementsByClassName("btnreg");
                if(pwd.length<8){
                    flag=false;
                    ob.innerHTML="Password should contain minimum 8 caharacters.";
                }
                else
                {
                    var upper=0,lower=0,digit=0,symbol=0;
                    for(i=0;i<pwd.length;i++){
                        var code=pwd.charCodeAt(i);
                        if(code>=65 && code<=90)
                            upper++;
                        else if(code>=97 && code<=122)
                            lower++;
                        else if(code>=48 && code<=57)
                            digit++;
                        else
                            symbol++;
                    }
                    if(upper>=2 && lower>=2 && digit>=1 && symbol>=1)
                        ob.innerHTML="";
                    else
                    {
                        ob.innerHTML="Password should have 2 uppercase letter , 2 lowercase letters , 1 digit and 1 symbol";
                        flag = false;
                    }
                }
                return flag;
            }
        </script>
    </head>
    <body>
        <?php include './header.php';?>
        <div class="hp" style="background:linear-gradient(whitesmoke,white)"> 
            <form method="post"  onsubmit="return validatepassword()">
            <table style="align-content: center; border:black; border-width: 2px; height: 100px; border-style: solid; box-shadow: 5px 5px 5px  white; border-radius: 5px;">
                <caption style="font-weight: bold">Sign Up</caption>
               
            <tr>
                <td><br></td>
            </tr>
            <tr>
           <td> <label>Full Name </label></td>
           <td> <input type="text" name="txtname"></td>
            </tr>
            <tr>
            <td> <label>Email Id </label></td>
            <td><input type="email" name="txtemail"></td>
            </tr>
            <tr>
            <td><label>Password </label></td>
            <td><input type="password" name="txtpwd"></td>
            </tr>
            <tr>
                <td><label>Confirm Password </label></td>
                <td><input type="password" name="txtcpwd"></td>
            </tr>
            <tr>
                <td><label>Gender </label></td>
                <td><input type="radio" name="txtgender" value="male"> Male
                    <input type="radio" name="txtgender" value="female"> Female
                </td> 
            </tr>
            <tr>
                    <td><label>Contact No. </label></td>
                    <td><input type="number" name="mobile"></td>
            </tr>   
            <tr>
                    <td><label>Date of Birth</label></td>
                    <td><input type="date" name="dob"></td>
            </tr>
        
            <tr>
                <td></td>
                <td><input type="submit" name="btnreg" value="Sign Up" style="color: white; background-color: red; padding-left: 5px;padding-right: 5px;"></td>
                </tr>  
         <?php echo $msg; ?>
        </table>
            
        </form>
        </div>
         <?php include './footer.php';?>
    </body>
</html>