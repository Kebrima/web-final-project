@extends('layouts.master')

@section('title', 'Главная')

@section('content')
    <br>
    <form method="GET" action="">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Price from:  <input type="text" name="price_from" id="price_from" size="6" value="{{request()->price_from}}">
                </label>
                <label for="price_to">to:  <input type="text" name="price_to" id="price_to" size="6" value="{{request()->price_to}}">
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="hit">
                    <input type="checkbox" name="hit" id="hit" @if (request()->has('hit')) checked @endif> Bestsellers </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="new">
                    <input type="checkbox" name="new" id="new" @if (request()->has('new')) checked @endif> New books </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="recommend">
                    <input type="checkbox" name="recommend" id="recommend"  @if (request()->has('recommend')) checked @endif> Recommendations </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary"><ion-icon name="search-outline"></ion-icon>Search</button>
                <!--<button type="submit" class="btn btn-primary"><ion-icon name="search-outline"></ion-icon>Search</button>-->
                <a href="{{route('index')}}" class="btn btn-warning"><ion-icon name="trash-outline"></ion-icon>Dropping</a>
            </div>
        </div>
    </form>
    <br>
     @foreach ($products->chunk(3) as $chunk)
          <div class="row justify-content-center" >
        @foreach ($chunk as $product)
            <div class="col md-4 text-center">
            @include('layouts.card', compact('product'))
                </div>
        @endforeach
            </div>
      @endforeach

        {{$products->links()}}
    <!--<nav>
        <ul class="pagination">

            <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>


            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>


            <li class="page-item">
                <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
            </li>
        </ul>
    </nav>-->


@endsection
