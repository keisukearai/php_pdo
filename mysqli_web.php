<?php
// DB接続
$link = mysqli_connect('localhost', 'root', '', 'sampledb');
if (!$link) {
    die('接続失敗です。' .mysqli_error());
}

// クエリ発行
$result = mysqli_query($link, 'select * from users');
if (!$result) {
    die('クエリーが失敗しました。' .mysqli_error());
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>mysqli</title>
    </head>
    <body>
        <h1>mysqli</h1>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div><?=$row["id"] ?>:<?=$row["u_name"] ?></div>
        <?php } ?>
    </body>
</html>

<?php // DB切断 ?>
<?php mysqli_close($link); ?>