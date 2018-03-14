<?php
require __DIR__ . '/../autoload.php';

var_dump(\App\Models\News::findLastNews());