$flag = 1; //判断用户身份是否过期
if (isset($_SESSION['admin'])) {
$username = $_SESSION['admin'];
$flag = 0;
} else if (isset($_SESSION['teacher_mail'])) {
$username = $_SESSION['admin'];
$flag = 0;
}



<span style="padding-right: 50px;font-size: 13px;">
                            <a href="/fun/login" class="top22_chinese"
                               onmouseout="this.className='top22_chinese_jianbian2'"
                               onmouseover="this.className='top22_chinese_jianbian1'"
                            >登录</a>
                        </span>