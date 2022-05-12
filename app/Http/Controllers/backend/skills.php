<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\backend\skills\store;
use App\models\skill;


class skills extends backendcontreoller
{
    public function __construct(skill $model)
    {
        parent::__construct($model);
    }



    public function store(store $request){
        $requestarray=$request->all();

        $this->model->create($requestarray);
        alert()->success('','تم اضافة مهارة بنجاح');
        return redirect()->route('skills');
    }

    public function update($id,store $request){
        $row=$this->model->findorfail($id);
        $requestarray=$request->all();
        $row->update($requestarray);
        alert()->success('','تم تحديث مهارة بنجاح');
        return redirect()->route('skills');
    }
}
