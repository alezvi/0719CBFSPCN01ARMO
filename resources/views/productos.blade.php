@extends('layouts.website')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Listado de productos</h1>

                @foreach ($products as $product)
                    <div class="card">
                        <div class="card-header">{{ $product['title'] }}</div>
                        <div class="card-body">
                            {{ $product['price'] }}
                            <a href="<?= url('productos', $product['id']) ?>">Ver mas</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="css/styles.css" rel="stylesheet">
@endpush