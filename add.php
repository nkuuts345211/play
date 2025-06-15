<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊</title>
</head>
<link rel="stylesheet" href="/style/style.css">
<body>
    <div align="center" class="top">註冊</div>
    <nav align="center" class="href"><a href="index.php">首頁</a> | <a href="login.php">登入</a> | <a href="about.php">關於</a></nav>
        <form action="add2.php" method="post" enctype="multipart/form-data">
            <table align="center">
            <tr><td>帳號</td><td><input type="text" name="acc" required autocomplete="off"></td><br></tr>
            <tr><td>密碼</td><td><input type="password" name="pass" required autocomplete="off"></td><br></tr>
            <tr><td>確認密碼</td><td><input type="password" name="pass2" required autocomplete="off"></td><br></tr>
            <tr><td>名稱</td><td><input type="text" name="name" required autocomplete="off"><br></td></tr>
            <tr><td>圖片</td><td><input type="file" name="img" accept="image/*" required><br></td></tr>
            <tr><td colspan="2"><input type="submit" value="送出"></td></tr>
        </table>
    </form>
</body>
</html>