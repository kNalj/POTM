<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function course() {
        return $this->belongsTo('App\Course');
    }

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
