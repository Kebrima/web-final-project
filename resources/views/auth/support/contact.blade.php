@extends('layouts.master')
@section('content')
    <form action="/contact/submit" method="post">
        @csrf
        <div class="container" >
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="Subject">Theme:</label>
                <input type="text" name="theme" id="theme" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Message:</label>
                <textarea  name="message" id="message" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-dark ">Submit</button>
        </div>
    </form>
@endsection
