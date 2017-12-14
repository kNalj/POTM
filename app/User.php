<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

Class User extends Authenticatable
{
    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }

    public function post() {
        return $this->hasMany('App\Post');
    }

    public function role() {
        return $this->belongsTo('App\Role');
    }
}
