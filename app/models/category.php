<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
protected  $fillable=['name','meta_keywords','meta_des'];
public function video(){
    return $this->hasMany(video::class,'cat_id');

}
}
