@extends('layouts.app')

@section('content')
    @include('inc.navbar')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col">
                    <h3>{{$product->name}}</h3>
                </div>
            @endforeach
            
        </div>
    </div>
    @include('inc.footer')
@endsection