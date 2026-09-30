<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller

{
    public function index()
    {
        $courses = Course::with(['area', 'apprentices', 'trainingCenter'])->get();
        return response()->json($courses);
    }

    public function show(Course $course)
    {
        return response()->json($course->load(['area', 'apprentices', 'trainingCenter']));
    }

    public function store()
    {
        $course = Course::create(request()->all());
        return response()->json($course, 201);
    }   

    public function update(Course $course)
    {
        $course->update(request()->all());
        return response()->json($course);
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return response()->json(null, 204);
    }
}
