@extends('layouts.main')

@section('title')
    @parent News
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @forelse ($news as $n)
        <div style='border: 1px solid green'>
            <h2>{{ $n['title'] }}</h2>
            <h2>{{ $n['text'] }}</h2>
            <a href="{{ route('news.show', ['id' => $n['id']]) }}">More...</a>
        </div>
    @empty
        <p>No any news...</p>
    @endforelse
@endsection
 