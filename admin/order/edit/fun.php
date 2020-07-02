<?php
session_start();
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
}
if(isset($_POST["content"]))
    $content = $_POST["content"];
if(isset($_POST["address"]))
    $address = $_POST["address"];
if(isset($_POST["price"]))
    $price = $_POST["price"];
if(isset($_POST["phone"]))
    $phone = $_POST["phone"];
include "../../../fun/conn.php";

//echo "<script>alert('$price')</script>";

$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn) {
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");

$str = "select id from task order by id desc limit 1";
$result = $conn->query($str);
while (list($maxnn) = $result->fetch_row())
{
    $maxn = $maxnn;
}

$sql = "insert into task(user,content,price,target,statu,time,phone) values('$username','$content','$price','$address','未付款',now(),'$phone')";
if (mysqli_query($conn, $sql))
{
    $sql2 = "update user set bag='' where username='$username'";
    mysqli_query($conn, $sql2);
    echo "<script>window.location.href='/fun/alipay?id=$maxn'</script>";
}
else {
//    echo $conn->error;
//    echo "<script>alert('保存失败');</script>";
}
$conn->close();

?>

