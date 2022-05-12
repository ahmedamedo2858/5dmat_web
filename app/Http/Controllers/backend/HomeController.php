<?php

namespace App\Http\Controllers\backend;
use App\models\comment;
use App\models\User;
use Illuminate\Database\Eloquent\Model;

class HomeController extends backendcontreoller
{
public function __construct(User $model)
{
    parent::__construct($model);
}

    public function index()
    {
        $comments=comment::with('user','video')->orderBy('id','desc')->paginate(20);
        return view('backeend.home',compact('comments'));
    }
}
