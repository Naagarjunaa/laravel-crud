@extends('layouts.app')
@section('content')
<div class="contact-list">
    <div class="d-flex justify-content-between">
        <h1 class="header-text">Contact list</h1>
        <a class="nav-link" href="/contact/create">Add Contact</a>
    </div>
    <div class="accordion" id="accordionExample">
        @forelse($contacts as $contact)
        <div class="card">
            <div class="card-header" id="'heading' . {{$contact['id']}}">
                <h2 class="mb-0 d-flex">
                    <i class="fas fa-user-circle" style="color: teal"></i>
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="{{'#collapse'. $contact['id']}}" aria-expanded="true" aria-controls="{{'collapse'. $contact['id']}}" style="color: brown">
                        {{$contact['name']}}
                    </button>
                    <a href="contact/{{$contact['id']}}/edit"><i class="fas fa-user-edit fa-xs mr-2" style="color: teal"></i></a>
                    <i class="fas fa-trash-alt fa-xs" style="color: teal" onclick="event.preventDefault();document.getElementById('form-delete{{$contact->id}}').submit()"></i>
                    <form action="contact/{{$contact['id']}}" method="post" style="display:none" id="{{'form-delete' . $contact['id']}}">
                        @csrf
                        @method('delete')
                    </form>
                </h2>
            </div>

            <div id="{{'collapse'. $contact['id']}}" class="collapse" aria-labelledby="'heading' . {{$contact['id']}}" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            Phone Number: {{$contact['number']}} <br />
                            Description: {{$contact['description']}}
                        </div>
                        <div class="col">
                            email: {{$contact['email']}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @empty
        <div> Click Add Contact to Add your contacts!!!</div>
        @endforelse
    </div>
</div>
@endsection