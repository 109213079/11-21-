<?php
    require_once("connMysql.php");

    $n = $_POST['n'];
    $rp = $_POST['rp'];
    $d = $_POST['d'];
    $addC = "INSERT INTO `bid`(`name`, `reserve price`, `deadline`) VALUES ('{$n}', {$rp}, '{$d}')";
    mysqli_query($db_link, $addC);
?>

<script type="text/javascript">
    alert('已增加標案!');
    window.location.href='seller.php';
</script>

