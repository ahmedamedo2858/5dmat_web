<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable=['user_id','video_id','comment'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function video(){
        return $this->belongsTo(video::class);
    }
}
