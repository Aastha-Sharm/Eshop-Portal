<?php
    $productid = $_GET['pid'];
    $ptype= $_GET['type'];
    if(isset($_COOKIE['cart']))
    {
        $data = $_COOKIE['cart'];
        if(strpos($data,$productid)==-1){
        $data = $data.",".$productid;
        setcookie("cart",$data);
        }
    }
    else{
        setcookie("cart",$productid);
    }
    if($ptype=="Mobile")
        header("location:mdesc.php?pid=$productid");
    else
        header("location:tdesc.php?pid=$productid");
?>