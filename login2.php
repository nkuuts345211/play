<?php
include("db.php");
$account=$_GET["acc"];
$password=$_GET["pass"];
$sql="SELECT * FROM `user` WHERE `account`='$account'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0){
    $sql="SELECT * FROM `user` WHERE `account`='$account' and `password`='$password'";
    $res=mysqli_query($link,$sql);
    
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $_SESSION["acc"]=$row["account"];
            $_SESSION["name"]=$row["name"];
            $_SESSION["type"]=$row["type"];
            $_SESSION["img"]=$row["img"];
            if($row['type']=="a"){
                header("location:index.php");
            }else{
                header("location:index.php");
            }
        }
    }else{
        echo "<script>alert('帳號密碼錯誤，請重新登入')</script>";
        echo "<script>location.href='login.php'</script>";

    }
}else{
    echo "<script>alert('帳號密碼錯誤，請重新登入')</script>";
    echo "<script>location.href='login.php'</script>";
}
?>