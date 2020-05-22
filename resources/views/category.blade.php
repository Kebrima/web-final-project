@extends('layouts.master')

@section('title', 'Категория' . $category->name)
@section('content')
    <br>
    <h1>{{$category->name}}</h1>
    <p>{{$category->description}}</p>
    <div class="row justify-content-center">
        @foreach($category->products->chunk(4) as $chunk)
            <div class="row justify-content-center" >
                @foreach ($chunk as $product)
                    <div class="col md-4 text-center">
                        @include('layouts.card', compact('product'))
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
