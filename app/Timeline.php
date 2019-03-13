<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $guarded = [];
    protected $with = ['frames'];

    public function frames()
    {
    	return $this->hasMany(Frame::class);
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
