<?php

namespace App\Http\Controllers;
use Cloudinary\Cloudinary;
use App\Models\Computer;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('image');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.Cloudinary.cloud_name'),
                'api_key' => config('services.Cloudinary.api_key'),
                'api_secret' => config('services.Cloudinary.api_secret'),
            ],
            'url' => [
                'secure' => true,
            ],
        ]);

        $resultado = $cloudinary->uploadApi()->upload($file->getRealPath(), [
            'folder' => 'computers',
            'resource_type' => 'image',
        ]);

        $computer = Computer::create([
            'brand' => $request->input('brand', ''),
            'model' => $request->input('model', ''),
            'number' => $request->input('number', 0),
            'image_url' => $resultado['secure_url'],
            'image_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Computer created successfully',
            'data' => $computer,
        ], 201);
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
