@extends('layouts.main')


@section('content')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3 border-bottom">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-dark " type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <img src="{{ asset('storage/'. $posts[0]->image) }}" class="img-fluid"
                    alt="{{ $posts[0]->category->name }}">

            @else
            <img src="https://source.unsplash.com/random/1200x300?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">

            @endif

            <div class="card-body text-center">
                <h3 class="card-title fw-bold">
                    {{ $posts[0]->title }}
                </h3>
                <small class="text-body-secondary">
                    <p>By.
                        <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                            {{ $posts[0]->author->name }}
                        </a>
                        in
                        <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                            {{ $posts[0]->category->name }}
                        </a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-dark rounded-0">Read More</a>

            </div>
        </div>



        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">

                            <div class="text-white px-3 py-2 position-absolute"
                                style="background-color: rgba(0, 0, 0, 0.8)">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                            <a href="/posts/{{ $post->slug }}">
                                @if ($post->image)
                                <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid"
                                    alt="{{ $post->category->name }}">

                                @else
                                <img src="https://source.unsplash.com/random/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">

                                @endif

                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-decoration-none fw-bold">
                                    {{ $post->title }}
                                </h5>
                                <small class="text-body-secondary">
                                    <p>By. <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">
                                            {{ $post->author->name }} </a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </p>
                                </small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-dark rounded-0">Read More</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-3">Post Not Found</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection
