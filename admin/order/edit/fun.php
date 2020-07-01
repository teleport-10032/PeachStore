<?php
if(isset($_POST["id"]))
    $id = $_POST["id"];
if(isset($_POST["content"]))
    $content = $_POST["content"];
if(isset($_POST["price"]))
    $price = $_POST["price"];
if(isset($_POST["target"]))
    $target = $_POST["target"];
if(isset($_POST["statu"]))
    $statu = $_POST["statu"];
if(isset($_POST["phone"]))
    $phone = $_POST["phone"];




include "../../../fun/conn.php";

$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn) {
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");

$md5 = md5(md5($passwd));
$sql = "update task set content='$content',price='$price',target='$target',
 statu='$statu',phone='$phone'
 where id='$id'";
if (mysqli_query($conn, $sql))
{
    echo "<script>url=\"/admin/order/edit/?id=$id\";window.location.href=url;</script>";
}
else {
    //echo $conn->error;
    echo "<script>alert('保存失败');</script>";
    echo "<script>url=\"/admin/order/edit/?id=$id\";window.location.href=url;</script>";
}
$conn->close();
