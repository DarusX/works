@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h1 class="title">Equipos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Acciones</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td class="py-1">
                    <a href="{{route('teams.show', $team)}}">{{$team->team}}</a>
                </td>
                <td class="py-1">
                    <a href="{{route('teams.edit', $team)}}" class="btn btn-sm btn-light"><i class="fas fa-user-plus"></i></a>
                    <a href="{{route('teams.edit', $team)}}" class="btn btn-sm btn-light"><i class="fas fa-user-cog"></i></a>
                </td>
                <td class="py-1">
                    <a href="" class="btn btn-sm btn-light"><i class="fas fa-pen"></i></a>
                    <a href="{{route('teams.destroy', $team)}}" class="destroy btn btn-sm btn-light"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection