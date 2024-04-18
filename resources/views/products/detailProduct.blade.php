@extends('layouts.main')

@section('content')
    <div class="my-5 p-2">
        <div class="row">
            <div class="col-md-6">
                <img src="" alt="">
            </div>
            <div class="col-md-6">
                <h3>{{$product -> name}}</h3>
                <p>Stock : {{$product -> stock}}</p>
                <p>Detail : {{$product -> description}}</p>
            </div>
        </div>
    </div>

@endsection