<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public $directory = "/images/";

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'content',
        'path'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function photos()
    {
        return $this->morphMany('App\photo', 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    // public static function scopeLatest()
    // {
    //     return $query->orderBy('id', 'asc');
    // }

    public function getPathAttribute($value)
    {
        return $this->directory . $value ;
    }
}
