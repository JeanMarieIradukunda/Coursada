<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::all();
        return view('home', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->input('name');
        $course->credits = $request->input('credits');
        $course->lecturer = $request->input('lecturer');
        $course->save();

        return redirect()->route('home')->with('status', 'Course created successfully!');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id); // Find the course by its ID
        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->name = $request->input('name');
        $course->credits = $request->input('credits');
        $course->lecturer = $request->input('lecturer');
        $course->save();

        return redirect()->route('home')->with('status', 'Course updated successfully!');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('home')->with('status', 'Course deleted successfully!');
    }

}
