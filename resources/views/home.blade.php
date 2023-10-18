@extends('layouts.layout')

@section('content')
<h4 class="center grey-text">Schools</h4>
<div class="container">
    
@foreach($schools as $school)
    <div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">{{ $school->name }}</span>
            </div>
        </div>
</div>
@endforeach

</div>

@endsection