@extends('auth.layouts.master')
@section('content')

    <div class="mt-4">
        <div class="container">
            <div class="alert alert-info">
                <h3><b>Theme:</b>{{$data->theme}}</h3>
                <p><b>Message:</b>{{$data->message}}</p>
                <p><b>Name:</b>{{$data->name}}</p>
                <p><b>Email:</b>{{$data->email}}</p>
                <p><small>{{$data->created_at}}</small></p>
            </div>
            <a href="{{route('contact-update',$data->id)}}"><button class="btn btn-primary">Update</button></a>
            <a href="{{route('contact-delete',$data->id)}}"><button class="btn btn-danger">Delete</button></a>
        </div>
    </div>

@endsection
