<?php

namespace App\Http\Controllers;

use App\Models\Credenciamento;
use Illuminate\Http\Request;

class CredenciamentoController extends Controller
{
    public function index()
    {
        $credenciamento = Credenciamento::all();
        return response()->json($credenciamento);
    }

    public function store(Request $request)
    {
        $credenciamento = Credenciamento::create($request->all());
        return response()->json($credenciamento, 201);
    }

    public function show($id)
    {
        $credenciamento = Credenciamento::findOrFail($id);
        return response()->json($credenciamento);
    }

    public function update(Request $request, $id)
    {
        $credenciamento = Credenciamento::findOrFail($id);
        $credenciamento->update($request->all());
        return response()->json($credenciamento, 200);
    }

    public function destroy($id)
    {
        $credenciamento = Credenciamento::findOrFail($id);
        $credenciamento->delete();
        return response()->json(null, 204);
    }
}
