@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ auth()->user()->name }} Detail Post</h1>
    </div>

    <div class="container my-5">
        <div class="row ">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success">Back to all my post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </form>

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
            </div>
        </div>
    </div>
    </div>
@endsection
