<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fix user</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <?php
    include "db.php";
    $id=$_GET["id"];
    $sql="SELECT * FROM `user` WHERE `id`=$id";
    $res=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($res)){
        echo "<div class='top' align='center'>Fix ".$row["name"]."</div>";
        echo "<nav class='href' align='center'><a href='index.php'>index</a> | <a href='fix.php'>back</a> | <a href='about.php'>about</a></nav>";
        echo "<form action='fix3.php' method='get'>";
        echo "<table align='center' class='main'>";
        echo "<tr><td>目前帳號</td><td>".$row["account"]. "(".$row["name"].")"."</td></tr>";
        echo "<tr><td>目前權限</td><td>".$row["type"]."</td></tr>";
        echo "<tr><td>可修改權限</td><td><select name='type2'><option value='a'>Admin</option><option value='u'>User</option></select></td></tr>";
        echo "<tr><td colspan='2'><input type='submit' value='submit'></td></tr>";
        echo "</table>";
        echo "<input type='hidden' name='id' value='".$id."'>";
        echo "</form>";
    }
    ?>
</body>
</html>