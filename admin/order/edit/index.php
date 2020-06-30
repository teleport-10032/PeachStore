<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>PeachStore - 编辑订单</title>
</head>
<body>
<?php
include '../../../fun/conn.php';
$conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
if (!$conn) {
    exit("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");

if (isset($_GET['id'])) {
    $uid = $_GET['id'];
}
$str = "select id,user_id,goods_id,package,price,target,statu,time from task where id=$uid";
$result = $conn->query($str);
while (list($idd,$user_idd,$goods_idd,$packagee,$pricee,$targett,$statuu,$timee) = $result->fetch_row())
{
    $id = $idd;
    $user_id = $user_idd;
    $goods_id = $goods_idd;
    $package = $packagee;
    $price = $pricee;
    $target = $targett;
    $statu = $statuu;
    $time = $timee;
}

?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div style="height: 5px;"></div>
            <button type="button" class="btn btn-default" onclick="window.location.href='../'">返回</button>
            <div style="height: 5px;"></div>
            <form role="form" action="fun.php" method="post">
                <div class="form-group">
                    <label>
                        订单id
                    </label>
                    <input class="form-control" id="exampleInputEmail1"
                           style="width: 250px" value="<?php echo "$id"; ?>"
                           disabled/>
                    <input value="<?php echo "$id"; ?>" type="hidden" name="id">

                </div>
                <div class="form-group">
                    <label>
                        用户id
                    </label>
                    <input class="form-control" id="exampleInputEmail1"
                           style="width: 250px" value="<?php echo "$user_id"; ?>"
                           disabled/>
                    <input value="<?php echo "$user_id"; ?>" type="hidden" name="user_id">
                </div>
                <div class="form-group">
                    <label>
                        商品id
                    </label>
                    <input class="form-control" id="exampleInputEmail1"
                           style="width: 250px" value="<?php echo "$goods_id"; ?>" name="goods_id"
                           />
                </div>
                <div class="form-group">
                    <label>
                        套餐
                    </label>
                    <input class="form-control" id="exampleInputEmail1"
                           style="width: 500px" value="<?php echo "$package"; ?>" name="package"
                           />
                </div>
                <div class="form-group">
                    <label>
                        金额
                    </label>
                    <input class="form-control" id="exampleInputEmail1"
                           style="width: 250px" value="<?php echo "$price"; ?>" name="price"
                           />
                </div>

                <div class="form-group">
                    <label>
                        送货地址
                    </label>
                    <input class="form-control" id="exampleInputEmail1"
                           style="width: 500px" value="<?php echo "$target"; ?>" name="target"
                           />
                </div>
                <div class="form-group">
                    <label>
                        订单状态
                    </label>
                    <input class="form-control" id="exampleInputEmail1" name="statu"
                           style="width: 250px" value="<?php echo "$statu"; ?>"
                    />
                </div>

                <div class="form-group">
                    <label>
                        下单时间
                    </label>
                    <input class="form-control" id="exampleInputEmail1"
                           style="width: 250px" value="<?php echo "$time"; ?>"
                           disabled/>
                    <input  value="<?php echo "$time"; ?>" type="hidden" name="time"
                </div>

                <div style="height: 10px"></div>
                <button type="submit" class="btn btn-default">保存</button>
            </form>


            <div style="height: 30px"></div>

        </div>
    </div>
</div>



</body>
</html>
