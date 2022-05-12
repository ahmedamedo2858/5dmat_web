<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\backend\tags\store;
use App\models\tag;
class tags extends backendcontreoller
{
    public function __construct(tag $model)
    {
        parent::__construct($model);
    }

    public function store(store $request){
        $requestarray=$request->all();

        $this->model->create($requestarray);
        alert()->success('','تم اضافة تاج بنجاح');
        return redirect()->route('tags');
    }

    public function update($id,store $request){
        $row=$this->model->findorfail($id);
        $requestarray=$request->all();
        $row->update($requestarray);
        alert()->success('','تم تحديث تاج بنجاح');
        return redirect()->route('tags');
    }
}
