<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentref extends Model
{
    protected $fillable = [
        'name', 'CNIC', 'address',
    ];
}
