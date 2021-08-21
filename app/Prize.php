<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    protected $fillable = [
        'guid', 'name', 'points',
    ];

    public $timestamps = false;
}
