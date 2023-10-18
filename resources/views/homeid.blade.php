@extends('layouts.layout')

@section('content')

<h4 class="center grey-text">Members in {{ $school->name }}:</h4>
<div class="container">

    @if ($members->isEmpty())
        <p>No members found for this school.</p>
    @else
        <ul class="collection">
            @foreach($members as $member)
                <li class="collection-item">
                    Name: {{ $member->name }}<br>
                    Email: {{ $member->email }}<br>
                    School: {{ $school->name }}<br>
                </li>
            @endforeach
        </ul>
    @endif
</div>

@endsection