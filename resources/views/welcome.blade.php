@extends('layouts.app')

@section('header')
    @include('includes.header')
    @endsection

@section('hero')
    @section('text-content')
        <h1 id="static" class="static">
            Je kan,
        </h1>
        <h2 id="dynamic" class="dynamic"></h2>
    @endsection
    @section('extra-content')
        <a onClick="window.location.reload();" type="button" class="cta">HERLAAD</a>
    @endsection
    @include('includes.hero')
@endsection

@section('content')
    @include('includes.mail')
@endsection

@section('footer')
    @include('includes.footer')
@endsection
