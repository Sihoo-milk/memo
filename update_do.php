<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <main>
    <h2>Practice</h2>
    <?php
    $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
    $statement->execute(array($_POST['memo'], $_POST['id']));
    ?>
    <p>メモの内容を変更しました</p>
    <p><a href="index.php">戻る</a></p>
  </main>
</body>
</html>
