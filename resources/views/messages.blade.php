@extends('auth.layouts.master')
@section('content')
    @foreach($data as $element)
        <div class="mt-6">
            <div class="container p-3 my-3 border">
                <div class="alert alert-info" style="max-width: 18em;">
                    <h3>{{$element->theme}}</h3>
                    <p>{{$element->email}}</p>
                    <p><small>{{$element->created_at}}</small></p>
                    <a href="{{route('contact-data-message',$element->id)}}"><button class="btn btn-primary">View</button></a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
