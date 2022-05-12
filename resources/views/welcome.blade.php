@extends('layouts.app')
@section('title','welcome')
@section('content')

   @include('front-end.homepage-section.homepage-image')
   @include('front-end.homepage-section.statics')

   @include('front-end.homepage-section.video')
   @include('front-end.homepage-section.contact-us')
@endsection
