@extends('layouts.twoColumn')

@section('content')
    <div class="row">
        @foreach ($products as $product)
            <div class="mb-3 col-md-6 col-xl-3 col-lg-4 col-sm-12">
                <div class="card">
                    @if (!empty($product->image_src))
                        <img src="{{ $product->image_src }}" class="card-img-top" alt="{{ $product->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, $limit = 74, $end = '...') }}</p>
                        <a href="{{route('products_details', ['id' => $product->id ])}}" class="btn btn-primary">Więcej</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
