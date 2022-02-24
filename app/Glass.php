<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glass extends Model
{
    protected $fillable =
    [
        'name',
        'type',
        'material',
        'capacity',
        'height',
        'diameter',
    ];
}
