<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サンプル</title>
</head>

<body>
  <?php

  function h($str)
  {
    return htmlspecialchars($str, ENT_QUOTES, "utf-8");
  }

  $comment = h($_GET["comment"]);

  echo $comment;
  ?>
</body>

</html>
