<?php
require_once("Bbs.php");



$bbs = new Bbs();
$data = $bbs->getData();


if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  $bbs->writeData();
}


 ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>BBS</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>掲示板</h1>
    <form action="" method="post" name="bbs_form">
      <input type="text" name="title">
    </form>
    <div id="btn" class="btn" name="submit">送信</div>


    <ul class="bbs_area">
      <?php foreach($data as $title): ?>
        <li><?php echo h($title); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <script src="script.js"></script>
</body>
</html>
