@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fw-bold">{{ __('Edit Course') }}</div>

<div class="card-body bg-dark">
        <form method="POST" action="{{ route('courses.update', ['id' => $course->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}">
            </div>

            <div class="form-group">
                <label for="credits">Credits</label>
                <input type="number" class="form-control" id="credits" name="credits" value="{{ $course->credits }}">
            </div>

            <div class="form-group">
                <label for="lecturer">Lecturer</label>
                <input type="text" class="form-control" id="lecturer" name="lecturer" value="{{ $course->lecturer }}">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
@endsection
