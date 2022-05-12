<?php

namespace App\Http\Controllers;
use App\Http\Requests\backend\users\update;
use App\models\contact;
use App\Http\Requests\frontend\comments\store;
use App\models\category;
use App\models\comment;
use App\models\page;
use App\models\skill;
use App\models\tag;
use App\models\User;
use App\models\video;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
public function __construct()
{
    $this->middleware('auth')->only([
'comment','commentstore','profileupdate'
    ]);
}

    public function welcom()
    {

        $videos=video::publish()->paginate(9);
        return view('welcome',compact('videos'));
    }
    public function profileupdate(\App\Http\Requests\frontend\profile\store $request)
    {

       $user=User::findorfail(auth()->user()->id);
       $array=[];
       $email=User::where('email',$request->email)->first();
       if($email==null){
           if($request->email!=$user->email){
               $array['email']=$request->email;
           }
       }

       if($request->name!=$user->name){
           $array['name']=$request->name;
       }
       if($request->password!=$user->password){
           $array['password']=Hash::make($request->password);
       }
       if(!empty($array)){
           $user->update($array);
       }
        alert()->success('','تم تعديل البروفايل بنجاح');
       return redirect()->back();
    }
    public function page($id,$slug=null)
    {

        $pagess=page::findorfail($id);
        return view('front-end.page.index',compact('pagess'));
    }
    public function profilee($id,$slug=null)
    {

        $user=User::findorfail($id);

        return view('front-end.profile.index',compact('user'));
    }
    public function index()
    {
        $videos=video::publish()->orderby('id','desc');
    if (request()->has('search')&&request()->get('search')==!'')
    {
        $videos= $videos->where('name','like','%'.request()->get('search').'%');
    }
        $videos=  $videos->publish()->paginate(30);
        return view('home',compact('videos'));
    }
    public function category($id)
    {
        $cat=category::findorfail($id);
        $videos=video::publish()->where('cat_id',$id)->orderby('id','desc')->paginate(30);
        return view('front-end.category.index',compact('videos','cat'));
    }

    public function skill($id)
    {
        $skill=skill::findorfail($id);
        $videos=video::publish()->whereHas('skills',function ($query)use ($id){
            $query->where('skill_id',$id);
        })
            ->orderby('id','desc')->paginate(30);
        return view('front-end.skill.index',compact('videos','skill'));
    }
    public function tags($id)
    {
        $tag=tag::findorfail($id);
        $videos=video::publish()->whereHas('tags',function ($query)use ($id){
            $query->where('tag_id',$id);
        })
            ->orderby('id','desc')->paginate(30);

        return view('front-end.tag.index',compact('videos','tag'));
    }
    public function video($id)
    {
        $videos=video::publish()->with('comments.user','skills','tags','user','cat')->findorfail($id);

        return view('front-end.video.index',compact('videos'));
    }
    public function comment($id,store $request)
    {
        $comment=comment::findorfail($id);

        if ((auth()->user()->id == $comment->user_id) || auth()->user()->group=='admin' ){

            $comment->update(['comment'=>$request->comment]);
        }
        alert()->success('','تم تعديل تعليق بنجاح');
        return redirect()->route('front.video',['id'=> $comment->video_id,'#comment']);
    }
    public function commentstore($id,store $request)
    {
        $video=video::findorfail($id);

       comment::create([
           'user_id'=>auth()->user()->id,
           'video_id'=> $video->id,
           'comment'=>$request->comment
       ]);
        alert()->success('','تم اضافة التعليق بنجاح');
        return redirect()->route('front.video',['id'=>  $video->id,'#comment']);
        //return redirect()->route('front.video',['id'=> $video->id,'#comment']);
    }
    public function contact(\App\Http\Requests\backend\massage\store $request){
        contact::create(

            $request->all()
        );
        alert()->success('','تم ارسال رسالة بنجاح');
        return redirect()->back();
    }
}
