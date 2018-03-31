<?php
require __DIR__ . '/../autoload.php';

$article = new \App\Models\Article();
$article->title = $_POST['title'];
$article->content = $_POST['content'];
$article->insert();

header('Location: /php2/DZ2/admin/index.php');