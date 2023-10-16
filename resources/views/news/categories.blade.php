@extends('layouts.app')

@section('title')
    @parent Categories
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @forelse ($categories as $cat)
            <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">{{ $cat['title'] }}</h3>
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('news.category', ['slug' => $cat['slug']]) }}">More...</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>There are no categories</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
