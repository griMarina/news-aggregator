@extends('layouts.main')

@section('title')
    @parent News
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
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
                    <p>No any news...</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
 