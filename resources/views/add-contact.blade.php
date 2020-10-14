@extends('layouts.app')
@section('content')
<div class="contact-list">
    <h1 class="header-text">Add Contact</h1>
    <form action="/contact" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name..." name="name">
            <span class="text-danger">@error('name'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" class="form-control" id="number" placeholder="Enter number..." name="number">
            <span class="text-danger">@error('number'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Enter description..." name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-info" style="background-color: teal; color: white">Submit</button>
    </form>
    <a href="/contact"><button class="btn btn-info" style="background-color: teal; color: white">Cancel</button></a>
</div>
@endsection