@extends('backeend.layout.app')
@php

    $modelname='مستخدم';
@endphp
@section('title')
    تعديل المستخدمين
@endsection
@section('content')
    <form action="{{route('user.update',$row->id)}}" method="post">
        @csrf
        @include('backeend.users.form')

        <button type="submit" class="btn btn-primary pull-right">تحديث {{$modelname}}</button>
    </form>
@endsection