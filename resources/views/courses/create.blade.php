@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Add Course') }}</div>

                    <div class="card-body bg-dark">
                        <form action="{{ route('courses.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label text-light">{{ __('CourseName') }}</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="credits" class="form-label text-light">{{ __('Credits') }}</label>
                                <input type="number" class="form-control" id="credits" name="credits" required>
                            </div>

                            <div class="mb-3">
                                <label for="lecturer" class="form-label text-light">{{ __('Lecturer') }}</label>
                                <input type="text" class="form-control" id="lecturer" name="lecturer" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">{{ __('Add Course') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
