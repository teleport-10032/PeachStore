<?php
header("Content-Type: text/html;charset=utf-8");

if(isset($_POST["username"]))
    $username = $_POST["username"];
if(isset($_POST["passwd"]))
    $passwd = $_POST["passwd"];
if(isset($_POST["repasswd"]))
    $re_passwd = $_POST["repasswd"];


if ("$re_passwd" != "$passwd") {
    echo "<script>alert('请检查两次输入的密码是否一致');history.back();</script>";
} else {
    include '../conn.php';
    $conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);

    if (!$conn) {
        exit("连接失败: " . $conn->connect_error);
    }

    $sql = "select count(*) as amount from user";
    $result = $conn->query($sql);
    list($amount) = $result->fetch_row();
    $cnt = $amount;
    $cnt ++;

    $md5 = md5(md5($passwd));
    $sql = "INSERT INTO user (id,username,passwd,permission,time)
			VALUES ('$cnt','$username' ,'$md5','user',now())";
    if (mysqli_query($conn, $sql))
    {

        echo "<script>alert('注册成功!');</script>";
        echo "<script>url=\"/\";window.location.href=url;</script>";
    }
    else {
        //echo $conn->error;
        echo "<script>alert('该用户名已注册,可直接登录');</script>";
        echo "<script>url=\"/\";window.location.href=url;</script>";
    }
    $conn->close();
}
?>