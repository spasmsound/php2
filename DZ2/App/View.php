<?php

namespace App;


class View
{

    protected $data = [];

    public function __get($name) // магический метод на чтение условного свойства
    {
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value) // магический метод на запись условного свойства
    {
        $this->data[$name] = $value;
    }

    public function __isset($name) // магический метод на проверку существования источника для условного свойства
    {
        return isset($this->data[$name]);
    }

    public function display($template)
    {
        include $template;

    }
}