@extends('layouts.main')

@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By. <a href="/posta?author={{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }}
                    </a>
                    in
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                </p>
                @if ($post->image)
                <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid my-3"
                    alt="{{ $post->category->name }}">

                @else
                <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}" class="img-fluid my-3"
                    alt="{{ $post->category->name }}">

                @endif

                <article class="my-3">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="mt-4">Go blog</a>
            </div>
        </div>
    </div>
@endsection
