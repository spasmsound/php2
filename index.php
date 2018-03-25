<?php

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::findLastNews();

include __DIR__ . '/templates/index.php';