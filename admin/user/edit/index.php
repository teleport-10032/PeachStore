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
    <title>PeachStore - 编辑用户</title>
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
$str = "select id,username,permission from user where id=$uid";
$result = $conn->query($str);
while (list($idd,$namee,$permissionn) = $result->fetch_row())
{
    $id = $idd;
    $name = $namee;
    $permission = $permissionn;
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
                        用户id
                    </label>
                    <input class="form-control" id="exampleInputEmail1"
                           style="width: 250px" value="<?php echo "$id"; ?>"
                           disabled/>
                </div>
                <input name="id" value="<?php echo "$id";?>" type="hidden">
                <div class="form-group" >
                    <label>
                        用户名
                    </label>
                    <input class="form-control" id="exampleInputEmail1" name="name"
                           style="width: 250px" value="<?php echo "$name"; ?>"
                    />
                </div>

                <div class="form-group" style="width: 250px">
                    <label>用户类型</label>
                    <select class="form-control" name="permission">
                        <?php
                        if($permission == "user")
                        {
                            echo "
                        <option value=\"user\" selected='selected'>user</option>
                        <option value=\"admin\">admin</option>
                        ";
                        }
                        else if($permission == "admin")
                        {
                            echo "
                        <option value=\"user\">user</option>
                        <option value=\"admin\"  selected='selected'>admin</option>
                        ";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>更改密码</label>
                    <input class="form-control" id="exampleInputEmail1" name="passwd"
                           style="width: 250px" />
                </div>
                <button type="submit" class="btn btn-default">保存</button>
            </form>

            <div style="height: 30px"></div>
        </div>
    </div>
</div>



</body>
</html>
