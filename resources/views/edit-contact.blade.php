@extends('layouts.app')
@section('content')
<div class="contact-list">
    <h1 class="header-text">Edit Contact</h1>
    <form method="POST" action="/contact/{{$contact['id']}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name..." name="name" value="{{$contact['name']}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{$contact['email']}}">
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" class="form-control" id="number" placeholder="Enter number..." name="number" value="{{$contact['number']}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$contact['description']}}"></textarea>
        </div>
        <button type="submit" class="btn btn-info" style="background-color: teal; color: white">Update</button>
        <a href="/contact"><button class="btn btn-info" style="background-color: teal; color: white">Cancel</button></a>
    </form>
</div>
@endsection