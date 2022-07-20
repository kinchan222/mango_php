<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問い合わせ一覧取得</title>
</head>

<body>
<?php 

  // データーベースに接続
  $dsn = 'mysql:dbname=contact2;host=localhost';
  $user = 'root';
  $password='root';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  // SQL文の実行
  $sql = "SELECT * FROM `contact_db2` WHERE 1";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  // var_dump ($stmt);
  while (true) {
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($rec == false) {
      break; 
    }
    // var_dump($rec);
    // echo "<br>";
    // echo $rec["nickname"]."<br>";
    foreach ($rec as $key => $value) {
      echo $value."<br>";
    }
    echo "<hr>";
  }


// 👆※「break;」をかけないと、無限ループになってしまう。

  // データーベースを切断する
  $dbh = null;
  
?>
</body>
</html>