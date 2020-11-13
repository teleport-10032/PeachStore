<?php
session_start();

if(isset($_POST['package_']) && isset($_POST['goods']))
{

    if (isset($_SESSION['user'])) {
        $username = $_SESSION['user'];
    }
    $goods = $_POST['goods'];
    $package = $_POST['package_'];
    $package_array = explode(";", $package);
    include "../fun/conn.php";
    $conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
    if (!$conn) {
        exit("连接失败: " . $conn->connect_error);
    }
    $conn->query("set names 'utf8'");

//echo "<script>alert('$username')</script>";
    $str = "select bag from user where username='$username'";
    $result = $conn->query($str);
    while (list($bagg) = $result->fetch_row()) {
        $bag = $bagg;
        //套餐(1开始编号)
        $pack = $package_array[0] / 2 +1;
        if($bag == NULL || $bag == "")
            $bag_new = "$goods".";".$pack;
        else
            $bag_new = $bag.";"."$goods".";".$pack;

    }
}



//echo "<script>alert('$goods')</script>";
//echo "<script>alert('$package')</script>";
//echo "<script>alert('$username')</script>";


$sql = "update user set bag='$bag_new' where  username ='$username'";
if (mysqli_query($conn, $sql))
{

    echo "<script>window.location.href='/bag';</script>";
}
else {
    echo "<script>window.location.href='/';</script>";
}
$conn->close();



?>