<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receta;

class RecetasController extends Controller
{
    public function index ()
{
return Receta::all();
}
public function store (Request $request)
{
Receta::create($request->all());
return ['created' => true];
}
public function show ($id)
{
return Receta::find($id);
}
public function update (Request $request, $id)
{
$receta = Receta::find($id);
$receta->update($request->all());
return ['updated' => true];
}
public function destroy ($id)
{
Receta::destroy($id);
return ['deleted' => true];
}
}

