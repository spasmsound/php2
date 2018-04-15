<?php

namespace App;

/**
 * Class Config
 * @package App
 */
class Config
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * Config constructor.
     */
    public function __construct()
    {
        $this->data = require __DIR__. '/../config.php';
    }
}