<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller; 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        

        return view('backend.users.liste', [
            'users' => User::all(),
        ]);
    }

    public function create()
    {
        return view('backend.users.ajouter');
    }
    
    public function store(Request $request)
    {
        
            $request->validate([
                'nom' => 'required',
                'email' => 'required|email|unique:users,email',
                'mtdp' => 'required|min:6',
            ], 
            [
                'nom.required' => 'Veuillez entrer un nom pour l\'utilisateur.',
                'email.required' => 'Veuillez entrer une adresse e-mail.',
                'email.email' => 'Veuillez entrer une adresse e-mail valide.',
                'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
                'mtdp.required' => 'Veuillez entrer un mot de passe.',
                'mtdp.min' => 'Le mot de passe doit comporter au moins 6 caractères.',
            ]);
    
            $user = User::create([
                'name' => $request->input('nom'), 
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('mtdp')),
            ]);
    
            return redirect()->route('users.index')->with('success', 'Utilisateur créé avec succès !');
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);
        // dd($user);
        
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id, 
        ], 
        [
            'nom.required' => 'Veuillez entrer un nom pour l\'utilisateur.',
            'email.required' => 'Veuillez entrer une adresse e-mail.',
            'email.email' => 'Veuillez entrer une adresse e-mail valide.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.', 
        ]);
    
        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        
        if ($request->filled('mtdp')) {
            $user->password = Hash::make($request->input('mtdp'));
        }else {
            // If the password field is empty, we don't change the password
            $user->password = $user->password; // Keep the existing password
        }
        
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès !');
    }   


    public function profile()
    {
        $user = auth()->user();
        return view('backend.profil', [
            'user' => $user,
        ]);
    }
}
