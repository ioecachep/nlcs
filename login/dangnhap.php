<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập</title>
    <style>
        * {
            margin: 0 auto;
        }
        body {font-family: Arial, Helvetica, sans-serif;}
        form {
            width: 30%;
            border: 3px solid #f1f1f1;
            padding: 10px;
            text-align: left;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <center>
    <br>
    <h1>Đăng nhập</h1>
    <br>
    <form action="./../action/action-login.php" method="post">
        <center><img src="./../img/login.png" alt=""></center>
        <br>
        <br>
        <label>Tài Khoản:</label>
        <input type="text" name="user">
        <label>Mật khẩu:</label>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
    </center>
    <?php
        
    ?>
</body>
</html>