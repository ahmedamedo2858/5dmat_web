@extends('layouts.app')
@section('title',$user->name)
@section('content')
    <div class="section profile-content">
        <div class="container">
            <div class="owner">
                <div class="avatar">
                    <img src="/frontend/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
                <div class="name">
                    <h4 class="title">{{$user->name}}
                        <br>
                    </h4>
                    <h6 class="description">{{$user->email}}</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">

                    <button onclick="$('#profile').slideToggle(1000);" class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> بروفايل</button>

                </div>
            </div>
                    <form action="{{route('profile.update')}}"  method="post" >
                        @csrf


                @include('front-end.profile.profile-update')
                        <button type="submit" class="btn btn-primary text-center">تحديث </button>
                </form>
        </div>
    </div>


@endsection
