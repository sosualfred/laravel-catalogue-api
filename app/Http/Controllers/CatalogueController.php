<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        return Catalogue::all();
    }

    public function show(int $id)
    {
        return Catalogue::find($id);
    }

    public function store(Request $request)
    {
        Catalogue::create([
            'name' => $request->name,
        ]);

        return response('Catalogue added successfully', 201);
    }

    public function update(int $id, Request $request)
    {
        $catalogue = Catalogue::find($id);
        $catalogue->update([
            'name' => $request->name,
        ]);
    }

    public function destroy(int $id)
    {
        $catalogue = Catalogue::find($id);
        $catalogue->delete();
    }
}
