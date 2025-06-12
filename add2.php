<?php
include("db.php");
$acc=$_GET["acc"];
$pass=$_GET["pass"];
$pa=$_GET["pass2"];
$name=$_GET["name"];
$check="SELECT * FROM `user` WHERE `account`=$acc";
$check_res=mysqli_query($link,$check);
if(mysqli_num_rows($check_res)>0){
    echo "<script>alert('已有此帳號')</script>";
    echo "<script>location.href='/add/'</script>";
}else{
    if($pass==$pa){
    $sql="INSERT INTO `user`(`id`, `account`, `password`, `name`, `type`) VALUES (null,'$acc','$pass','$name','u')";
    mysqli_query($link,$sql);
    echo "<script>alert('註冊成功，請重新登入')</script>";
    echo "<script>location.href='/login/'</script>";
    }else{
    echo "<script>alert('密碼錯誤')</script>";
    echo "<script>location.href='/add/'</script>";
    }
}
?>