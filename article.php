<!--Убрал шаблон страницы article.php -->
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

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findById($_GET['id']);

    foreach ($data as $value)
    {
        echo $value->content;
    }
?>

</body>
</html>