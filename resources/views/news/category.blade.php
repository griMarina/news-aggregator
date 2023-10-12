@extends('layouts.main')

@section('title')
    @parent Categories
@endsection

@section('menu')
    @include('menu')
@endsection
@section('content')
    @if ($category)
    <div>
            <h1>News from category {{ $category }} </h1>
            @forelse ($news as $n)
            <div style='border: 1px solid green'>
                <h2>{{ $n['title'] }}</h2>
                <h2>{{ $n['text'] }}</h2>
                <a href="{{ route('news.show', ['id' => $n['id']]) }}">More</a>
            </div>
            @empty
                <p>There are no news in this category</p>
            @endforelse
        </div> 
    @else
        <p>There is no category with such title</p>
    @endif
@endsection
