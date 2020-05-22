@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')
    <br>
    <div class="container">
        <h3>Order confirmation</h3>
        <p>Full price: <b>{{$order->getFullPrice()}} ₸.</b></p>
        <form action="{{route('basket-confirm')}}" method="POST">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" value="" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="phone">Phone number: </label>
                <input type="text" name="phone" id="phone" value="" class="form-control" placeholder="Enter phone number">
            </div>
            <input type="hidden" name="_token" value="mbXnhuly9wzLyaQG9SkpRTxmJVEUs6iyDQ3wpUEz">
            @csrf
            <br>
            <input type="submit" class="btn btn-success" value="Confirm the order">
        </form>
    </div>
@endsection
