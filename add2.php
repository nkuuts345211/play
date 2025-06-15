<?php
include("db.php");
$acc=$_POST["acc"];
$pass=$_POST["pass"];
$pa=$_POST["pass2"];
$name=$_POST["name"];

$targetDir = "userimg/"; // 要儲存圖片的資料夾

// 確保資料夾存在
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

// 檢查是否為圖片
$check = getimagesize($_FILES["img"]["tmp_name"]);
if ($check === false) {
    echo "檔案不是圖片。";
    exit;
}

// 限制檔案大小 (最大 2MB)
if ($_FILES["img"]["size"] > 2000000) {
    echo "檔案太大。";
    exit;
}

// 檢查副檔名
$imageFileType = strtolower(pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION));
$allowedTypes = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowedTypes)) {
    echo "只允許 JPG, JPEG, PNG, GIF 格式。";
    exit;
}

$check="SELECT * FROM `user` WHERE `account`=$acc";
$check_res=mysqli_query($link,$check);
if(mysqli_num_rows($check_res)>0){
    echo "<script>alert('已有此帳號')</script>";
    echo "<script>location.href='/add/'</script>";
}else{
    if($pass==$pa){
//  建立不重複檔名（時間戳 + 隨機數）
$uniqueName = date("YmdHis") . '_' . rand(1000, 9999) . '.' . $imageFileType;
$targetFile = $targetDir . $uniqueName;
// 嘗試移動檔案
if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
} else {
    echo "檔案上傳失敗。";
}
$sql="INSERT INTO `user`(`id`, `account`, `password`, `name`, `img`, `type`) VALUES (null,'$acc','$pass','$name', '$uniqueName' ,'u')";
mysqli_query($link,$sql);
echo "<script>alert('註冊成功，請重新登入')</script>";
echo "<script>location.href='login.php'</script>";
}else{
echo "<script>alert('密碼錯誤')</script>";
echo "<script>location.href='add.php'</script>";
}
}

?>