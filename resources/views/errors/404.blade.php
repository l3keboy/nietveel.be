@extends('layouts.app')

@section('header')
    @include('includes.header')
@endsection

@section('hero')
    @section('text-content')
        <h1 class="404-title">
            4 <span>0</span> 4
        </h1>
        <h2 class="404-text">
            Oops! Hier is NietVeel.be!
        </h2>
    @endsection
    @include('includes.hero')
@endsection


@section('content')
@endsection

@section('footer')
    @include('includes.footer')
@endsection
