@extends('backeend.layout.app')
@php

    $modelname='مهارة';
@endphp
@section('title')
    أضافة اقسام
@endsection
@section('content')
    <form action="{{route('skill.store')}}" method="post">
        @csrf
        @include('backeend.skills.form')

        <button type="submit" class="btn btn-primary">أضف {{$modelname}}</button>
    </form>
@endsection