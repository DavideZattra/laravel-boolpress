<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'author', 'content', 'date', 'img_url', 'category_id'];

    public function category(){

        return $this->belongsTo('App\Models\Category');
    }


    // public function user(){

    //     return $this->belongsTo('App\User');
    // }

    public function author(){

        return $this->belongsTo('App\User', 'user_id');
    }
}
