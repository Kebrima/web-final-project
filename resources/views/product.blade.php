@extends('layouts.master')

@section('title', 'Товар')
@section('content')
    <br>
    <div class="card text-center">
        <div class="card-header">
            <h6 class="card-title">{{$product->author}}</h6>
        </div>
        <div class="card-body">
            <img class="card-img-top" src="{{$product->image}}" alt="Card image cap" style="width:18rem;">
            <br>
            <br>
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <form action="{{route('basket-add', $product)}}" method="POST">
                <button type="submit" class="btn btn-outline-dark" role="button"><ion-icon name="cart"></ion-icon>Garbage</button>
                @csrf

            </form>
        </div>
        <div class="card-footer text-muted">
            <p class="card-text">{{$product->price}} KZT</p>
        </div>
    </div>
@endsection
