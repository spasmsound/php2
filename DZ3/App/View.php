<?php

namespace App;

class View
{

    protected $data = [];

    public function display($template)
    {
        include $template;

    }
}