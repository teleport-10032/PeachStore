<?php

$flag = 0; //判断用户身份是否过期

session_start();
if (isset($_SESSION['admin'])) {
    $username = $_SESSION['admin'];
    $flag = 1;
}
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
    $flag = 2;

}

echo "<!--            第二行-->
                <div style=\"width: 100%;height: 53%;background: black;display: flex;\">
                    <div style=\"flex: 170;\"></div>
                    <a style=\"flex: 40; padding-top:10px\" href=\"/\">
                        <img src=\"/assets/img/index/apple.png\" width=\"21px\" height=\"21px\"/>
                    </a>
                    <div style=\"flex: 100;\"></div>
                    <div class=\"top21\">
                        <a href=\"/mac\" class=\"top22\"
                           onmouseout=\"this.className='top22_jianbian2'\"
                           onmouseover=\"this.className='top22_jianbian1'\"
                               >Mac</a>
                    </div>
                    <div style=\"flex: 80;\"></div>
                    <div class=\"top21\">
                        <a href=\"/ipad\" class=\"top22\"
                           onmouseout=\"this.className='top22_jianbian2'\"
                           onmouseover=\"this.className='top22_jianbian1'\"
                               >iPad</a>
                    </div>
                    <div style=\"flex: 80;\"></div>
                    <div class=\"top21\">
                        <a href=\"/iphone\" class=\"top22\"
                           onmouseout=\"this.className='top22_jianbian2'\"
                           onmouseover=\"this.className='top22_jianbian1'\"
                               >iPhone</a>
                    </div>
                    <div style=\"flex: 80;\"></div>
                    <div class=\"top21\">
                        <a href=\"/watch\" class=\"top22\"
                           onmouseout=\"this.className='top22_jianbian2'\"
                           onmouseover=\"this.className='top22_jianbian1'\"
                               >Watch</a>
                    </div>
                    <div style=\"flex: 80;\"></div>
                    <div class=\"top21\">
                        <a href=\"/music\" class=\"top22\"
                           onmouseout=\"this.className='top22_jianbian2'\"
                           onmouseover=\"this.className='top22_jianbian1'\"
                               >Music</a>
                    </div>

                    <div style=\"flex: 70;\">
                        <a href=\"/search\">
                            <img src=\"/assets/img/index/search.svg\" width=\"90px\" height=\"90px\">
                        </a>
                    </div>
                    <div style=\"flex: 70;\">
                        <a href=\"/bag\">
                            <img src=\"/assets/img/index/shop.svg\" width=\"45px\" height=\"45px\" style=\"padding-top: 2px\">
                        </a>
                    </div>

                    <div style=\"flex: 250;color: #adadad;text-align: right;padding-top: 14px;\">
                       
                        ";


if ($flag == 1) {
    echo "
                             <span style=\"padding-right: 50px;\">
                            <a href='#' class=\"top22\"
                               onmouseout=\"this.className='top22_jianbian2'\"
                               onmouseover=\"this.className='top22_jianbian1'\"
                            >$username</a>
                            &nbsp;
                           <a href=\"/admin/goods\" target='_blank' class=\"top22_chinese\"
                               onmouseout=\"this.className='top22_chinese_jianbian2'\"
                               onmouseover=\"this.className='top22_chinese_jianbian1'\"
                               title='后台管理'
                            >管理</a>
                            &nbsp;
                            <a href=\"/fun/logout/index.php\" class=\"top22_chinese\"
                               onmouseout=\"this.className='top22_chinese_jianbian2'\"
                               onmouseover=\"this.className='top22_chinese_jianbian1'\"
                               title='退出登录'
                            >登出</a>
                        </span>
                            ";
} else if ($flag == 2) {

    echo "
                             <span style=\"padding-right: 50px;\">
                            <a href='#' class=\"top22\"
                               onmouseout=\"this.className='top22_jianbian2'\"
                               onmouseover=\"this.className='top22_jianbian1'\"
                            >$username</a>
                            
                            &nbsp;<a href=\" /order\" target='_blank' class=\"top22_chinese\"
                               onmouseout=\"this . className = 'top22_chinese_jianbian2'\"
                               onmouseover=\"this . className = 'top22_chinese_jianbian1'\"
                               title='查看订单'
                            >订单</a>
                            
                            
                            <a href=\"/fun/logout/index.php\" class=\"top22_chinese\"
                               onmouseout=\"this.className='top22_chinese_jianbian2'\"
                               onmouseover=\"this.className='top22_chinese_jianbian1'\"
                               title='退出登录'
                            >登出</a>
                            
                        </span>
                            ";
} else {
    echo "
                            <span style=\"padding-right: 50px;font-size: 13px;\">
                            <a href=\"/fun/login\" class=\"top22_chinese\"
                               onmouseout=\"this.className='top22_chinese_jianbian2'\"
                               onmouseover=\"this.className='top22_chinese_jianbian1'\"
                            >登录</a>
                        </span>
                            ";
}

echo "
                    </div>
                </div>
                <!--            第二行-->";

