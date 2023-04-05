<?php

namespace App\Http\Controllers;
use App\Models\Sauce;

use Illuminate\Http\Request;

class SauceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauce.index', compact('sauces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
        return view('sauce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nom' => $request->Nom,
            'Fabricant' => $request->Fabricant,
            'Description' => $request->Description,
            'IngredientPrincipale' => $request->IngredientPrincipale,
            'URL' => $request->URL,
            'Puissance' => $request->Puissance
        ]);

        Sauce::create($request->all());

        return redirect()->route('sauce.index')
                        ->with('success','Sauce créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sauces = Sauce::findOrFail($id);
        return view('sauce.show', compact('sauces'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sauces = Sauce::findOrFail($id);
        return view('sauce.edit', compact('sauces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom' => 'required',
            'Fabricant' => 'required',
            'Description' => 'required',
            'IngredientPrincipale' => 'required',
            'URL' => 'required',
            'Puissance' => 'required'
        ]);
        $id->update($request->all());
        return redirect()->route('sauce.index')
                        ->with('success','Sauce modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sauces = Sauce::findOrFail($id);
        $sauces->delete();

        return redirect()->route('sauce.index')
                        ->with('success','sauces supprimé avec succès');
    }
}
