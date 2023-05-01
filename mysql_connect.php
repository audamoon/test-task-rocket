<?php
require_once "credentials.php";
$link = mysqli_connect($host, $login, $password, 'clinic');
mysqli_set_charset($link, "utf8");
if ($link == false) {
    echo "Connection failed: ". mysql_error();
}
else {
}
