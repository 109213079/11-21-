<?php
    require_once("connMysql.php");

    $data = "SELECT `ID`, `reserve price`,`now price` FROM `bid`";
    $result = mysqli_query($db_link, $data);
    while($inca = $result -> fetch_assoc()){
        $num = $_POST["number{$inca['ID']}"];
        $number = (int)$num;
        $rp = $inca['reserve price'];
        $np=$inca['now price'];
        $ID = $inca['ID'];
        if($number != 0 && $number >= $rp&&$number >= $np) {
            $inserSql = "INSERT INTO `auction`(`ID`, `price`) VALUES ('{$ID}', {$number})";
            mysqli_query($db_link, $inserSql);
            $updateSql = "UPDATE `bid` SET `now price`={$number} where `ID`={$ID}";
            mysqli_query($db_link,$updateSql);
        }
    }
?>

<script type="text/javascript">
    alert('已下標!');
    window.location.href='buyer.php';
</script>

