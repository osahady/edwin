<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function posts()
    {
        return $this->hasManyThrough('App\Post', 'App\User');
    }
    public function comments()
    {
        return $this->hasManyThrough('App\Comment', App\Post);
    }
}
