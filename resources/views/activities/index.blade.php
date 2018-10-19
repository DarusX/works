@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h1 class="title">A</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Actividad</th>
                <th>Acciones</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
            <tr>
                <td class="py-1">
                    <a href="{{route('activities.show', $activity)}}" data-toggle="tooltip" data-placement="top" title="{{$activity->description}}">{{$activity->activity}}</a>
                </td>
                <td class="py-1">
                    <a href="" class="btn btn-sm btn-light"><i class="fas fa-user-plus"></i></a>
                    <a href="" class="btn btn-sm btn-light"><i class="fas fa-user-cog"></i></a>
                </td>
                <td class="py-1">
                    <a href="{{route('activities.edit', $activity)}}" class="btn btn-sm btn-light"><i class="fas fa-pen"></i></a>
                    <a href="{{route('activities.destroy', $activity)}}" class="destroy btn btn-sm btn-light"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<form class="form-destroy">
    {{csrf_field()}}
    {{method_field('DELETE')}}
</form>
@endsection