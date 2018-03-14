<?php

namespace App\Models;


use App\Model;

class News extends Model
{

    const TABLE = 'news';

    protected $article;
    protected $text;
}