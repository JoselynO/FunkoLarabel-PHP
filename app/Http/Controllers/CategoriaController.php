<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();

        return response()->json([
            'categorias' => $categorias
        ]);
    }


    public function store(Request $request)
    {
        $categoria = new Categoria;

        $categoria->nombre = $request->input('nombre');
        $categoria->save();

        return response()->json([
            'message' => 'Categoria created successfully',
            'categoria' => $categoria
        ]);
    }

    public function show(string $id)
    {
        $categoria = Categoria::find($id);

        return response()->json([
            'categoria' => $categoria
        ]);
    }

    public function update(Request $request, string $id)
    {
        $categoria = Categoria::find($id);

        $categoria->nombre = $request->input('nombre');

        $categoria->save();

        return response()->json([
            'message' => 'Categoria updated successfully',
            'categoria' => $categoria
        ]);
    }


    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);

        $categoria->delete();

        return response()->json([
            'message' => 'Categoria deleted successfully'
        ]);
    }
}
