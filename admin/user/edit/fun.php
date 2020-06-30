<?php
if(isset($_POST["id"]))
    $id = $_POST["id"];
if(isset($_POST["name"]))
    $name = $_POST["name"];
if(isset($_POST["permission"]))
    $permission = $_POST["permission"];
if(isset($_POST["passwd"]))
    $passwd = $_POST["passwd"];

include "../../../fun/conn.php";

$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn) {
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");

$md5 = md5(md5($passwd));
$sql = "update user set username='$name',permission='$permission',passwd='$md5' where id='$id'";
if (mysqli_query($conn, $sql))
{
    echo "<script>url=\"/admin/user/edit/?id=$id\";window.location.href=url;</script>";
}
else {
    //echo $conn->error;
    echo "<script>alert('保存失败');</script>";
    echo "<script>url=\"/admin/user/edit/?id=$id\";window.location.href=url;</script>";
}
$conn->close();
