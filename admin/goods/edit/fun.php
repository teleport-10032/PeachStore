<?php
if(isset($_POST["id"]))
    $id = $_POST["id"];
if(isset($_POST["name"]))
    $name = $_POST["name"];
if(isset($_POST["type"]))
    $type = $_POST["type"];
if(isset($_POST["package"]))
    $package = $_POST["package"];
if(isset($_POST["description"]))
    $description = $_POST["description"];


include "../../../fun/conn.php";
$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn) {
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");
$sql = "update goods set name='$name',type='$type',package='$package',description='$description' where id='$id'";
if (mysqli_query($conn, $sql))
{
    echo "<script>url=\"/admin/goods/edit/?id=$id\";window.location.href=url;</script>";
}
else {
    //echo $conn->error;
    echo "<script>alert('保存失败');</script>";
    echo "<script>url=\"/admin/goods/edit/?id=$id\";window.location.href=url;</script>";
}
$conn->close();
