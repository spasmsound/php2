<?php
require __DIR__ . '/../autoload.php';

$article = \App\Models\Article::findById($_GET['id']);
$article->delete();

header('Location: /php2/DZ2/admin/index.php');