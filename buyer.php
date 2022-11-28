<?php 
    require_once("connMysql.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>client</title>
        <style type="text/css">
            body {
                width:600px;
                margin:10px auto;
                text-align:center;
            }
            #content {
                margin:20px auto;
                border:2px solid ivory;
                font-size: 14pt;
            }
        </style>
    </head>
    <body>
        <div id="content">
            <h2>買家</h2>
            <hr>
            <h3>標案清單</h3>
            <table align=center border="2" cellpadding="5">
                <tr><th>編號</th><th>名稱</th><th>底價</th><th>下標</th><th>目前標價價格</th></tr>
                <?php
                    echo "<form action='auction.php' method='post'>";
                    $sql = "SELECT `ID`, `name`, `reserve price`, `now price` FROM `bid`";
                    $result = mysqli_query($db_link, $sql);
                    while($row = $result -> fetch_assoc()){
                        if($row['ID'] != '')
                            echo "<tr><td name='ID{$row['ID']}'>{$row['ID']}</td><td>{$row['name']}</td>
                            <td>\${$row['reserve price']}</td><td>\${$row['now price']}</td><td>出價：<input type='text' name='number{$row['ID']}' size='7'> </td></tr>";
                    }

                    echo "<tr><td colspan='5'><input type='submit' value='下標'/></td></tr></form>";
                ?>
            </table>
            <hr>
            <h3>查詢拍賣狀態</h3>
            <table align=center border="2" cellpadding="2">
                <tr><th>標案編號</th></tr>
                <?php
                    echo "<form action='inquire.php' method='post'>";
                    echo "<tr><td><input type='text' name='ID' size='7'></td></tr>";
                    echo "<tr><td colspan='5'><input type='submit' value='查詢狀態'/></td></tr></form>";
                ?>
            </table>
            <hr>
            <table align=center border="1" cellpadding="1">
                <th><a href="function.php">回功能選單</a></th></tr>
            </table>
        </div>
    </body>
</html>