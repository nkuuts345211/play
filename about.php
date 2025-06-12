<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <div class="top" align="center">About</div>
    <?php
    include "db.php"; 
    if(!isset($_SESSION["type"])){
    echo "<nav align='center' class='href'><a href='index.php'>index</a> | <a href='login.php'>login</a> | <a href='add.php'>add user</a></nav>";
    }elseif($_SESSION["type"]=="a"){
    echo "<nav align='center' class='href'><a href='index.php'>index</a> | <a href='logout.php'>logout</a></nav>";
    }else{
    echo "<nav align='center' class='href'><a href='index.php'>index</a> | <a href='logout.php'>logout</a></nav>";

    }
    ?>
    <div class="main" align="center"><h1>製作人</h1><br><h2>鄧益汯</h2></div>
   </body>
</html>