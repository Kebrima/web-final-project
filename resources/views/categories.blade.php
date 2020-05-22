@extends('layouts.master')

@section('title', 'Все категории')

@section('content')
    <br>
    <div class="row justify-content-md-center">
        @foreach($categories as $category)
            <div class="card" style="width: 15rem;">
                <img class="card-img-top" src="{{$category->image}}" alt="Card image cap" style="height: 10rem;">
                <div class="card-body">
                    <a class="text-my-own-color" href="{{route('category', $category->code)}}">
                        <h3 class="card-title">{{$category->name}}</h3> </a>
                    <p class="card-text">{{$category->description}}</p>
                    <p class="card-text"><small class="text-muted">genre</small></p>
                </div>
            </div>
            <br>
        @endforeach
    </div>
@endsection


