<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Farmaco;

class FarmacosController extends Controller
{
    public function index ()
{
return Farmaco::all();
}
public function store (Request $request)
{
Farmaco::create($request->all());
return ['created' => true];
}
public function show ($id)
{
return Farmaco::find($id);
}
public function update (Request $request, $id)
{
$farmaco = Farmaco::find($id);
$farmaco->update($request->all());
return ['updated' => true];
}
public function destroy ($id)
{
Farmaco::destroy($id);
return ['deleted' => true];
}
}

