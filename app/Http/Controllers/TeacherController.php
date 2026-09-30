<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with(['area', 'trainingCenter'])->get();
        return response()->json($teachers);
    }

    public function show(Teacher $teacher)
    {
        return response()->json($teacher->load(['area', 'trainingCenter']));
    }

    public function store()
{
    $teacher = Teacher::create(request()->all());

    return response()->json($teacher, 201);
}

    public function update(Teacher $teacher)
    {
        $teacher->update(request()->all());
        return response()->json($teacher);
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return response()->json(null, 204);
    }
}
