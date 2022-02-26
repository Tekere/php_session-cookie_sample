<?php
// セッションを使用するときはsession_start() が必須
session_start();
?>

<html>
<head></head>
<body>

<?php
// isset($_SESSION)でセッションの有無を確認
if(!isset($_SESSION['visited'])){
  echo '初回訪問です';
  // $_SESSIONは連想配列として使えるので任意の名前と値でセッションを保存
  $_SESSION['visited'] = 1;  //訪問回数
  $_SESSION['date'] = date('c');  //訪問日
}else{
  $visited = $_SESSION['visited'];
  $visited++;
  $_SESSION['visited'] = $visited;

  echo $_SESSION['visited']. '回目の訪問です。<br>';

  if(isset($_SESSION['date'])){
    echo '前回訪問は'.$_SESSION['date'].'です';
    $_SESSION['date'] = date('c');
  }

  //setcookie("id", 'aaa', , '/');
  
  echo '<pre>';
  var_dump($_SESSION);  
  echo '</pre>';

  echo '<pre>';
// CookieにもセッションIDが入っている
  var_dump($_COOKIE);  
  echo '</pre>';

}

?>

</body>
</html>
