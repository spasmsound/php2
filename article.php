<?php
require __DIR__ . '/autoload.php';

$id = $_GET['id'];
$news = \App\Models\News::findById($id);

include __DIR__ . '/templates/article.php';