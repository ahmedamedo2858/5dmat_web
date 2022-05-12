@extends('backeend.layout.app')
@php

    $modelname='تاج';
@endphp
@section('title')
    تعديل تاج
@endsection
@section('content')
    <form action="{{route('tag.update',$row->id)}}" method="post">
        @csrf
        @include('backeend.tags.form')

        <button type="submit" class="btn btn-primary pull-right">تحديث {{$modelname}}</button>
    </form>
@endsection