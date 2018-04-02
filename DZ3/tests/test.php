<?php
require __DIR__ . '/../autoload.php';

$article = \App\Models\Article::findById(2);
$article->delete();