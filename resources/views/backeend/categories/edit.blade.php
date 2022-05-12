@extends('backeend.layout.app')
@php

    $modelname='قسم';
@endphp
@section('title')
    تعديل اقسام
@endsection
@section('content')
    <form action="{{route('category.update',$row->id)}}" method="post">
        @csrf
        @include('backeend.categories.form')

        <button type="submit" class="btn btn-primary text-right">تحديث {{$modelname}}</button>
    </form>
@endsection
