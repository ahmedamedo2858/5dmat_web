<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\backend\categories\store;
use App\models\category;

class categories extends backendcontreoller
{
    public function __construct(category $model)
    {
        parent::__construct($model);
    }



    public function store(store $request){
        $requestarray=$request->all();

        $this->model->create($requestarray);
        alert()->success('','تم اضافة القسم بنجاح');
        return redirect()->route('categories');
    }

    public function update($id,store $request){
        $row=$this->model->findorfail($id);
        $requestarray=$request->all();
        $row->update($requestarray);
        alert()->success('','تم تحديث القسم بنجاح');
        return redirect()->route('categories');
    }


}
