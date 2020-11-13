<?php
if(isset($_GET["id"]))
    $id = $_GET["id"];


$filename = "../../../assets/img/goods/" . $id.".jpg";

if (   ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/png")
    && ($_FILES["file"]["size"] < 50480000))
{

    if ($_FILES["file"]["error"] > 0)
    {
        echo "错误：" . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        if (file_exists($filename))
        {
            unlink($filename);
        }

        move_uploaded_file($_FILES["file"]["tmp_name"], $filename);
//        echo "<br>"."$filename";
        include "../../../fun/conn.php";
        $conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
        if (!$conn) {
            exit("连接失败: " . $conn->connect_error);
        }
        $conn->query("set names 'utf8'");
        $sql = "update goods set pic='$filename' where id='$id'";
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
    }
}
