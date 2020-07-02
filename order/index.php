<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单 - Peach (中国大陆)</title>
    <link rel="Shortcut Icon" href="/assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bag.css">
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
    <div style="height: 30px"></div>

    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <!--            表格-->
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>
                            订单编号
                        </th>
                        <th>
                            客户
                        </th>
                        <th>
                            订单内容
                        </th>
                        <th>
                            金额
                        </th>
                        <th>
                            联系方式
                        </th>
                        <th>
                            状态
                        </th>
                        <th>
                            下单时间
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    include '../fun/conn.php';
                    $conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
                    if (!$conn) {
                        exit("连接失败: " . $conn->connect_error);
                    }
                    $conn->query("set names 'utf8'");
                    $str = "select id,user,content,price,statu,time,phone from task order by time desc";
                    $result = $conn->query($str);
                    while (list($id,$user_id,$content,$price,$statu,$time,$phone) = $result->fetch_row())
                    {
                        echo
                        " <tr>
                    <td>
                        $id
                    </td>
                    <td>
                        $user_id
                    </td>
                    <td>
                        $content
                    </td>
                    <td>
                        $price
                    </td>
                    <td>
                        $phone
                    </td>
                    <td>
                        $statu
                    </td>
                    <td>
                        $time
                    </td>
                    <td>
                        <a href='cancel.php?id=$id' class='noline' >取消</a>
                    </td>
                </tr>";
                    }
                    ?>


                    </tbody>
                </table>
                <!--            表格-->
            </div>
        </div>
    </div>

</div>
</body>

<script>window.history.replaceState(null, null, window.location.href);</script>
</html>