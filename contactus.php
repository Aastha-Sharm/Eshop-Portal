<?php
session_start();
  $msg = "";
    if(isset($_POST['btnreg'])){
        $name = $_POST['txtname'];
        $mail = $_POST['txtemail'];
        $contact = $_POST['txtcontact'];
        $qf = $_POST['txtquery'];
         include './dbinfo.php';
        $conn= mysqli_connect(hostname,username,password,dbname);
        $qry="insert into contactus(name,email,phoneno,message,date) values('$name','$mail','$contact','$qf',curdate());";
      mysqli_query($conn, $qry);
      if(mysqli_affected_rows($conn)>0)
          $msg="Query added successful";
      else {
          $msg="Query adding unsuccessful";    
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
            <div>
                <form method="post">
                    <table style="align-content: center; border:black;margin-top: 150px;margin-left: 200px;margin-right: 140px; border-width: 2px; height: 75px; border-style: solid; box-shadow: 5px 5px 5px  white; border-radius: 5px;">
                        <caption style="font-weight: bold;">Query/Feedback</caption>
                        
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
            <td><label>Contact No. </label></td>
            <td><input type="number" name="txtcontact"></td>
            </tr>
            <tr>
                <td> <label>Query/Feedback</label></td>
                <td> <textarea cols="21" rows="10" style="border-radius: 5px;" name="txtquery"></textarea></td>
                 </tr>
            <tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="Submit" name="btnreg" style="color: white; background-color: red; padding-left: 5px;padding-right: 5px;"></td>
                </tr>  
            </table>
                    <?php echo "$msg";?>
            </form>
            </div>
            
            
            <hr style="margin-left: 80px;">
            <div>
                <h4 style="margin-top: 50px;margin-left: 100px;">Company Address:</h4>
                <p style="margin-top: 10px;margin-left: 100px;">Thapar Institute of Engineering and Technology,Bhadson Rd,<br> Adarsh Nagar, Prem Nagar, Patiala, Punjab 147004</p>
                <h4 style="margin-top: 20px;margin-left: 100px;">Location</h4>
                <iframe style="margin-top: 10px;margin-left: 100px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.807201087331!2d76.36212627476392!3d30.35642880372312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391028ab86533db5%3A0x93cc1f72eae1c9a8!2sThapar%20Institute%20of%20Engineering%20%26%20Technology%20(TIET)%2C%20Patiala!5e0!3m2!1sen!2sin!4v1688301908702!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
        </div>
         <?php include './footer.php';?>
    </body>
</html>