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

// 取得結果レコード繰り返し
while ($row = mysqli_fetch_assoc($result)) {
    var_dump($row);
}

// DB切断
mysqli_close($link);