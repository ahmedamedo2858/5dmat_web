<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\backend\users\store;
use App\Http\Requests\backend\users\update;
use App\models\User;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class users extends backendcontreoller
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }



    public function store(store $request){
        $requestarray=$request->all();
        $requestarray['password']=Hash::make($request['password']);
        $this->model->create($requestarray);
        alert()->success('','تم اضافة المستخدم بنجاح');
        return redirect()->route('users');
    }

    public function update($id,update $request){
        $row=$this->model->findorfail($id);
        $requestarray=$request->all();

        if($requestarray['password']&&$requestarray['password']!=''){
            $requestarray['password']= Hash::make($request->password);
        }else{
unset($requestarray['password']);
        }
        $row->update($requestarray);
        alert()->success('','تم تحديث المستخدم بنجاح');
        return redirect()->route('users');
    }



}
