<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'user_id',
        'category_id',
        'photo_id',
        'title',
        'body'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}