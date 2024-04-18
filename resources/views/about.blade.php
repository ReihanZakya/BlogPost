@extends('layouts.main')


@section('content')
    <div class="">
        <div class=" mb-5">
            <h1> Halaman About</h1>
        </div>
        <div class="">
            <img src="img/{{ $image }}" class="img-thumbnail rounded img-fluid" width="250" alt="">
        </div>
        <div class="">
            <h1>{{ $name }}</h1>
        </div>
        <div class="">
            <h3>{{ $email }}</h3>
        </div>
    </div>
@endsection
