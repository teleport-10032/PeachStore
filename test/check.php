    <?php
    session_start();
    $_SESSION["name"]=$_GET["username"];
    echo $_SESSION["name"];

    ?>