<?php
// 下記、見本の書き方
// define('DB_HOST', 'DBの場所');
// define('DB_NAME', 'DBの名前');
// define('DB_USER', 'ユーザー名');
// define('DB_PASSWORD', 'パスワード');

define('DB_HOST', 'localhost');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';charset=utf8';
$user = DB_USER;
$password = DB_PASSWORD;
?>
