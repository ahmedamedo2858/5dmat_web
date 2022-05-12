@extends('layouts.app')
@section('title',$pagess->name)
@section('meta_des',$pagess->meta_des)
@section('meta_keywords',$pagess->meta_keywords)
@section('content')
    <div class="container">
        <div class="title text-center" style="margin-top: 100px;">

            <h2>{{$pagess->name}}</h2>
        </div>
        <div class="row " style="min-height:350px">

            <p>{{$pagess->des }}</p>

        </div>

    </div>
@endsection
