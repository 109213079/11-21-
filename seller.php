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
            <h2>賣家</h2>
            <hr>
            <h3>增加標案</h3>
            <table align=center border="2" cellpadding="3">
                <tr><th>名稱</th><th>底價</th><th>截止日期</th></tr>
                <?php
                    echo "<form action='addBid.php' method='post'>";
                    echo "<tr><td><input type='text' name='n' size='7'></td>
                    <td><input type='text' name='rp' size='7'></td>
                    <td><input type='date' name='d' size='7'</td></tr>";

                    echo "<tr><td colspan='3'><input type='submit' value='save'/></td></tr></form>";
                ?>
            </table>
            <hr>
            <h3>歷史紀錄</h3>
            <table align=center border="2" cellpadding="3">
                <tr><th>ID</th><th>名稱</th><th>底價</th><th>截止日期</th></tr>
                <?php
                    $sql = "SELECT `ID`, `name`, `reserve price`, `deadline` FROM `bid`";
                    $result = mysqli_query($db_link, $sql);
                    while($row = $result -> fetch_assoc()){
                        if($row['ID'] != '')
                            echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td>
                            <td>\${$row['reserve price']}</td>
                            <td>{$row['deadline']}</td></tr>";
                    }
                ?>
            </table>
            <hr>
            <table align=center border="1" cellpadding="1">
                <th><a href="function.php">回功能選單</a></th></tr>
            </table>
        </div>
    </body>
</html>