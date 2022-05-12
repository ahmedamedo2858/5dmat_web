@extends('backeend.layout.app')
@php

    $modelname='قسم';
@endphp
@section('title')
    أضافة اقسام
@endsection
@section('content')
    <form action="{{route('category.store')}}" method="post">
        @csrf
        @include('backeend.categories.form')

        <button type="submit" class="btn btn-primary">أضف {{$modelname}}</button>
    </form>
@endsection