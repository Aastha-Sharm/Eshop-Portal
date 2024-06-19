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
  $msg = "";
    if(isset($_POST['btnreg'])){
        $id = $_POST['ppid'];
        $name = $_POST['ppname'];
        $type = $_POST['pptype'];
        $price = $_POST['pprice'];
        $path="";
        if($_FILES['ppimg']['error']==0 ){
            if($_FILES['ppimg']['type']=="image/jpg" || $_FILES['ppimg']['type']=="image/png" || $_FILES['ppimg']['type']=="image/jpeg"){
                $sou = $_FILES['ppimg']['tmp_name'];
$des = $_SERVER['DOCUMENT_ROOT']."/PhpProject2/product/".$_FILES['ppimg']['name'];
                if(move_uploaded_file($sou, $des)){
                    $path="product/".$_FILES['ppimg']['name'];
                    $con = mysqli_connect("localhost","root","","eshopdb");
                    $query = "insert into productmaster values($id,'$name',$price,'$type','$path')";
                    mysqli_query($con, $query);
                    if(mysqli_affected_rows($con)>0)
                       $msg= "Product Add Successfuly!!!!!";
                    else
                        $msg= "Product Not Added. Try Again.....";
                    mysqli_close($con);
                }
            else{
                $msg="Error in adding the product!!!!";
            }
            }
        }
        else{
            $msg= "File is Corrupted !!!!!";
        }
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
             
                <form method="post" enctype="multipart/form-data">
            <table style="align-content: center; border:black; border-width: 2px; height: 100px; border-style: solid; box-shadow: 5px 5px 5px  white; border-radius: 5px; margin-left: 450px;margin-top: 150px;">
                <caption style="font-weight: bold">Add New Product</caption>
               
            <tr>
                <td><br></td>
            </tr>
            <tr>
           <td> <label>Product Id</label></td>
           <td> <input type="number" name="ppid"></td>
            </tr>
            <tr>
            <td> <label>Product Name </label></td>
            <td><input type="text" name="ppname"></td>
            </tr>
            <tr>
            <td><label>Product Type</label></td>
            <td><select name="pptype"><option></option><option>Mobile</option><option>Tv</option></select></td>
            </tr>
            <tr>
                <td><label>Product Price</label></td>
                <td><input type="number" name="pprice"></td>
            </tr>
            <tr>
                <td><label>Product Image</label></td>
                <td><input type="file" name="ppimg" value="Choose File" ></td>
                   
                </td> 
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="btnreg" value="Add Product" style="color: white; background-color: red; padding-left: 5px;padding-right: 5px;"></td>
                </tr>  
                 </table>
            <?php echo "$msg"; ?>
        </form>
        </div>
        
            </div>
       
        <?php include './footer.php';?>
    </body>
</html>