<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['name'];

    public function maps()
    {
        return $this->hasMany('App\Map');
    }
}
