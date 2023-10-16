@extends('layouts.app')

@section('title')
    @parent Categories
@endsection

@section('menu')
    @include('menu')
@endsection
@section('content')
    @if ($category)
    <div class="container">
            <h2>News from category {{ $category }} </h2>
            @forelse ($news as $n)
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">{{ $n['title'] }}</h3>
                        <p class="card-text">{{ $n['text'] }}</p>
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('news.show', ['id' => $n['id']]) }}">More...</a>
                    </div>
                </div>
            </div>
            @empty
                <p>There are no news in this category</p>
            @endforelse
        </div> 
    @else
        <p>There is no category with such title</p>
    @endif
@endsection
