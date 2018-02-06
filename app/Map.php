<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    public function module()
    {
        return $this->belongsTo('App\Module');
    }
}
