@extends('backeend.layout.app')
@php

    $modelname='مهارة';
@endphp
@section('title')
    تعديل اقسام
@endsection
@section('content')
    <form action="{{route('skill.update',$row->id)}}" method="post">
        @csrf
        @include('backeend.skills.form')

        <button type="submit" class="btn btn-primary pull-right">تحديث {{$modelname}}</button>
    </form>
@endsection