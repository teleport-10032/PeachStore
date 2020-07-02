<?php

if(isset($_GET["id"]))
{
    $id = $_GET["id"];
}

include "../fun/conn.php";
$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn)
{
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");

$sql2 = "update task set statu='已取消' where id='$id'";
mysqli_query($conn, $sql2);

echo "<script>url='/order';window.location.href=url;</script>";