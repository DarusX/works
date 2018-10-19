@extends('layouts.app')
@section('content')
<div class="col-md-12 pt-4">
    <h1 class="title">Actividad</h1>
    <form action="{{route('activities.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Actividad</label>
            <input type="text" class="form-control form-control-sm" name="activity" value="{{old('activity')}}">
        </div>
        <div class="form-group">
            <label for="">Descripcion</label>
            <textarea name="description" class="form-control ckeditor" rows="20">{{old('description')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
    </form>
</div>
@endsection