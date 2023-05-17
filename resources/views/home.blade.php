@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Courses List') }}</div>

                    <div class="card-body bg-dark">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table  text-light">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Credits</th>
                                    <th>Lecturer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $index => $course)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->credits }}</td>
                                        <td>{{ $course->lecturer }}</td>
                                        <td>
                                            {{-- <a href="{{ route('courses.create') }}">
                                        <i class="bi bi-plus-circle text-warning me-2">Add</i>
                                    </a> --}}
                                            <a href="{{ route('courses.show', ['id' => $course->id]) }}">
                                                <i class="fa fa-plus text-warning me-2">Edit</i>
                                            </a>
                                            <a href="{{ route('courses.destroy', ['id' => $course->id]) }}"
                                                onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this course?')) { document.getElementById('delete-form-{{ $course->id }}').submit(); }">
                                                <i class="fa fa-trash text-warning"></i> Delete
                                            </a>

                                            <form id="delete-form-{{ $course->id }}"
                                                action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                        <div class="card-body bg-dark text-center">
                            <a href="{{ route('courses.create') }}">
                                <button class="btn btn-success">
                                    <i class="bi bi-plus-circle text-warning"></i>Add
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
