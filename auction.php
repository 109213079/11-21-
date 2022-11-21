<?php
    require_once("connMysql.php");

    $data = "SELECT `ID`, `reserve price` FROM `bid`";
    $result = mysqli_query($db_link, $data);
    while($inca = $result -> fetch_assoc()){
        $num = $_POST["number{$inca['ID']}"];
        $number = (int)$num;
        $rp = $inca['reserve price'];
        $ID = $inca['ID'];
        if($number != 0 && $number >= $rp) {
            $updateSql = "INSERT INTO `auction`(`ID`, `price`) VALUES ('{$ID}', {$number})";
            mysqli_query($db_link, $updateSql);
        }
    }
?>

<script type="text/javascript">
    alert('已下標!');
    window.location.href='buyer.php';
</script>

