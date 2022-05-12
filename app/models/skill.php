<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    protected  $fillable=['name'];
    public function video(){
        return $this->belongsToMany(video::class,'skills_videos');
    
    }
}
