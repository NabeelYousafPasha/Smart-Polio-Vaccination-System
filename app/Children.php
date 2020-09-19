<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $fillable = [
        'name', 'DOB', 'parentref_id',
    ];



    public function parentref()
    {
        return $this->belongsTo('App\Parentref');
    }
}
