@extends('layouts.statement')

@section('header')
    @include('includes.header')
@endsection

@section('statement-title')
    Terms<span> of </span>Use
@endsection

@section('statement-subtitle')
    Vragen? Stuur een E-mail naar {e-mail}<br>
    Laatst bijgewerkt: 09-06-2021 10:34
@endsection

@section('statement-content')
    @include('includes.content.content-terms-of-use')
@endsection

@section('footer')
    @include('includes.footer')
@endsection
