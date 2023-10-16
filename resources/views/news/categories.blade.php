@extends('layouts.app')

@section('title')
    @parent Categories
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @forelse ($categories as $cat)
    <div style='border: 1px solid red'>
        <h2>{{ $cat['title'] }}</h2>
        <a href="{{ route('news.category', ['slug' => $cat['slug']]) }}">More...</a>
    </div>
    @empty
        <p>There are no categories</p>
    @endforelse
@endsection
