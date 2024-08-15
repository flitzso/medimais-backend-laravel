<?php

namespace App\Http\Controllers;

use App\Models\NormalUsers;
use Illuminate\Http\Request;

class NormalUsersController extends Controller
{
    public function index()
    {
        $normalUsers = NormalUsers::all();
        return response()->json($normalUsers);
    }

    public function store(Request $request)
    {
        $normalUsers = NormalUsers::create($request->all());
        return response()->json($normalUsers, 201);
    }

    public function show($id)
    {
        $normalUsers = NormalUsers::findOrFail($id);
        return response()->json($normalUsers);
    }

    public function update(Request $request, $id)
    {
        $normalUsers = NormalUsers::findOrFail($id);
        $normalUsers->update($request->all());
        return response()->json($normalUsers, 200);
    }

    public function destroy($id)
    {
        $normalUsers = NormalUsers::findOrFail($id);
        $normalUsers->delete();
        return response()->json(null, 204);
    }
}
