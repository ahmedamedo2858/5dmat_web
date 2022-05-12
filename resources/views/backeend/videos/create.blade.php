@extends('backeend.layout.app')
@php

    $modelname='فديو';
@endphp
@section('title')
    أضافة فديو
@endsection
@section('content')
    <form action="{{route('video.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        @include('backeend.videos.form')

        <button type="submit" class="btn btn-primary">أضف {{$modelname}}</button>
    </form>
@endsection
