<?php
    //資料庫主機設定
    $db_host = "localhost";
    $db_table = "11/21";
    $db_username = "root";
    $db_password = "";
    $db_link = mysqli_connect($db_host, $db_username, $db_password, $db_table);
    //設定資料連線
    if (!$db_link)
        die("資料庫連結失敗!");
    //設定字元集與連線校對
    mysqli_query($db_link, "SET NAMES 'utf8'");
?>