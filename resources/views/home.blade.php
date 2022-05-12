@extends('layouts.app')
@section('title','home')
@section('content')
    <div class="container">
        <div class="title" >
            @if(request()->has('search')&&request()->get('search'))
                <p style="font-size: 30px;">
                    you search on:<b>{{request()->get('search')}}</b>
                    <a class="btn btn-primary" href="{{route('home')}}">rest</a>
                </p>
                @else
                <h2>lasted video</h2>
                @endif

        </div>
    <div class="row ">

@foreach($videos as $video)
                <div class="col-lg-4">
                    @include('front-end.shared.video-card')
                </div>
@endforeach

    </div>
</div>
@endsection
