<?php
    require_once("connMysql.php");

    $n = $_POST['n'];
    $rp = $_POST['rp'];
    $addC = "INSERT INTO `bid`(`name`, `reserve price`) VALUES ('{$n}', {$rp})";
    mysqli_query($db_link, $addC);
?>

<script type="text/javascript">
    alert('已增加標案!');
    window.location.href='seller.php';
</script>

