<?php

namespace App\Http\Controllers;

use App\Models\Computer;

class ComputersController extends Controller
{
    public function index()
    {
        $computers = Computer::with('apprentices')->get();
        return response()->json($computers);
    }

    public function show(Computer $computer)
    {
        return response()->json($computer->load('apprentices'));
    }

    public function store()
    {
        $computer = Computer::create(request()->all());
        return response()->json($computer, 201);
    }

    public function update(Computer $computer)
    {
        $computer->update(request()->all());
        return response()->json($computer);
    }       

    public function destroy(Computer $computer)
    {
        $computer->delete();
        return response()->json(null, 204);
    }
}
