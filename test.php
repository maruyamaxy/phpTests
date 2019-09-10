<!DOCTYPE html>
<html lang="ja">
<head>
</head>
<body>
  <?php foreach ($sql as $key => $val) { ?>
    <div>
      <p><?php echo $val['name']; ?></p>
      <p><?php echo $val['text']; ?></p>
    </div>
  <?php } ?>
</body>
</html>
