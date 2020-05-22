@extends('layouts.master')

@section('title', 'Корзина')

@section('content')

    <h3>Garbage</h3>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Cost</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{route('product', [$product->category->code, $product->code])}}">
                            <img height="56px" src="{{$product->image}}">
                            {{$product->name}}
                        </a>
                    </td>
                    <td><span class="badge badge-secondary">{{$product->pivot->count}}</span>
                        <div class="btn-group form-inline">
                            <form action="{{route('basket-remove', $product)}}" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span class="glyphicon glyphicon-minus" aria-hidden="true"></span><ion-icon name="remove"></ion-icon></button>
                                @csrf
                            </form>
                            <br>
                            <form action="{{route('basket-add', $product)}}" method="POST">
                                <button type="submit" class="btn btn-success" href=""><span class="glyphicon glyphicon-plus" aria-hidden="true"><ion-icon name="add"></ion-icon></span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{$product->price}} ₸</td>
                    <td>{{$product->getPriceForCount()}} ₸</td>
                </tr>
            @endforeach

            <tr>
                <td colspan="3">Full price:</td>
                <td>{{$order->getFullPrice()}} ₸</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{route('basket-place')}}">Checkout</a>
        </div>
    </div>
@endsection

