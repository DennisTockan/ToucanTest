@extends('layouts.layout')

@section('content')

<h4 class="center">ToucanTech</h4>
<form class="white" action="{{ route('create') }}" method="POST">
    @csrf 
    <div>
    <label for="name">Name:</label>
    <input type="text" id="name" class="name" name="name" placeholder="Name" required pattern="[A-Za-z ]+" title="Valid name required (letters and spaces)">
    </div>

    <div>
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" placeholder="Email Address" required>
    </div>

    <div>
    <label for="school">School:</label>
    @foreach($schools as $school)
    <div>
        <input type="radio" id="{{ $school->id }}" name="school" value="{{ $school->id }}" required>
        <label for="{{ $school->id }}">{{ $school->name }}</label>
    </div>
    @endforeach
</div>

    <div class="center">
     <button type="submit" name="submit" class="btn brand z-depth-0">Add a Member</button>
    </div>
</form>

@endsection
