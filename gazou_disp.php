<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>画像表示</title>
</head>
<body>
    <?php
    $gazou = $_FILES['gazou'];

    move_uploaded_file($gazou['tmp_name'], './gazou/' . $gazou['name']);
    echo '<img src="./gazou/' . $gazou['name'] . '">';
    ?>
</body>
</html>