<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Eleveur;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'image' => ['nullable', 'image', 'max:2048', 'mimes:jpg,png,jpeg'],
            'adress' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['required', 'integer'],
            'typeProfil' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request->file('image') ? $request->file('image')->store('images', 'public'):null,
            'adress' => $request->adress,
            'phoneNumber' => $request->phoneNumber,
            'typeProfil' => $request->typeProfil,
        ]);

        event(new Registered($user));

        $useId = $user->id;

        if($request->typeProfil === 'client'){
            $client = new Client();
            $client->user_id = $useId;
            $client->save();
        }
        elseif($request->typeProfil === 'eleveur'){
            $eleveur = new Eleveur();
            $eleveur->user_id = $useId;
            $eleveur->save();
        }

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
