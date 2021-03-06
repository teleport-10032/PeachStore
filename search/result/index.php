<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>在Peach Store搜索</title>
    <link rel="Shortcut Icon" href="/assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/assets/css/search.css">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script  src="/public/nav.js"></script>
</head>

<?php
if (isset($_GET['key'])) {
    $key = $_GET['key'];
}
?>
<body>
<div class="container_1">

    <!--        导航栏-->
    <div style="width: 100%;height: 43px;padding: 0;margin: 0;top: 0;">
        <!--            第二行-->
        <div id="nav" style="width: 100%;height: 84px;padding: 0;margin: 0;top: 0;">

            <?php
            include '../../public/nav.php';
            ?>
        </div>
        <!--            第二行-->
    </div>
    <!--        导航栏结束-->

    <!--    搜索-->
    <div style="width: 100%;height: auto;display: flex;flex-direction: column;">
    <!--        上下2 10-->
        <div style="flex: 2;display: flex">
        <!--            左右2 5 2-->
            <div style="flex:2;"></div>
            <div style="flex:5;">
                <!--            搜索-->
                <div style=";text-align: center;padding-top: 25px">
                    <div class="input-group input-group-lg">
                    <span class="input-group-addon" >
                        <i class="glyphicon glyphicon-search" ></i>
                    </span>
                        <input type="text" id="key"
                               class="form-control" value="<?php echo $key; ?>"
                               style="font-size: 15px" onkeydown="onKeyDown(event)">
                    </div>
                </div>
                <!--            搜索-->
            </div>
            <div style="flex:2;"></div>
        </div>
        <div style="flex: 10;display: flex;">
            <!--            左右-->
            <div style="flex: 1"></div>
            <div style="flex: 8;padding-top: 25px">
                <div style="width: 100%;height: 1px;background: #d1d1d6"></div>
                <!--                商品列表-->


                <?php
                include '../../fun/conn.php';
                $conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
                if (!$conn) {
                    exit("连接失败: " . $conn->connect_error);
                }
                $conn->query("set names 'utf8'");

                $str = "select id,name,type,pic,package,description from goods where name like '%$key%'";
                $result = $conn->query($str);
                while (list($idd,$namee,$typee,$picc,$packagee,$descriptionn) = $result->fetch_row())
                {
                    $id = $idd;
                    $name = $namee;
                    $type = $typee;
                    $pic = $picc;
                    $package = $packagee;
                    $description = $descriptionn;
                    $package_array = explode(";",$package);
                    $len = count($package_array);
                    $minn = 99999999;
                    for($i = 1 ; $i <= $len ; $i+=2)
                        if($minn > $package_array[$i])
                            $minn = $package_array[$i];
                    echo "<div class=\"goods\">
                    <!--    左右-->
                    <div style=\"flex: 2;padding-left: 20px;padding-top: 10px;background: '$pic'\">
                        <img src=\"$pic\" width=\"130px\" height=\"150px\">
                    </div>
                    <div style=\"flex: 8;display: flex;flex-direction: column\">
                        <!--上下-->
                        <div style=\"flex: 2;display: flex;\">
                            <!--    左右-->
                            <div style=\"flex:5;padding-top: 30px;padding-left: 50px;\">
                                <!--    左右-->
                                <div style=\"font-size: 26px;\">
                                    <a href='/goods?id=$id' 
                                    style='text-decoration: none;color: black'>$name</a>
                                </div>
                            </div>
                            <div style=\"flex:5;font-size: 26px;padding-top: 30px;text-align: right\">
                                RMB $minn 起
                            </div>
                        </div>
                        <div style=\"flex: 2\">
                            <div style=\"font-size: 13px;padding-left: 50px;line-height: 23px\">
                                $description
                            </div>
                        </div>
                    </div>
                </div>
                <div style=\"width: 100%;height: 1px;background: #d1d1d6\"></div>";
                }
                ?>



                <!--                商品列表-->
            </div>
            <div style="flex: 1"></div>
        </div>

    </div>
    <!--    搜索-->

    <!--        白条-->
    <div style="width: 100%;height: 30px;background: white"></div>
    <!--        白条-->
    <!--        最下边灰白色-->
    <div style="width: 100%;height: 390px;background: #f2f2f5;display: flex">
        <!--            左中右三列-->
        <div style="flex:2;"></div>
        <div style="flex:15;font-size: 10px;display: flex;flex-direction: column">
            <!--                五列-->
            <div style="flex:6;display: flex;">
                <div style="flex:2;color: #595959;display: flex">
                    <div style="flex: 3;text-align: left">
                        <br>
                        <p style="font-size: 12px;color: black">选购及了解</p>
                        <p>Mac</p>
                        <p>iPad</p>
                        <p>iPhone</p>
                        <p>Watch</p>
                        <p>AirPods</p>
                        <p>HomePod</p>
                        <p>iPod touch</p>
                        <p>Touch</p>
                        <p>App Store充值卡</p>
                    </div>
                </div>
                <div style="flex:2;color: #595959;display: flex">
                    <div style="flex: 1;"></div>
                    <div style="flex: 3;text-align: left">
                        <br>
                        <p style="font-size: 12px;color: black">服务</p>
                        <p>Apple Music</p>
                        <p>iCloud</p>
                        <br>
                        <p style="font-size: 12px;color: black">账户</p>
                        <p>管理你的Apple ID</p>
                        <p>iCloud.com</p>
                    </div>
                </div>
                <div style="flex:2;color: #595959;display: flex">
                    <div style="flex: 1;"></div>
                    <div style="flex: 3;text-align: left">
                        <br>
                        <p style="font-size: 12px;color: black">Apple Store商店</p>
                        <p>查找零售店</p>
                        <p>在线选购</p>
                        <p>Genius Bar 天才吧</p>
                        <p>Apple夏令营</p>
                        <p>Apple Trade In 换购计划</p>
                        <p>分期付款</p>
                        <p>订单状态</p>
                        <p>选购帮助</p>
                    </div>
                </div>
                <div style="flex:2;color: #595959;display: flex">
                    <div style="flex: 1;"></div>
                    <div style="flex: 3;text-align: left">
                        <br>
                        <p style="font-size: 12px;color: black">商务应用</p>
                        <p>Apple与商务</p>
                        <p>商务选购</p>
                        <br>
                        <p style="font-size: 12px;color: black">教育应用</p>
                        <p>Apple与教育</p>
                        <p>高校师生选购</p>
                    </div>
                </div>
                <div style="flex:2;color: #595959;display: flex">
                    <div style="flex: 1;"></div>
                    <div style="flex: 3;text-align: left">
                        <br>
                        <p style="font-size: 12px;color: black">Apple 价值观</p>
                        <p>辅助功能</p>
                        <p>环境责任</p>
                        <p>隐私</p>
                        <p>供应商责任</p>
                        <br>
                        <p style="font-size: 12px;color: black">关于 Apple</p>
                        <p>Apple 管理层</p>
                        <p>创造就业</p>
                        <p>联系 Apple</p>
                    </div>
                </div>
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
<script type="text/javascript">
    function onKeyDown(event) {
        var e = event || window.event || arguments.callee.caller.arguments[0];
        var key = document.getElementById("key").value;
        if (e && e.keyCode == 13) {
            window.location.href="index.php?key="+key;
        }
    }
</script>
</html>