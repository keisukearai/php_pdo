<?php
// データベースユーザ名
$user = 'root';
// データベースパスワード
$password = '';
// データベース名
$dbName = "sampledb";
// ホスト
$host = "localhost";

try {
    // MySQLへの接続
    $dsn = "mysql:host={$host};dbname={$dbName};charser=utf8";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL文の生成 
    $sql = "SELECT * from users";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    // $result = $stm->fetchAll(PDO::FETCH_NUM);
    var_dump($result);

    // 接続を閉じる
    $stm = null;

} catch (PDOException $e) { // PDOExceptionをキャッチする
    print($e->getMessage() ."\n");
    die();
}
