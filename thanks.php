<?php
   $name = htmlspecialchars($_POST["name"]); 
   $email = htmlspecialchars($_POST["E-mail"]);
   $contact = htmlspecialchars($_POST["from"]);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>thanks</title>
</head>

<body>
   <!-- echo $_POST["name"];
  ↑↑ confirmで使ったのでもう使えない。スーパーグローバル変数はページ間で1回しか使えない
  どうするか？confirmにリンクできるようにコードを入力する -->

  <h2>お問合せありがとうございました</h2>
  <p>名前：<?php echo $name;?></p>
  <p>メールアドレス：<?php echo $email;?></p>
  <p>お問合せ内容：<?php echo $contact;?></p>
</body>
</html>