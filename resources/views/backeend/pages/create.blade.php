@extends('backeend.layout.app')
@php

    $modelname='صفحة';
@endphp
@section('title')
    أضافة صفحة
@endsection
@section('content')
    <form action="{{route('page.store')}}" method="post">
        @csrf
        @include('backeend.pages.form')

        <button type="submit" class="btn btn-primary">أضف {{$modelname}}</button>
    </form>
@endsection