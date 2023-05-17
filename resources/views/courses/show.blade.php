@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Course Details') }}</div>

                    <div class="card-body bg-dark">
                        <div class="mb-3">
                            <label for="name" class="form-label text-light">{{ __('Name') }}</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="credits" class="form-label text-light">{{ __('Credits') }}</label>
                            <input type="number" class="form-control" id="credits" name="credits" value="{{ $course->credits }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="lecturer" class="form-label text-light">{{ __('Lecturer') }}</label>
                            <input type="text" class="form-control" id="lecturer" name="lecturer" value="{{ $course->lecturer }}" readonly>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('courses.edit', ['id' => $course->id]) }}" class="btn btn-primary">{{ __('Edit Course') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
