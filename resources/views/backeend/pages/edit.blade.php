@extends('backeend.layout.app')
@php

    $modelname='صفحة';
@endphp
@section('title')
    تعديل صفحة
@endsection
@section('content')
    <form action="{{route('page.update',$row->id)}}" method="post">
        @csrf
        @include('backeend.pages.form')

        <button type="submit" class="btn btn-primary pull-right">تحديث {{$modelname}}</button>
    </form>
@endsection