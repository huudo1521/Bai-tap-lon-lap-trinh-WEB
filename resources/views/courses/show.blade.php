@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Courses Page</div>
    <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text"> Syllabus : {{ $students->syllabus }}</p>
        <p class="card-text"> Duration : {{ $students->duration() }}</p>
    </div>
        <hr>
    </div>
</div>

@endsection