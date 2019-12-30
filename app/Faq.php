<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Faq extends Model
{
    protected $fillable = ['header', 'body'];
}
