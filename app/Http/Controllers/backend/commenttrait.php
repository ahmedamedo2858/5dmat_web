<?php
namespace App\Http\Controllers\backend;

use App\Http\Requests\backend\comments\store;
use App\models\comment;

trait commenttrait{
    public function commentstore(store $request){
        $requestarray=$request->all()+['user_id'=>auth()->user()->id];
        comment::create($requestarray);
        return redirect()->route('video.edit',['id'=>$requestarray['video_id'],'#comments']);
    }
    public function commentdelete($id){

        $row= comment::findorfail($id);
        $row->delete();
        return redirect()->route('video.edit',['id'=>$row->video_id,'#comments']);
    }
    public function commentupdate(store $request, $id){

        $row= comment::findorfail($id);
        $row->update($request->all());
        return redirect()->route('video.edit',['id'=>$row->video_id,'#comments']);
    }
}
