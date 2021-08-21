<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chore extends Model
{
    protected $fillable = [
        'guid', 'name', 'points', 'date',
    ];

    public $timestamps = false;
}
