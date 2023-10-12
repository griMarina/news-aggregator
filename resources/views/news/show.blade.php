@extends('layouts.main')

@section('title')
    @parent News
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @if ($news)
    <div>
        <h2>{{ $news['title'] ?? '' }}</h2>
        @if (!$news['isPrivate'])
            <p>{{ $news['text'] ?? '' }}</p>
        @else
           <p>Register to read this article</p> 
        @endif
    </div>
    @else
        <p>There is no news with sush id</p>
    @endif
    
@endsection
