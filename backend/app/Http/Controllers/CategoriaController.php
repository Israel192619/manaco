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
        return response()->json(Categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $categoria = Categoria::create($request->all());

        $data = [
            "mensaje"=>"Categoria creada correctamente",
            "categoria"=>$categoria
        ];

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::find($id);
        if (!$categoria) {
            $data = [
                "mensaje" => "Categoria no encontrada"
            ];
            return response()->json($data, 404);
        }

        return response()->json($categoria,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::find($id);
        if (!$categoria) {
            $data = [
                "mensaje" => "Categoria no encontrada"
            ];
            return response()->json($data, 404);
        }

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $categoria->update($request->all());

        $data = [
            "mensaje" => "Categoria actualizada correctamente",
            "categoria" => $categoria
        ];

        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        if (!$categoria) {
            $data = [
                "mensaje" => "Categoria no encontrada"
            ];
            return response()->json($data, 404);
        }

        $categoria->delete();

        $data = [
            "mensaje" => "Categoria eliminada correctamente"
        ];

        return response()->json($data, 200);
    }
}
