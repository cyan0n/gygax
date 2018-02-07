<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Map extends Model
{
    protected $fillable = ['name'];
    
    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    public function image()
    {
        if (Storage::disk('public')->exists('maps/'.$this->id)) {
            return Storage::disk('public')->url('maps/'.$this->id);
        }
    }
}
