@extends('backeend.layout.app')
@php

    $modelname='فديو';
@endphp
@section('title')
    تعديل فديو
@endsection
@section('content')
    <form action="{{route('video.update',$row->id)}}" method="post"enctype="multipart/form-data">
        @csrf
        @include('backeend.videos.form')

        <button type="submit" class="btn btn-primary pull-right">تحديث {{$modelname}}</button>
    </form>
    @php
        $url=getyoutoubid($row->youtube)
    @endphp
    <img src="{{url('upload/'.$row->image)}}"style="width: 250px" alt="image">
    <br>
    <br>
    <br>
    <br>
    @if ($url)
        <iframe width="250"  height="250" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    @endif
    @include('backeend.comments.create')
    @include('backeend.comments.index')
@endsection
