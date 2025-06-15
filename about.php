<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>關於</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <div class="top" align="center">關於</div>
    <?php
    include "db.php"; 
    if(!isset($_SESSION["type"])){
    echo "<nav align='center' class='href'><a href='index.php'>首頁</a> | <a href='login.php'>登入</a> | <a href='add.php'>註冊</a></nav>";
    }elseif($_SESSION["type"]=="a"){
    echo "<nav align='center' class='href'><a href='index.php'>首頁</a> | <a href='logout.php'>登出</a></nav>";
    }else{
    echo "<nav align='center' class='href'><a href='index.php'>首頁</a> | <a href='logout.php'>登出</a></nav>";

    }
    ?>
    <div class="main" align="center"><h1>製作人</h1><br><h2>鄧益汯</h2></div>
   </body>
</html>