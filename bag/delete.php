<?php
if(isset($_GET["goods"]))
    $goods = $_GET["goods"];
if(isset($_GET["package"]))
    $package = $_GET["package"];
session_start();
if(isset($_SESSION['user']))
{
    $username = $_SESSION['user'];
}

include "../fun/conn.php";
$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn) {
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");

$str = "select bag from user where username='$username'";
$result = $conn->query($str);
$str = $goods.";".$package;
while (list($bagg) = $result->fetch_row()) {
    $bag = $bagg;
    $pos = strpos($bag, $str);
    $len = strlen($str);
    $len2 = strlen($bag);
    // 10;3;11;2;18;2;10;1 查找10;1
    //pos=15 len=4
    //substr(0,pos-1).substr(pos+len,len2-1)
    //第0位则去掉前面的;
    echo "$pos"." "."$len"." ".$len2."<br>";
    echo $bag."<br>";
    echo $str."<br>";
    if($pos+$len == $len2 && $len != $len2)
        $new_bag = substr($bag,0,$pos-1);
    else if($len == $len2)
    {
        $new_bag = "";
    }
    else
    {
        $new_bag = substr($bag,0,$pos).substr($bag,$pos+$len+1,$len2-$pos-$len-1);
    }

    $conn->query("set names 'utf8'");
    $sql = "update user set bag='$new_bag' where username='$username'";
    if (mysqli_query($conn, $sql))
    {
        echo "<script>window.location.href='/bag';</script>";
    }
    else {
        //echo $conn->error;
        echo "<script>alert('保存失败');</script>";
        echo "<script>window.location.href='/bag';</script>";
    }


}