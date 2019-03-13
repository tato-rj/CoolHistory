<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frame extends Model
{
    protected $guarded = [];
    protected $with = ['media'];
    protected $withCount = ['media'];

    public function media()
    {
    	return $this->hasMany(Media::class);
    }

    public function timeline()
    {
    	return $this->belongsTo(Timeline::class);
    }
}
