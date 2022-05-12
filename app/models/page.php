<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected  $fillable=['name','meta_keywords','meta_des','des'];
}
