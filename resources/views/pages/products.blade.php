@extends('layouts.app')

@section('content')
    @include('inc.navbar')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class=" col col-3">
                    <h1>{{$product->name}}</h1>
                </div>
            @endforeach
            
        </div>
    </div>
    @include('inc.footer')
@endsection