<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    foreach ($news as $value) { ?>
        <a href="/php2/article.php?id=<?php echo $value->id; ?>"><?php echo $value->article; ?></a>
           <br>
           <?php echo $value->text; ?>
        <br>
        <hr>
    <?php } ?>
</body>
</html>