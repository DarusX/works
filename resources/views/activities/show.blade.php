@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <h1 class="title">{{$activity->activity}}</h1>
</div>
<div class="col-md-6">
    {!!$activity->description!!}
</div>
@endsection