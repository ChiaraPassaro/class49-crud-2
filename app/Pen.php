<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pen extends Model
{
    protected $fillable =
    [
        'name',
        'brand',
        'series',
        'color',
        'type',
        'refill',
        'body_material',
        'closed_length',
        'body_length',
        'cap_length',
        'diameter',
        'weigth',
        'created_at',
        'updated_at',
    ];
}
