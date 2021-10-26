@extends('layouts.statement')

@section('header')
    @include('includes.header')
@endsection

@section('statement-title')
    PR<span>I</span>VACYBELEID
@endsection

@section('statement-subtitle')
    Vragen? Stuur een E-mail naar info@nietveel.be<br>
    Laatst bijgewerkt: 08-06-2021 13:10
@endsection

@section('statement-content')
    @include('includes.content.content-privacy-policy')
@endsection

@section('footer')
    @include('includes.footer')
@endsection
