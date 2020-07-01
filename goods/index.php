<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>在Peach Store搜索</title>
    <link rel="Shortcut Icon" href="/assets/ico/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/search.css">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/public/nav.js"></script>
</head>
<body>

<?php
include '../fun/conn.php';
$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn) {
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");
if (isset($_GET["id"]))
    $id = $_GET["id"];

$str = "select id,name,type,pic,package,description from goods where id=$id";
$result = $conn->query($str);
while (list($idd, $namee, $typee, $picc, $packagee, $descriptionn) = $result->fetch_row()) {
    $id = $idd;
    $name = $namee;
    $type = $typee;
    $pic = $picc;
    $package = $packagee;
    $description = $descriptionn;
    $package_array = explode(";", $package);
    $len = count($package_array);
    $minn = 99999999;
    for ($i = 1; $i <= $len; $i += 2)
        if ($minn > $package_array[$i])
            $minn = $package_array[$i];

}
?>
<div class="container_1">

    <!--        导航栏-->
    <div style="width: 100%;height: 43px;padding: 0;margin: 0;top: 0;">
        <!--            第二行-->
        <div id="nav" style="width: 100%;height: 84px;padding: 0;margin: 0;top: 0;">

            <?php
            include '../public/nav.php';
            ?>
        </div>
        <!--            第二行-->
    </div>
    <!--        导航栏结束-->

    <!--    上方-->
    <div style="height: 27px;display: flex">
        <!--        左右-->
        <div style="flex: 1"></div>
        <div style="flex: 1;font-size: 23px;padding-top: 17px">
            <strong><?php echo $name ?></strong>
        </div>
        <div style="flex: 5"></div>
        <!--        <div style="flex: 3;font-size: 15px;padding-top: 10px">-->
        <!--            折抵换购，仅 RMB 90/月 (0% 费率 24 个月分期) 或RMB 2149 起*-->
        <!--        </div>-->
        <div style="flex: 1"></div>
    </div>
    <!--    上方-->
    <div style="height: 1px;background: #c4c4c4;margin-top:36px "></div>

    <!--    中间-->
    <div style="display: flex;height: 400px">
        <!--        左右-->
        <div style="flex: 2"></div>
        <div style="flex: 4;padding-top: 60px">
            <img width="300" height="230" style="overflow:hidden" src="<?php echo $pic ?>">

        </div>

        <div style="flex: 2"></div>
        <div style="flex: 5;display: flex;flex-direction: column">
            <!--            上下-->
            <div style="flex: 5"></div>
            <div style="flex: 3">
                <span style="font-size: 30px;line-height: 15px;">
                    <strong>购买 <?php echo $name ?></strong>
                    <br>
                    <span style="font-size: 15px">RMB <?php echo $minn ?> 起</span>
                </span>
            </div>
            <div style="flex:1"></div>
            <div style="flex: 3">


                <form role="form" action="/bag/join_bag.php" method="post">
                    <input name="goods" value="<?php echo $id?>" type="hidden">
                    <div class="form-group">
                        <label for="name">选择套餐</label>
                        <select class="form-control" name="package_">
                            <?php

                            for ($i = 0; $i < $len; $i += 2) {
                                $j = $i + 1;
                                $val = "$i".";".$package_array[$j];
                                echo "<option value='$val'>$package_array[$i] RMB $package_array[$j]</option>";
                            }

                            ?>
                        </select>
                    </div>
                    <div style="height: 40px"></div>
                    <div class="form-group" style="text-align: center">
                        <button type="submit" class="btn btn-default" style="width: 200px">
                            添加到购物袋
                        </button>
                    </div>
                </form>

                <br>
            </div>
            <div style="flex: 3;"></div>
        </div>
        <div style="flex: 2"></div>
    </div>
    <!--    中间-->


    <!--        白条-->
    <div style="width: 100%;height: 40px;background: white"></div>
    <!--        白条-->
    <!--        最下边灰白色-->
    <div style="width: 100%;height: 390px;background: #f2f2f5;display: flex">
        <!--            左中右三列-->
        <div style="flex:2;"></div>
        <div style="flex:15;font-size: 10px;display: flex;flex-direction: column">

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