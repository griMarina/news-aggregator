@extends('layouts.main')

@section('title')
@parent Main page
@endsection

@section('menu')
    @include('menu')
@endsection


@section('content')
    <h1>Main page</h1>
    <p>Welcome to the news aggregator!</p>
@endsection