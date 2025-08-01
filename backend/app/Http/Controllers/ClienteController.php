<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Cliente::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|max:50',
            'apellidos' => 'required|max:50',
            'direccion' => 'required|max:255',
            'celular' => 'nullable|max:50',
            'nit' => 'required|max:50',
        ]);

        $cliente = Cliente::create($request->all());

        $data = [
            "mensaje" => "Cliente creado correctamente",
            "cliente" => $cliente
        ];

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            $data = [
                "mensaje" => "Cliente no encontrado"
            ];
            return response()->json($data, 404);
        }

        return response()->json($cliente, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            $data = [
                "mensaje" => "Cliente no encontrado"
            ];
            return response()->json($data, 404);
        }

        $request->validate([
            'nombres' => 'required|max:50',
            'apellidos' => 'required|max:50',
            'direccion' => 'required|max:255',
            'celular' => 'nullable|max:50',
            'nit' => 'required|max:50',
        ]);

        $cliente->update($request->all());

        $data = [
            "mensaje" => "Cliente actualizado correctamente",
            "cliente" => $cliente
        ];

        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            $data = [
                "mensaje" => "Cliente no encontrado"
            ];
            return response()->json($data, 404);
        }

        $cliente->delete();

        $data = [
            "mensaje" => "Cliente eliminado correctamente"
        ];

        return response()->json($data, 200);
    }
}
