<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;

class ApprenticesController extends Controller
{
    public function index()
    {
        $apprentices = Apprentice::with(['course', 'computer'])->get();
        return response()->json($apprentices, 200);
    }

    public function show(Apprentice $apprentice)
    {
        return response()->json($apprentice->load(['course', 'computer']));
    }

    public function store()
    {
        $apprentice = Apprentice::create(request()->all());
        return response()->json($apprentice, 201);
    }

    public function update(Apprentice $apprentice)
    {
        $apprentice->update(request()->all());
        return response()->json($apprentice);
    }

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return response()->json(null, 204);
    }
}
