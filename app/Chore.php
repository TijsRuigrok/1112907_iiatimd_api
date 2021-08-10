<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chore extends Model
{
    protected $fillable = [
        'name', 'points', 'date',
    ];

    public $timestamps = false;
}
