<?php 

session_start();

?>


<html>
<head></head>
<body>

<?php

echo 'セッション破棄しました';
// $_SESSION に空の配列を代入してセッションを破棄する
$_SESSION = [];

// Cookieに過去の日付けで情報をセットして削除
if(isset($_COOKIE['PHPSESSID'])){
  setcookie('PHPSESSID', '', time() - 1800, '/');
}
// セッションを破棄
session_destroy();

echo 'セッション';
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

echo 'クッキー';
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';


?>


</body></html>
