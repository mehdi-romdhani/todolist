<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use DragonCode\Contracts\Cashier\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        // Utilisation de la méthode validate via l'objet Request -> injection de dépendance
        $formData = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        $utilisateur = User::where('username', $formData['username'])->first();

        if ($utilisateur) {
            // Utilisation de la façade Auth:: et de la méthode attempt pour le traitement des
            if (Auth::attempt($formData)) {
                $request->session()->regenerate();
                return redirect()->intended('user');
            } else {
                return back()->withErrors([
                    'password' => 'Mot de passe incorrect',
                ])->onlyInput('password');
            }
        } else {
            return back()->withErrors([
                'username' => "L'utilisateur avec l'username {$formData['username']} n'existe pas",
            ])->onlyInput('username');
        }
    }

}
