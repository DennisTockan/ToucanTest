@extends('layouts.layout')

@section('content')

@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<h4 class="center grey-text">Schools</h4>
<div class="container">
    
@foreach($schools as $school)
    <a href="{{ route('home.school', ['school_id' => $school->id]) }}" class="card-link">
        <div class="card">
            <div class="card-content">
                <span class="card-title">{{ $school->name }}</span>
            </div>
        </div>
    </a>
@endforeach

</div>

@endsection