<?php

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findById($_GET['id']);

include __DIR__ . '/templates/article.php';