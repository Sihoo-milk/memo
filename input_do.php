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
  <h2>Practice</h2>
  <pre>
  <?php
  $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
  $statement->bindParam(1, $_POST['memo']);
  $statement->execute();
  echo 'メモが登録されました';
  ?>
  </pre>
</body>
</html>