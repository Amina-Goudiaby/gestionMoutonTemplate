<?php

namespace App\Http\Controllers;

use App\Models\Eleveur;
use App\Models\Mouton;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            'poids' => ['required', 'numeric'],
            'taille' => ['required', 'numeric'],
            'dateNaissance' => ['required', 'date'],
            'prix' => ['required', 'integer'],
            'sexe' => ['required', 'string', 'max:255'],
        ]);


        $eleveur = Eleveur::where('user_id', Auth::user()->id)->first();

        if($eleveur){
            $eleveurId = $eleveur->id;
            $imagePath = $request->file('image')->store('images', 'public');

            $mouton = new Mouton([
                'nom' => $request->input('nom'),
                'race' => $request->input('race'),
                'poids' => $request->input('poids'),
                'taille' => $request->input('taille'),
                'genealogie' => $request->input('genealogie'),
                'dateNaissance' => $request->input('dateNaissance'),
                'prix' => $request->input('prix'),
                'sexe' => $request->input('sexe'),
                'image' => $imagePath,
                'eleveur_id' => $eleveurId,
            ]);

            $mouton->save();

            return redirect()->route('mouton.listeMoutonParEleveur')->with('success', 'Le mouton a été ajouté avec succès.');
        }
        else{
            return redirect()->route('mouton.liste')->with('erreur', 'Vous ne pouvez pas ajouter un mouton car vous n\'etes pas eleveur');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::user();
        //dd($user->typeProfil);
        $mouton = Mouton::with('eleveur.user')->find($id);
        return view('mouton.detailMouton', compact('mouton','user'));
    }

    public function listeMoutonParEleveur(){
        $userId = auth()->user()->id;
        $eleveur = Eleveur::where('user_id', $userId)->first();
        if($eleveur){
            $eleveurId = $eleveur->id;
            $moutons = Mouton::where('eleveur_id', $eleveurId)->get();
            return view('mouton.listeMoutonParEleveur', compact('moutons'));
        }
        else{
            return redirect()->route('mouton.liste')->with('erreur', 'Vous ne pouvez pas acceder cette page car vous n\'etes pas eleveur');
        }
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
        $mouton->dateNaissance = $request->input('dateNaissance');
        $mouton->sexe = $request->input('sexe');
        $mouton->poids = $request->input('poids');
        $mouton->taille = $request->input('taille');
        $mouton->prix = $request->input('prix');
        $mouton->race = $request->input('race');
        $mouton->genealogie = $request->input('genealogie');

        $mouton->save();
        return redirect()->route('mouton.listeMoutonParEleveur')->with('success', 'Le mouton a été modifier avec succès.');
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
