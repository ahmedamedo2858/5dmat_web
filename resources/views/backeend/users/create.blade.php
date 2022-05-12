@extends('backeend.layout.app')
@php

    $modelname='مستخدم';
@endphp
@section('title')
    أضافة المستخدمين
@endsection
@section('content')
    <form action="{{route('user.store')}}" method="post">
        @csrf
        @include('backeend.users.form')

        <button type="submit" class="btn btn-primary">أضف {{$modelname}}</button>
    </form>
@endsection