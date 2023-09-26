<?php

namespace App\Http\Controllers;

use App\Models\Mouton;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MoutonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moutons = Mouton::all();
        return view('mouton.listeMouton', compact('moutons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mouton.ajouterMouton');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2048', 'mimes:jpg,png,jpeg'],
            'nom' => ['required', 'string', 'max:255'],
            'genealogie' => ['required', 'string', 'max:255'],
            'race' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer'],
            'poids' => ['required', 'integer'],
            'taille' => ['required', 'integer'],
            'dateNaissance' => ['required', 'integer'],
            'prix' => ['required', 'integer'],
            'sexe' => ['required', 'string', 'max:255'],
        ]);

        $user = Auth::user();
        $user_id = $user->id;
        $imagePath = $request->file('image')->store('images', 'public');

        $mouton = new Mouton([
            'nom' => $request->input('nom'),
            'race' => $request->input('race'),
            'genealogie' => $request->input('genealogie'),
            'description' => $request->input('description'),
            'age' => $request->input('age'),
            'prix' => $request->input('prix'),
            'sexe' => $request->input('sexe'),
            'image' => $imagePath,
            'user_id' => $user_id,
        ]);
        $request->merge(['user_id' => $user_id]);

        $mouton->save();

        return redirect()->route('mouton.liste')->with('success', 'Le mouton a été ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mouton = Mouton::find($id);
        return view('mouton.detailMouton', compact('mouton'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mouton = Mouton::findOrFail($id);
        return view('mouton.updateMouton', compact('mouton'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mouton = Mouton::find($id);
        if ($request->hasFile('image')) {
            Storage::delete($mouton->image);
            
            $imagePath = $request->file('image')->store('mouton_images', 'public');
            $mouton->image = $imagePath;
        }
        $mouton->nom = $request->input('nom');
        $mouton->age = $request->input('age');
        $mouton->sexe = $request->input('sexe');
        $mouton->description = $request->input('description');
        $mouton->race = $request->input('race');
        $mouton->genealogie = $request->input('genealogie');

        $mouton->save();
        return redirect()->route('mouton.liste')->with('success', 'Le mouton a été modifier avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mouton = Mouton::findOrFail($id);
        $mouton->delete();
        return redirect()->back()->with('success', 'User deleted successful');
    }
}
