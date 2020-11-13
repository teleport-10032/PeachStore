<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录 - Peach (中国大陆)</title>
    <link rel="Shortcut Icon" href="/assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/assets/css/login.css">
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
        <div id="nav" style="width: 100%;height: 84px;;padding: 0;margin: 0;top: 0;">

            <!--            第二行-->
            <div style="width: 100%;height: 53%;background: black;display: flex;">
                <div style="flex: 170;"></div>
                <a style="flex: 40; padding-top:10px" href="/">
                    <img src="/assets/img/index/apple.png" width="21px" height="21px"/>
                </a>
                <div style="flex: 100;"></div>
                <div class="top21">
                    <a href="/mac" class="top22"
                       onmouseout="this.className='top22_jianbian2'"
                       onmouseover="this.className='top22_jianbian1'"
                    >Mac</a>
                </div>
                <div style="flex: 80;"></div>
                <div class="top21">
                    <a href="/ipad" class="top22"
                       onmouseout="this.className='top22_jianbian2'"
                       onmouseover="this.className='top22_jianbian1'"
                    >iPad</a>
                </div>
                <div style="flex: 80;"></div>
                <div class="top21">
                    <a href="/iphone" class="top22"
                       onmouseout="this.className='top22_jianbian2'"
                       onmouseover="this.className='top22_jianbian1'"
                    >iPhone</a>
                </div>
                <div style="flex: 80;"></div>
                <div class="top21">
                    <a href="/watch" class="top22"
                       onmouseout="this.className='top22_jianbian2'"
                       onmouseover="this.className='top22_jianbian1'"
                    >Watch</a>
                </div>
                <div style="flex: 80;"></div>
                <div class="top21">
                    <a href="/music" class="top22"
                       onmouseout="this.className='top22_jianbian2'"
                       onmouseover="this.className='top22_jianbian1'"
                    >Music</a>
                </div>
                <div style="flex: 80;"></div>
                <div class="top21_chinese">
                    <a href="/support" class="top22_chinese"
                       onmouseout="this.className='top22_chinese_jianbian2'"
                       onmouseover="this.className='top22_chinese_jianbian1'"
                    >技术支持</a>
                </div>
                <div style="flex: 50;"></div>
                <div style="flex: 100;">
                    <a href="/search">
                        <img src="/assets/img/index/search.svg" width="90px" height="90px">
                    </a>
                </div>
                <div style="flex:20;"></div>
                <div style="flex: 100;">
                    <a href="/bag">
                        <img src="/assets/img/index/shop.svg" width="45px" height="45px" style="padding-top: 2px">
                    </a>
                </div>
                <div style="flex: 250;color: #adadad;text-align: right;padding-top: 14px;">
                    <?php
                    if($flag == 1)
                    {
                        echo "
                             <span style=\"padding-right: 50px;\">
                            <a href=\"/fun/login\" class=\"top22\"
                               onmouseout=\"this.className='top22_jianbian2'\"
                               onmouseover=\"this.className='top22_jianbian1'\"
                               title='查看订单'
                            >$username</a>
                            &nbsp;
                           <a href=\"/admin\" class=\"top22_chinese\"
                               onmouseout=\"this.className='top22_chinese_jianbian2'\"
                               onmouseover=\"this.className='top22_chinese_jianbian1'\"
                            >管理</a>
                            &nbsp;
                            <a href=\"/fun/logout/index.php\" class=\"top22_chinese\"
                               onmouseout=\"this.className='top22_chinese_jianbian2'\"
                               onmouseover=\"this.className='top22_chinese_jianbian1'\"
                            >登出</a>
                        </span>
                            ";
                    }
                    else if($flag == 2)
                    {

                        echo "
                             <span style=\"padding-right: 50px;\">
                            <a href=\"/fun/login\" class=\"top22\"
                               onmouseout=\"this.className='top22_jianbian2'\"
                               onmouseover=\"this.className='top22_jianbian1'\"
                               title='查看订单'
                            >$username</a>
                            &nbsp;
                            <a href=\"/fun/logout/index.php\" class=\"top22_chinese\"
                               onmouseout=\"this.className='top22_chinese_jianbian2'\"
                               onmouseover=\"this.className='top22_chinese_jianbian1'\"
                            >登出</a>
                        </span>
                            ";
                    }
                    else
                    {
                        echo "
                            <span style=\"padding-right: 50px;font-size: 13px;\">
                            <a href=\"/fun/login\" class=\"top22_chinese\"
                               onmouseout=\"this.className='top22_chinese_jianbian2'\"
                               onmouseover=\"this.className='top22_chinese_jianbian1'\"
                            >登录</a>
                        </span>
                            ";
                    }
                    ?>
                </div>
            </div>
            <!--            第二行-->


        </div>
        <!--            第二行-->
    </div>
    <!--        导航栏结束-->

    <div style="flex-direction: column">
        <!--            上下 -->
        <div style="height:150px;text-align: center;padding-top: 60px">
            <span style="font-size: 25px">
                登录 Peach Store
            </span>
        </div>
        <!-- 登录 -->
        <div style="height:160px;text-align: center">
            <form style="text-align: center" action="fun.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" autofocus
                           style="display:inline;width:300px;"autocomplete="off" placeholder="Peach ID"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="passwd" name="passwd"
                           style="display:inline;width:300px;"autocomplete="off" placeholder="密码" />
                </div>
                <button type="submit" class="btn btn-light">登录</button>
            </form>
        </div>
        <!-- 登录 -->
<!--        <div style="text-align: center;height: 30px;font-size: 14px">-->
<!--            <a href="#" class="noline">忘记了 Peach ID 或密码？ </a>-->
<!--        </div>-->

        <div style="text-align: center;height: 30px;font-size: 14px">
            没有 Peach ID？
            <a href="/fun/register" class="noline">立即创建您的 Peach ID。 </a>
        </div>
    </div>

    <!--        白条-->
    <div style="width: 100%;height: 100px;background: white"></div>
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
</html>