<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サンプル</title>
</head>

<body>

  <h1>サンプルプログラム</h1>

  <!-- get送信 -->
  <form action="chapter_5_5_get.php" method="get">
    <input type="text" name="comment" placeholder="GET送信">
    <input type="submit" value="送信">
  </form>
  <!-- post送信 -->
  <form action="chapter_5_5_post.php" method="post">
    <input type="text" name="comment" placeholder="POST送信">
    <input type="submit" value="送信">
  </form>
  <!-- セキュリティ対策ver -->
  <form action="chapter_5_6_get.php" method="get">
    <input type="text" name="comment" placeholder="セキュリティ対策">
    <input type="submit" value="送信">
  </form>
</body>

</html>
