@extends('layouts.app')
@section('title',$cat->name)
@section('meta_des',$cat->meta_des)
@section('meta_keywords',$cat->meta_keywords)
@section('content')
    <div class="container">
        <div class="title">
            <h2>{{$cat->name}}</h2>
        </div>
    <div class="row ">

    @foreach($videos as $video)
                <div class="col-lg-4">
                    @include('front-end.shared.video-card')
                </div>
    @endforeach

    </div>
       @include('front-end.shared.video-row')
</div>
@endsection
