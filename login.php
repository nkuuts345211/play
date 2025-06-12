<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <div align="center" class="top">Login</div>
    <nav align="center" class="href"><a href="index.php">index</a> | <a href="add.php">adduser</a> | <a href="about.php">about</a></nav>
    <div class="main" align="center">
    <form action="login2.php" method="get">
        帳號<input type="text" name="acc" required autocomplete="off"><br>
        密碼<input type="password" name="pass" required autocomplete="off"><br>
        <input type="submit" value="送出">
    </form>
</div>
</body>
</html>