<?php

namespace App\Http\Controllers\backend;



use App\Mail\replaycontact;
use App\models\contact;
use App\Http\Requests\backend\replay\store;
use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class message extends backendcontreoller
{
    public function __construct(contact $model)
    {
     parent::__construct($model);
    }
    public function replay($id,store $request)
    {
       $message=$this->model->findorfail($id);
       Mail::send(new replaycontact($message,$request->message));
        alert()->success('','تم ارسال رد رسالة بنجاح');
       return redirect()->back();
    }
}
