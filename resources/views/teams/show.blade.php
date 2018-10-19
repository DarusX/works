@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="title">{{$team->team}}</h1>
        @if(Auth::user()->teams->contains($team))
        <a href="{{route('teams.leave', $team)}}" class="btn btn-dark">Leave</a>
        @else
        <a href="{{route('teams.join', $team)}}" class="btn btn-dark">Join</a>
        @endif
    </div>
    <div class="col-md-6">
        <h2 class="title">Miembros</h2>
        @foreach($team->users as $user)
        <details>
            <summary>{{$user->name}}</summary>
            <p>{{$user->email}}</p>
        </details>
        @endforeach
    </div>
    <div class="col-md-6">
        <h2 class="title">Actividades</h2>
        @foreach($team->activities as $activity)
        <details>
            <summary>{{$activity->activity}}</summary>
            {!!$activity->description!!}
        </details>
        @endforeach
    </div>
</div>
@endsection