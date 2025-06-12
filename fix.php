<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fix user</title>
    <link rel="stylesheet" href="/style/style.css">
    <style>
        table td{
            font-size: 24px;
            border: 1px solid black;
            background-color: lightgray;
            text-align: center;
        }
        input{
            font-size: 16px;
        }
    </style>
</head>
<body>
    <?php
    include "db.php";
    echo "<div align='center' class='top'>Admin</div>";
    echo "<nav align='center' class='href'><a href='index.php'>index</a> | <a href='logout.php'>logout</a> | <a href='about.php'>about</a></nav>";    
    echo "<form action='fix2.php' method='get'>";
    echo "<table align='center'>";
    echo "<tr><td>name</td><td>account</td><td>type</td><td>fix</td></tr>";
    $sql="SELECT * FROM `user` WHERE 1";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            if($_SESSION["acc"]!=$row["account"]){
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["account"]."</td>";
            echo "<td>".$row["type"]."</td>";
            echo "<td><input type='button' value='送出'  onclick=location.href='fix2.php?id=".$row['id']."'></td>";
            echo "</tr>";
        }
        }
    }
    echo "<table>";
    echo "</form>";
    ?>
</body>
</html>