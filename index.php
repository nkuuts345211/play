<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include("db.php");?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <?php
    if(!isset($_SESSION["type"])){
        echo "<div align='center' class='top'>歡迎</div>";
        echo "<nav align='center' class='href'><a href='login.php'>登入</a> | <a href='add.php'>註冊</a> | <a href='about.php'>關於</a></nav>";
    }elseif($_SESSION["type"]=="u"){
        
      echo "<div align='center' class='top'>歡迎 ".$_SESSION["name"]."<img src='userimg/".$_SESSION["img"]."'></div>";
        echo "<nav align='center' class='href'><a href='logout.php'>登出</a> | <a href='about.php'>關於</a></nav>";
    }else{
     echo "<div align='center' class='top'>歡迎 ".$_SESSION["name"]."<img src='userimg/".$_SESSION["img"]."'></div>";
         echo "<nav align='center' class='href'><a href='fix.php'>修改使用者</a> | <a href='logout.php'>登出</a> | <a href='about.php'>關於</a></nav>";    
    }
    ?>
    
</body>
</html>