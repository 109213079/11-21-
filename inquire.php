<?php
    require_once("connMysql.php");

    $ID = $_POST['ID'];
    $data = "SELECT `ID`, `price` FROM `auction` WHERE `ID`={$ID}";
    $result = mysqli_query($db_link, $data);
    echo "<h2 align=center>拍賣狀態</h2><hr>";
    echo "<table align=center border='2' cellpadding='2'><th>編號</th><th>下標價</th>";
    while($inca = $result -> fetch_assoc()){
        $aID = $inca['ID'];
        $p = $inca['price'];
        echo "<tr><td>$aID</td><td>$p</td></tr>";
    }
    echo "</table>";
?>

<html>
    <hr>
    <table align=center border="1" cellpadding="1">
        <th><a href="buyer.php">回買家</a></th></tr>
    </table>
</html>

