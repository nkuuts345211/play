<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include("db.php");?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <?php
    if(!isset($_SESSION["type"])){
        echo "<div align='center' class='top'>Hello</div>";
        echo "<nav align='center' class='href'><a href='login.php'>login</a> | <a href='add.php'>add user</a> | <a href='about'>about</a></nav>";
    }elseif($_SESSION["type"]=="a"){
      echo "<div align='center' class='top'>Admin</div>";
        echo "<nav align='center' class='href'><a href='logout.php'>logout</a> | <a href='about'>about</a></nav>";
    }else{
      echo "<div align='center' class='top'>Admin</div>";
        echo "<nav align='center' class='href'><a href='logout.php'>logout</a> | <a href='about'>about</a></nav>";    
    }
    ?>
    
</body>
</html>