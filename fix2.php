<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <?php
    include "db.php";
    $id=$_GET["id"];
    $sql="SELECT * FROM `user` WHERE `id`=$id";
    $res=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($res)){
        echo "<div class='top' align='center'>編輯 ".$row["name"]." 權限</div>";
        echo "<nav class='href' align='center'><a href='index.php'>首頁</a> | <a href='fix.php'>返回</a> | <a href='about.php'>關於</a></nav>";
        echo "<form action='fix3.php' method='get'>";
        echo "<table align='center' class='main'>";
        echo "<tr><td>目前帳號</td><td>".$row["account"]. "(".$row["name"].")"."</td></tr>";
        echo "<tr><td>目前權限</td><td>".$row["type"]."</td></tr>";
        echo "<tr><td>可修改權限</td><td><select name='type2'><option value='a'>管理員</option><option value='u'>使用者</option></select></td></tr>";
        echo "<tr><td colspan='2'><input type='submit' value='送出'></td></tr>";
        echo "</table>";
        echo "<input type='hidden' name='id' value='".$id."'>";
        echo "</form>";
    }
    ?>
</body>
</html>