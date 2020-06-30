<?php
if(isset($_GET["id"]))
    $id = $_GET["id"];


include "../../fun/conn.php";
$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn) {
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");
$sql = "delete from goods where id='$id'";
if (mysqli_query($conn, $sql))
{
    echo "<script>url=\"/admin/goods\";window.location.href=url;</script>";
}
else {
    echo "<script>alert('删除失败');</script>";
    echo "<script>url=\"/admin/goods/\";window.location.href=url;</script>";
}
$conn->close();
