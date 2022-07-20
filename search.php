<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート検索機能</title>
</head>

<body>
<form action="" method="post">
    <p>検索したいIDを入力してください。</p>
    <input type="text" name="id">
    <input type="submit" value="検索">
  </form>

  <!-- PHPコード入力 -->
  <?php 
  // データーベースに接続
  $dsn = 'mysql:dbname=contact2;host=localhost';
  $user = 'root';
  $password='root';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

  // SQL文の実行
  if (!empty($_POST)) {
    $sql = "SELECT * FROM `contact_db2` WHERE `id`=" . $_POST['id'];
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    // データを取得する
    while (true) {
      $rec = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($rec == false) {
        break;
      }
     foreach ($rec as $key => $value) {
        echo $value;
        echo "<br>";
       }
      echo '<hr>';
    }
  }
  

  // データーベースを切断する
  $dbh = null;
  
  ?>
</body>
</html>