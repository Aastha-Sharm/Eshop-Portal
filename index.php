<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            display: flex;
            flex-direction: column;
            background-color: rgb(255, 192, 236);
            
        }
        .header{
            display: flex;
            flex-direction: row;
            background-color: green;
            height: 20px;
            padding-top: 5px;
        }
        ul li{
            display: inline;
            text-align: center;
              }
        ul li a{
            color: white;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            padding: 2px 25px 2px 25px;
            height: 15px;
        }
        .nav{
            display: flex;
            flex-direction: column;
            background-color: black;
            height:20px;
            align-items: center;
            padding-bottom: 25px;
            
        }
        ul li a:hover{
            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 5px 30px 5px 30px;
            background-color: #805f2a;
            border-radius: 10px;
        }
        .hp{
            min-height: 530px;
            background-color: white;
        }
        .footer{
            background-color: black;
            color: white;
            text-align: center;
            height: 47px;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <ul>
            <li><a href="">About Us</a></li>
            <li><a href="">Privacy</a></li>
            <li><a href="">FAQ</a></li>
        </ul>
    </div>
    
    <div class="nav">
        <ul>
            <li style="color: yellow; font-weight: bolder; padding-right: 150px; font-size: 30px">e-Shop</li>
            <li><a href="" style="background-color: #d1870f;padding-top: 10px;padding-bottom: 10px">Home</a></li>
            <li><a href="">Laptop</a></li>
            <li><a href="">Mobile</a></li>
            <li><a href="">Sign In</a></li>
            <li><a href="">Sign Up</a></li>
            <li><a href="">Cart</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Admin</a></li>
        </ul>
    </div>
    <div class="hp">home Page</div>
    <div class="footer">&copy;Rights Reserved by Aastha Sharma</div>
</body>
</html>