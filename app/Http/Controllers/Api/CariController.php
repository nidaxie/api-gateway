<?php
namespace App\Http\Controllers\Api;

use App\Models\Cari;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CariController extends Controller
{
    public function index()
    {
        return response()->json(Cari::all());
    }

    public function store(Request $request)
    {
        try {
            $cari = Cari::create($request->all());
            return response()->json($cari, 201);

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show(Cari $cariler)
    {
        return response()->json($cariler);
    }

    public function update(Request $request, Cari $cariler)
    {
        $cariler->update($request->all());
        return response()->json($cariler);
    }

    public function destroy(Cari $cariler)
    {
        $cariler->delete();
        return response()->json(['message' => 'Silindi']);
    }
}