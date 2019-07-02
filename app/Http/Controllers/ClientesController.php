<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

class ClientesController extends Controller
{
    public function index ()
    {
    return Cliente::all();
    }

    public function store (Request $request)
    {
    Cliente::create($request->all());
    return ['created' => true];
    }

    public function show ($id)
    {
    return Cliente::find($id);
    }

    public function update (Request $request, $id)
    {
    $cliente = Cliente::find($id);
    $cliente->update($request->all());
    return ['updated' => true];
    }

    public function destroy ($id)
    {
    Cliente::destroy($id);
    return ['deleted' => true];
    }
}