<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>iPad - Peach (中国大陆)</title>
    <link rel="Shortcut Icon" href="/assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/assets/css/mac.css">
    <script  src="/public/nav.js"></script>
</head>
<body>
<div class="container">
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
            <div style="flex:5;font-size: 35px;text-align: center">
                <p>
                    选购您的iPad和配件。
                </p>
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

                $str = "select id,name,type,pic,package,description from goods where type='iPad'";
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
                    <div style=\"flex: 2;padding-left: 20px;padding-top: 10px\">
                        <img src=\"$pic\" width=\"150px\" height=\"200px\">
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
    <div style="width: 100%;height: 690px;background: #f2f2f5;display: flex">
        <!--            左中右三列-->
        <div style="flex:2;"></div>
        <div style="flex:15;font-size: 10px;display: flex;flex-direction: column">
            <div style="flex:4">
                <p style="color:#868686;transform:scale(0.9);">
                    上述所示 iPad Pro 的分期付款金额仅为使用特定期数免息分期付款估算得出的示例 (仅显示整数数额，未显示小数点以后的金额)，实际支付金额以银行账单为准。最高可享 24 期免息分期，到 Apple Store 零售店和在线商店购买时可享受的免息分期期数和最低限额可能有所不同，银行和花呗提供的免息分期期数和最低限额可能有所不同。银行或花呗可能要求你的可用信用额度大于所购买产品的总金额，才能使用分期付款服务。有关信用卡或花呗分期服务的申请及使用问题，请与银行或花呗联系，Apple 对此不做任何承诺和保证。订单可能需要满足特定金额要求，如需了解更多免息分期付款信息，请点击此处。
                    <br><br>
                    1.折抵金额以状况良好的 12.9 英寸 iPad Pro (第三代) 1TB 机型计算得出。实际折抵金额取决于你用来折抵的 iPad 的状况和型号。年满 18 周岁及以上者才能享受此项折抵换购服务。该服务可能仅在部分 Apple Store 零售店提供，并且仅限于部分符合条件的设备。Apple 保留出于任何原因拒绝或限制任何设备 (及其数量) 的权利。现有设备的折抵金额可用于冲抵购买新的 Apple 设备。其他条款请参见 apple.com.cn/trade-in。
                    <br><br>
                    2.免费试用期结束后，每月收费 RMB 10。无需合约。当试用期结束后，会员方案将按月自动续订，直至取消订阅。
                    <br><br>
                    iCloud 在中国内地由云上贵州 (云上艾珀 (贵州) 技术有限公司) 运营。
                </p>
            </div>
            <!--                分割线-->
            <div style="width:100%;height:1px;background: #cbcacd;"></div>
            <!--                分割线-->
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