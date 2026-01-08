@extends('master')
@section('content')
    <h1>{{ $category }}</h1>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['nom'] }}" style="aspect-ratio: 1 / 1; object-fit: cover;">
                        <h5 class="card-title">{{ $product['nom'] }}</h5>
                        <p class="card-text">${{ $product['prix'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection