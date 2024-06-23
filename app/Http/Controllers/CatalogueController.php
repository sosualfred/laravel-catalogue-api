<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index () {
        return Catalogue::all();
    }

    public function create () {
        return view('catalogue.create');
    }

    public function store(Request $request) {
        Catalogue::create([
            'name' => $request->name,
        ]);
        return redirect(route('catalogue.all'));

        // return response('Catalogue added successfully', 200);
    }
}
