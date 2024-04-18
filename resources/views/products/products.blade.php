@extends('layouts.main')

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product -> name}}</h5>
                        <p class="card-text">Stock : {{$product -> stock}}</p>
                        <a href="/products/{{$product -> id}}">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection