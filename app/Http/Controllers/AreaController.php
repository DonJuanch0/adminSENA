<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::with(['courses', 'teachers'])->get();
        return response()->json($areas);
    }


    public function show(Area $area)
    {
        return response()->json($area->load(['courses', 'teachers']));
    }

     public function store(Area $area)
    {
        $area->update(request()->all());
        return response()->json($area);
    }       

  public function update(Area $area)
    {
        $area->update(request()->all());
        return response()->json($area);
    }       

    public function destroy(Area $area)
    {
        $area->delete();
        return response()->json(null, 204);
    }
    

}
