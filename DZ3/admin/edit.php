<?php
require __DIR__ . '/../autoload.php';

$article = \App\Models\Article::findById($_POST['id']);
$article->title = $_POST['title'];
$article->content = $_POST['content'];
$article->save();

header('Location: /php2/DZ2/admin/index.php');