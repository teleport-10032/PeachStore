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
    <title>PeachStore - user</title>
</head>
<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="#">PeachStore</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li >
                            <a href="../goods">商品管理</a>
                        </li>
                        <li class="active">
                            <a href="../user">用户管理</a>
                        </li>
                        <li>
                            <a href="../order">订单管理</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <!--            表格-->
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>
                        用户编号
                    </th>
                    <th>
                        用户名
                    </th>
                    <th>
                        用户类型
                    </th>
                    <th>
                        创建时间
                    </th>
                    <th>
                        操作
                    </th>
                </tr>
                </thead>
                <tbody>

                <?php
                include '../../fun/conn.php';
                $conn = new mysqli($servername, $dbusername, $dbpasswd, $dbname);
                if (!$conn) {
                    exit("连接失败: " . $conn->connect_error);
                }
                $conn->query("set names 'utf8'");
                $str = "select id,username,permission,time from user order by time";
                $result = $conn->query($str);
                while (list($id,$name,$permission,$time) = $result->fetch_row())
                {
                    echo
                    " <tr onclick=\"location.href='edit?id=$id';\">
                    <td>
                        $id
                    </td>
                    <td>
                        $name
                    </td>
                    <td>
                        $permission
                    </td>
                    <td>
                        $time
                    </td>
                    <td>
                        <a href='delete.php?id=$id' class='noline'>删除</a>
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
</body>
</html>