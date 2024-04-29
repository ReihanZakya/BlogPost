@extends('layouts.main')


@section('content')
    <div class="">
        <div class="w-full">
            <img src="img/bg-about.jpg" class="bg-about container-fluid p-0 m-0" alt="">
        </div>
        <div class="mt-5 mb-5">
            <h6 class="text-white">Overview</h6>
            <h1 class="text-white">Profile</h1>
        </div>
        <div class="d-flex align-items-center gap-4">
            <div class="">
                <img src="img/{{ $image }}" class="img-thumbnail rounded-circle img-fluid" width="250" alt="">
            </div>
            <div>
                <div class="">
                    <h1>{{ auth()->user()->name }}</h1>
                </div>
                <div class="">
                    <h6>{{ auth()->user()->email }}</h6>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <h1 class="mb-3">My Post</h1>
            <div class="row">
                @foreach ($posts as $post)
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
            {{ $posts->links() }}
    </div>
@endsection
