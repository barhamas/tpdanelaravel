<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $terrains = Terrain::paginate(10);
        return view('terrains.index', compact('terrains'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('terrains.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'longueur' => 'required|numeric',
            'largeur' => 'required|numeric',
            'type_de_papier' => 'required|in:bail,titre foncier',
        ]);

        // Exclure le champ `_token` avant l'insertion dans la base de données
        $terrainData = $request->except('_token');

        Terrain::create($terrainData);
        return redirect()->route('terrains.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Terrain $terrain): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('terrains.show', compact('terrain'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terrain $terrain): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('terrains.edit', compact('terrain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Terrain $terrain): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'longueur' => 'required|numeric',
            'largeur' => 'required|numeric',
            'type_de_papier' => 'required|in:bail,titre foncier',
        ]);

        $terrain->update($request->all());
        return redirect()->route('terrains.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terrain $terrain): \Illuminate\Http\RedirectResponse
    {
        $terrain->delete();
        return redirect()->route('terrains.index');
    }
}
