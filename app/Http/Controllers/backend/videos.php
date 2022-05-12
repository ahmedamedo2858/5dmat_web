<?php

namespace App\Http\Controllers\backend;


use App\Http\Requests\backend\videos\store;
use App\Http\Requests\backend\videos\update;
use App\models\category;
use App\models\skill;
use App\models\tag;
use App\models\video;

class videos extends backendcontreoller
{use commenttrait;
    public function __construct(video $model)
    {
        parent::__construct($model);

    }

   protected function with(){
       return ['cat','user'];
   }
   protected function append(){

       $array=[
           'cats'=>category::get(),
           'skills'=>skill::get(),
           'tags'=>tag::get(),
           'skillselect'=>[],
           'tagselect'=>[],
           'comments'=>[]
       ];
if (request()->route()->parameter('id')){

    $array['tagselect']=$this->model->find(request()->route()->parameter('id'))->tags()->pluck('tags.id')->toArray();
    $array['skillselect']=$this->model->find(request()->route()->parameter('id'))->skills()->pluck('skills.id')->toArray();
    $array['comments']=$this->model->find(request()->route()->parameter('id'))->comments()->orderby('id','desc')->with('user')->get();

}return $array;
   }
    public function store(store $request){
       $file=$request->file('image');

        $filename=time().str_random('10').'.'.$file->getClientOriginalExtension();

        $file->move(public_path('upload'),$filename);
        $requestarray=['user_id'=>auth()->user()->id,'image'=>$filename]+$request->all();
       $row= $this->model->create($requestarray);
  $this->syncskilltag($row,$requestarray);

        alert()->success('','تم اضافة فديو بنجاح');

        return redirect()->route('videos');
    }

    public function update($id,update $request){
        $row=$this->model->findorfail($id);
        $requestarray=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');

            $filename=time().str_random('10').'.'.$file->getClientOriginalExtension();

            $file->move(public_path('upload'),$filename);
            $requestarray=['image'=>$filename]+$requestarray;        }

        $row->update($requestarray);
        $this->syncskilltag($row,$requestarray);
        alert()->success('','تم تحديث فديو بنجاح');
            return redirect()->route('videos');
    }protected function syncskilltag($row,$requestarray){
    if(isset($requestarray['skills']) && !empty($requestarray['skills'])) {
        $row->skills()->sync($requestarray['skills']);
    }
    if(isset($requestarray['tags']) && !empty($requestarray['tags'])){
        $row->tags()->sync($requestarray['tags']);

    }
}

}
