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
    <title>PeachStore - 编辑商品</title>
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
$str = "select id,name,type,pic,package,description from goods where id=$uid order by time desc limit 1";
$result = $conn->query($str);
while (list($idd,$namee,$typee,$picc,$packagee,$descriptionn) = $result->fetch_row())
{
    $id = $idd;
    $name = $namee;
    $type = $typee;
    $pic = $picc;
    $package = $packagee;
    $description = $descriptionn;
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
                        商品id
                    </label>
                    <input class="form-control" id="exampleInputEmail1"
                           style="width: 250px" value="<?php echo "$id"; ?>"
                           disabled/>
                </div>
                <input name="id" value="<?php echo "$id";?>" type="hidden">
                <div class="form-group">
                    <label>
                        商品名称
                    </label>
                    <input class="form-control" id="exampleInputEmail1" name="name"
                           style="width: 250px" value="<?php echo "$name"; ?>"
                    />
                </div>

                <div class="form-group" style="width: 250px">
                    <label>商品类型</label>
                    <select class="form-control" name="type">
                        <?php
                        if($type == "mac")
                        {
                            echo "
                        <option value=\"mac\" selected='selected'>Mac</option>
                        <option value=\"ipad\">iPad</option>
                        <option value=\"iphone\">iPhone</option>
                        <option value=\"watch\">Watch</option>
                        <option value=\"music\">Music</option>
                        <option value=\"other\">Other</option>
                        ";
                        }
                        if($type == "ipad")
                        {
                            echo "
                        <option value=\"mac\">Mac</option>
                        <option value=\"ipad\"  selected='selected'>iPad</option>
                        <option value=\"iphone\">iPhone</option>
                        <option value=\"watch\">Watch</option>
                        <option value=\"music\">Music</option>
                        <option value=\"other\">Other</option>
                        ";
                        }
                        if($type == "iphone")
                        {
                            echo "
                        <option value=\"mac\">Mac</option>
                        <option value=\"ipad\">iPad</option>
                        <option value=\"iphone\"  selected='selected'>iPhone</option>
                        <option value=\"watch\">Watch</option>
                        <option value=\"music\">Music</option>
                        <option value=\"other\">Other</option>
                        ";
                        }
                        if($type == "watch")
                        {
                            echo "
                        <option value=\"mac\">Mac</option>
                        <option value=\"ipad\">iPad</option>
                        <option value=\"iphone\">iPhone</option>
                        <option value=\"watch\" selected='selected'>Watch</option>
                        <option value=\"music\">Music</option>
                        <option value=\"other\">Other</option>                  
                        ";
                        }
                        if($type == "music")
                        {
                            echo "
                        <option value=\"mac\">Mac</option>
                        <option value=\"ipad\">iPad</option>
                        <option value=\"iphone\">iPhone</option>
                        <option value=\"watch\">Watch</option>
                        <option value=\"music\" selected='selected'>Music</option>
                        <option value=\"other\">Other</option>
                        ";
                        }
                        if($type == "other")
                        {
                            echo "
                        <option value=\"mac\">Mac</option>
                        <option value=\"ipad\">iPad</option>
                        <option value=\"iphone\">iPhone</option>
                        <option value=\"watch\">Watch</option>
                        <option value=\"music\">Music</option>
                        <option value=\"other\" selected='selected'>Other</option>";
                        }

                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>商品描述</label>
                    <textarea class="form-control" rows="5" name="description"
                              style="resize: none;" id="des"
                    ><?php echo "$description"; ?></textarea>
                </div>

                <div class="form-group">

                    <label>
                        商品套餐情况(套餐与价格使用";"分割,例如 "64GB,1999,128GB,2599")
                    </label>

                    <textarea class="form-control" rows="5" name="package"
                              style="resize: none;" id="des"  autocomplete="off"
                    ><?php echo "$package"?></textarea>

                </div>
                <button type="submit" class="btn btn-default">保存</button>
            </form>

            <div style="height: 20px;"></div>

            <form role="form" action="fun_img.php?id=<?php echo "$id"; ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="exampleInputFile">商品图片</label><br>
                    <img src="<?php echo "$pic" ;?>" width="170px" height="200px">
                    <div style="height: 5px;"></div>
                    <input type="file" name="file" accept="image/jpeg,image/png"/ >
                </div>
                <button type="submit" class="btn btn-default">保存</button>
            </form>
            <div style="height: 30px"></div>

        </div>
    </div>
</div>


</body>
</html>
