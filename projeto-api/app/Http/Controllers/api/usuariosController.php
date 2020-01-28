<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\usuarios;

class usuariosController extends Controller
{
    public function index()
    {
        return usuarios::all();
    }

    public function store(Request $request)
    {
        return usuarios::create($request->all());
    }

    public function show($id)
    {
        return usuarios::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $usuarios = usuarios::findOrFail($id);
        $usuarios->update($request->all());
    }

    public function destroy($id)
    {
        $usuarios = usuarios::findOrFail($id);
        $usuarios->delete();
    }
}
