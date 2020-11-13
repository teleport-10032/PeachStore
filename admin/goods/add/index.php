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
    <title>PeachStore - 增加商品</title>
</head>
<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div style="height: 5px;"></div>
            <button type="button" class="btn btn-default" onclick="window.location.href='../'">返回</button>
            <div style="height: 5px;"></div>
            <form role="form" action="fun.php" method="post">
                <div class="form-group">
                    <label>
                        商品编号
                    </label>
                    <input class="form-control" id="exampleInputEmail1" name="id"
                    style="width: 250px" value="auto" disabled/>
                </div>
                <div class="form-group">
                    <label>
                        商品名称
                    </label>
                    <input class="form-control" id="exampleInputEmail1" name="name"
                    style="width: 250px"  autocomplete="off"
                    />
                </div>
                <div class="form-group">
                    <label>商品类型</label>
                    <select class="form-control" name="type">
                        <option value="mac" selected="selected">Mac</option>
                        <option value="ipad">iPad</option>
                        <option value="iphone">iPhone</option>
                        <option value="watch">Watch</option>
                        <option value="music">Music</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>商品描述</label>
                    <textarea class="form-control" rows="5" name="description"
                              style="resize: none;"
                    ></textarea>
                </div>

                <div class="form-group">

                    <label>
                        商品套餐情况(套餐与价格使用";"分割,例如 "64GB,1999,128GB,2599")
                    </label>
                    <input class="form-control" id="exampleInputEmail1" name="package"
                           autocomplete="off"/>
                </div>
                <button type="submit" class="btn btn-default">保存</button>
            </form>

            <div style="height: 30px"></div>
        </div>
    </div>
</div>

</body>
</html>