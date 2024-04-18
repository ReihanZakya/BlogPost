@extends('layouts.main')


@section('content')
    <h1 class="mb-5">Halaman Post Kategori</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-3">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/random/1200x900?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-start p-0 hover-categories">
                                <h5 class="card-title flex-fill text-white p-4"
                                    style="background-color: rgba(0, 0, 0, 0.8)">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
