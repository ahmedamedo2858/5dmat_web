<?php

namespace App\models;
use App\models\category;
use App\models\user;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{protected  $fillable=['name','meta_keywords','meta_des','des','youtube','published','image','cat_id','user_id'];

   public function cat(){
       return $this->belongsTo(category::class,'cat_id');
   }

    public function user(){
    return $this->belongsTo(User::class,'user_id');

}
public function skills(){
    return $this->belongsToMany(skill::class,'skills_videos','Video_id','skill_id');

}
public function tags(){
    return $this->belongsToMany(tag::class,'tags_videos','Video_id','tag_id');

}
public function comments(){
    return $this->hasMany(comment::class);

}
public function scopepublish(){
    return $this->where('published',1);

}


}
