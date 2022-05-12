@extends('layouts.app')
@section('title',$videos->name)

@section('meta_des',$videos->meta_des)
@section('meta_keywords',$videos->meta_keywords)
@section('content')
    <div class="container">
        <div class="title">
            <h1>{{ $videos->name}}</h1>
        </div>



    <div class="row" >
        <div class="col-md-12">
        @php
            $url=getyoutoubid( $videos->youtube)
        @endphp

        @if ($url)
            <iframe width="100%"  height="500" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endif
     </div>
    </div>

        <div class="row">
            <div class="col-md-6">
              <p>{{$videos->user->name}}</p>
              <p>{{$videos->created_at}}</p>
              <p>{{$videos->des}}</p>
                <div class="col-md-6">
                <p>
                   <a href="{{route('front.category',['id'=>$videos->cat->id])}}"> <span class="btn btn-info">{{$videos->cat->name}}</span></a>
                </p>
                <p> @foreach($videos->tags as $tag)
                        <a href="{{route('front.tag',['id'=>$tag->id])}}"> <span class="btn btn-primary">{{$tag->name}}</span></a>
                    @endforeach
                </p>

                <p> @foreach($videos->skills as $skill)
                        <a href="{{route('front.skill',['id'=>$skill->id])}}"> <span class="btn btn-pink">{{$skill->name}}</span></a>
                    @endforeach
                </p>
            </div>
            </div>
        </div>
        <div class="row" id="comment">
            <div class="col-md-12">
                <div class="card">
                    <h4 class="card-header">comment({{$videos->comments->count()}})</h4>
                    <div class="card-body">
                @foreach($videos->comments as $comment)

                            @include('front-end.video.comment')

                @endforeach

    </div>
                    @if(auth()->user())
                  @include('front-end.video.comment-create')
                        @endif
      </div>
        </div>

        </div>
    </div>
@endsection

