<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>结账 - Peach (中国大陆)</title>
    <link rel="Shortcut Icon" href="/assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bag.css">
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
            <script>
                nav_print();
            </script>
        </div>
        <!--            第二行-->
    </div>
    <!--        导航栏结束-->

    <!--    结算-->
    <div style="display: flex;">
        <div style="flex: 1"></div>
        <div style="flex: 8;height: 500px;flex-direction: column">

            <div style="flex: 2;">
                <span style="font-size: 20px;line-height: 40px">
                    结账
                </span>
                <div style="width: 100%;height: 1px;background: #d1d1d6"></div>
            </div>
            <div style="flex: 3;"></div>
            <div style="flex: 5;">
                <form role="form" style="padding-top: 50px;">
                    <div class="form-group">
                        <label for="exampleInputPassword1">订单编号</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" readonly
                               value="1"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">订单内容</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" readonly
                               value="iPhoneSE 64GB">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">送货地址</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">联系方式</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">支付方式</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" readonly
                        value="支付宝"/>
                    </div>
                    <div style="text-align: center;padding-top: 10px">
                        <button type="submit" class="btn btn-default" style="width: 100px">
                            结算
                        </button>
                    </div>
                </form>
            </div>
            <div style="flex: 1;"></div>
            <div style="flex: 1;"></div>

        </div>
        <div style="flex: 1"></div>
    </div>
    <!--    结算-->

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
            window.location.href="index.php?key="+key;
        }
    }
</script>
</html>