<?php
require_once "db.php";

  try {
    // データベースの接続
    $db = new PDO($dsn, $user, $password);
    // sql文をデーターベースに送る
    $sql = $db->query("SELECT * FROM user");

    include './test.php';
    exit();
  } catch (PDOException $e) {
    echo '接続失敗';
    var_dump($e);
    exit;
  }
?>