<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $casts=[
        'image'=>'array',
        'color'=>'array',
        'size'=>'array'
    ];
    const UPDATED_AT = null;
}