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
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Actividades</h2>
            </div>
            <div class="col-md-12">
                <form action="{{route('teams.activities.assign', $team)}}" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Guardar</button>
                        </div>
                        <div class="col-md-12 py-4">
                            <table class="table my-0">
                                <thead>
                                    <tr>
                                        <th class="py-1"></th>
                                        <th class="py-1">Actividad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($activities as $activity)
                                    <tr>
                                        <td class="py-1"><input type="checkbox" name="activity_id[]" value="{{$activity->id}}"
                                                {{($team->activities->contains($activity))?'checked':''}}></td>
                                        <td class="py-1">{{$activity->activity}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{csrf_field()}}

                    <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Guardar</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
@section('js')
<script>
</script>
@endsection