<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function postContent() {
        return $this->hasOne('App\postContent');
    }

    public function postComment() {
        return $this->hasMany('App\postComment');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function media() {
        return $this->hasOne('App\Media');
    }
}
