<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function courseComment() {
        return $this->hasMany('App\courseComment');
    }

    public function user() {
        return $this->belongsToMany('App\User');
    }

    public function courseDescription() {
        return $this->hasOne('App\courseDescription');
    }

    public function media() {
        return $this->hasOne('App\Media');
    }
}
