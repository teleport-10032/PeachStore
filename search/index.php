<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>在Peach Store搜索</title>
    <link rel="Shortcut Icon" href="../assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../assets/css/search.css">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script  src="/public/nav.js"></script>
</head>
<body>
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

    <!--    搜索-->
    <div style="width: 100%;height: 400px;display: flex">
        <!--        左右2 5 2-->
        <div style="flex:2"></div>
        <div style="flex:5;display: flex;flex-direction: column">
            <!--            上下2 5-->
            <div style="flex:2;text-align: center;padding-top: 50px">
                <span style="font-size: 40px">
                    在Peach Store搜索
                </span>
            </div>
            <div style="flex:5">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" >
                        <i class="glyphicon glyphicon-search" ></i>
                    </span>
                    <input name="key" id="key" autofocus="autofocus"
                           type="text" class="form-control" placeholder="搜索商品"
                           style="font-size: 15px" onkeydown="onKeyDown(event)">
                </div>
            </div>
        </div>
        <div style="flex:2"></div>
        <!--        左右2 5 2-->
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

<script type="text/javascript">
    function onKeyDown(event) {
        var e = event || window.event || arguments.callee.caller.arguments[0];
        var key = document.getElementById("key").value;
        if (e && e.keyCode == 13) {
            window.location.href="result/index.php?key="+key;
        }
    }
</script>

</html>