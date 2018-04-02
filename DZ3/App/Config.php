<?php

namespace App;

class Config
{
    public $data;

    public function __construct()
    {
        $path = require __DIR__. '/../config.php';
        $this->data = $path;
    }
}