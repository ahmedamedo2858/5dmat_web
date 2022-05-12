@extends('layouts.app')
@section('title',$tag->name)
@section('content')
    <div class="container">
        <div class="title">
            <h2>{{$tag->name}}</h2>
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
