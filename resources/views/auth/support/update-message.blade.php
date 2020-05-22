@extends('auth.layouts.master')
@section('content')
    <form action="{{route('contact-update-submit',$data->id)}}" method="post">
        @csrf
        <div class="container" >
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{$data->name}}" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" value="{{$data->email}}" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="Subject">Theme:</label>
                <input type="text" name="theme" value="{{$data->theme}}" id="theme" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Message:</label>
                <textarea  name="message"  id="message" class="form-control">{{$data->message}}</textarea>
            </div>
            <button type="submit" class="btn btn-outline-dark ">Update</button>
        </div>
    </form>
@endsection
