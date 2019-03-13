<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $guarded = [];

    public function frame()
    {
    	return $this->belongsTo(Frame::class);
    }
}
