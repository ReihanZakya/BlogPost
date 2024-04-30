@extends('layouts.main')


@section('content')
    <section class="colorlib-blog" data-section="blog">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <h1 class="colorlib-heading my-3 border-bottom border2">Recent Blog</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-4 col-sm-6 animate-box border-bottom border-2 mt-3" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="blog.html" class="blog-img">
                                        @if ($post->image)
                                        <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid"
                                            alt="{{ $post->category->name }}">

                                        @else
                                        <img src="https://source.unsplash.com/random/500x400?{{ $post->category->name }}"
                                            class="card-img-top" alt="{{ $post->category->name }}">

                                        @endif                            </a>
                                    <div class="desc">
                                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i>{{ $post->author->name }}</small></span>
                                        <h3><a class="text-decoration-none text-dark" href="blog.html">{{ $post->title }}</a></h3>
                                        <p>{{ $post->excerpt }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-4">
                    <h1 class="mb-3 border-bottom border-2">Category</h1>
                    @foreach ($categories as $category)
                    <div class="mb-3">
                        <a class="text-decoration-none" href="/posts?category={{ $category->slug }}">
                            <div class="card text-bg-dark">
                                <div class="">
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
        </div>
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </section>
@endsection
