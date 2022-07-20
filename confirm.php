<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>confirm</title>
</head>

<body>
  <h1>お問合せ内容確認</h1>
  <?php
  //  echo $_POST["name"]."<br>";    // スーパーグローバル変数 (連組配列)
  //  echo $_POST["E-mail"]."<br>";
  //  echo $_POST["from"]."<br>";

  //上のグローバル変数を箱に入れて条件分岐でだす
  // ."<br>" 改行忘れずに
   $name = htmlspecialchars($_POST["name"]); 
   $email = htmlspecialchars($_POST["E-mail"]);
   $contact = htmlspecialchars($_POST["from"]);
   if ($name =="") {
     echo "名前が入力されていません"."<br>";
   }else{
     echo "名前:".$name."<br>";
   }
   if ($email =="") {
    echo "メールアドレスが入力されていません"."<br>";
  }else{
    echo "メールアドレス:".$email."<br>";
  }
  if ($contact =="") {
    echo "お問合せ内容が入力されていません"."<br>";
  }else{
    echo "お問合せ内容:".$contact."<br>";
  }
  ?>
<form action="thanks.php" method="POST">
  <input type="button" value="戻る" onclick="history.back()">
  <?php
   if ($name != "" && $email !="" && $contact !="" ) {
     ?>
      <input type="submit" value="進む">
      <?php }?>
 <!-- phpの中にhtmlを入れられないので、phpを途中で終わらして、間にいれてまた、phpで囲む -->
 <!-- phpの場合、：（コロン構文）が使える。授業ノート参照する -->
  <input type="hidden" name="name" value="<?php echo $name;?>">
  <input type="hidden" name="E-mail" value="<?php echo $email;?>">
  <input type="hidden" name="from" value="<?php echo $contact;?>">
  </form>
<!-- hiddenでフロント側に見えないように隠してくれる。隠したほうがいい。 -->
</html>

<!-- どれがHTMLコードとPHPがどれなのか、わかりにくいので変数を利用して、PHPを上に持ってくる（続く） -->
<!-- （続き）方法もある。授業ノート参照。 -->