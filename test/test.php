
<a href="check.php?username=root1">login</a>
<br>
<a href="logout.php">logOut</a>
<br>


<?php
session_start();

if (isset($_SESSION['admin'])) {
    $flag = 0;
    echo $_SESSION['admin'];
}
?>