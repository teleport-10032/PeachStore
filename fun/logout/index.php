<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
?>
<?php
if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
}
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
echo "<script>url=\"/\";window.location.href=url;</script>";
?>