<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peach (中国大陆) - 官方网站</title>
    <link rel="Shortcut Icon" href="assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <script  src="/public/nav.js"></script>
</head>
<body>
<div class="container_1">
    <!--        导航栏-->
    <div style="width: 100%;height: 84px;padding: 0;margin: 0;top: 0;">
        <!--            第一行-->
        <div style="width: 100%;height: 47%;background: #444444;display: flex;">
            <div style="flex: 115;"></div>
            <div style="flex: 5;padding-top: 9px">
                <a href="#" style="text-decoration: none;font-size: 11px;color: #adadaf;">
                    <广告>
                </a>
            </div>
            <div style="flex: 15;"></div>
        </div>
        <!--            第一行-->
        <!--            第二行-->
        <div id="nav" style="width: 100%;height: 84px;padding: 0;margin: 0;top: 0;">

            <?php
            include '../public/nav.php';
            ?>
        </div>
        <!--            第二行-->
    </div>
    <!--        导航栏结束-->
    <!--        白色条-->
    <div style="width: 100%;height: 33px;background: #ffffff;font-family: Myriad_set;">
        <p style="text-align: center;font-size: 12px;padding-top: 3px">
            <a href="#" style="color: #1069c9;text-decoration:none">在线选购</a>，享受免费送货、Specialist 专家支持、免息分期等服务。
        </p>
    </div>
    <!--        白色条结束-->
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


//echo $content."<br>";
//echo $address."<br>";
//echo $price."<br>";
//echo $phone."<br>";


include "../fun/conn.php";
$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn) {
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");
$sql = "insert into task(user,content,price,target,statu,time,phone) values('$username','$content','$price','$address','未付款',now(),'$phone')";
if (mysqli_query($conn, $sql))
{
    $sql2 = "update user set bag='' where username='$username'";mysqli_query($conn, $sql2);

    echo "<script>url='/fun/alipay';window.location.href=url;</script>";
}
else {
    echo $conn->error;
    echo "<script>alert('保存失败');</script>";
//    echo "<script>url=\"/bag\";window.location.href=url;</script>";
}
$conn->close();
?>



            <!--                五列-->
            <div style="flex:6;display: flex;">
                <script>
                    bottom_print();
                </script>
            </div>
            <br>
            <div style="width: 100%;height: 10px;font-size: 12px;color: #77777a;">
                更多选购方式：查找你附近的 Apple Store 零售店及更多门店，或者致电 400-666-8800
            </div>
            <br>
            <!--                分割线-->
            <div style="width:100%;height:1px;background: #cbcacd;"></div>
            <!--                分割线-->
            <p style="width: 100%;color: #8f8f8f;">
                Copyright © 2020 Peach Inc. 保留所有权利。
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="color: #7b7b7b">
                        隐私政策 | 使用条款 | 销售政策 | 法律信息 | 网站地图
                    </span>
            </p>
            <span style="color: #7b7b7b;line-height: 12px">
                    京ICP备1021xxxx 营业执照 无线电发射设备销售备案编号112019xxxxxxxx
                </span>
            <!--                五列-->
            <div style="flex:3"></div>
        </div>
        <div style="flex:2;"></div>
    </div>
    <!--        最下边灰白色结束-->
</div>
</body>
</html>
