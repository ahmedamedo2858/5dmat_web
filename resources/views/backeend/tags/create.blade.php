@extends('backeend.layout.app')
@php

    $modelname='تاج';
@endphp
@section('title')
    أضافة تاج
@endsection
@section('content')
    <form action="{{route('tag.store')}}" method="post">
        @csrf
        @include('backeend.tags.form')

        <button type="submit" class="btn btn-primary">أضف {{$modelname}}</button>
    </form>
@endsection