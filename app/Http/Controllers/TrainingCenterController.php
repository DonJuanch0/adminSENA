<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        $trainingCenters = TrainingCenter::with(['courses', 'teachers'])->get();
        return response()->json($trainingCenters);
    }

    public function show(TrainingCenter $trainingCenter)
    {
        return response()->json($trainingCenter->load(['courses', 'teachers']));
    }

    public function store()
    {
        $trainingCenter = TrainingCenter::create(request()->all());
        return response()->json($trainingCenter, 201);
    }

    public function update(TrainingCenter $trainingCenter)
    {
        $trainingCenter->update(request()->all());
        return response()->json($trainingCenter);
    }

    public function destroy(TrainingCenter $trainingCenter)
    {
        $trainingCenter->delete();
        return response()->json(null, 204);
    }
}
