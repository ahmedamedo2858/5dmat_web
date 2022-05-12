<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\backend\pages\store;
use App\models\page;


class pages extends backendcontreoller
{
    public function __construct(page $model)
    {
        parent::__construct($model);
    }



    public function store(store $request){
        $requestarray=$request->all();

        $this->model->create($requestarray);
        alert()->success('','تم اضافة الصفحة بنجاح');
        return redirect()->route('pages');
    }

    public function update($id,store $request){
        $row=$this->model->findorfail($id);
        $requestarray=$request->all();
        $row->update($requestarray);
        alert()->success('','تم تحديث الصفحة بنجاح');
        return redirect()->route('pages');
    }
}
