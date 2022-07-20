<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
        'artists',
        'writers'
    ];
}
