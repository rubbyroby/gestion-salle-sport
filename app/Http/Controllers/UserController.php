<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USer;

class UserController extends Controller
{
    /**
     * Create a new user instance.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Vérifie si l'utilisateur connecté a les permissions d'administrateur
        $this->middleware('admin');

        // Validation des champs de la requête
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Création d'un nouvel utilisateur
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Enregistrement de l'utilisateur dans la base de données
        $user->save();

        // Redirection vers la page de liste des utilisateurs
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Vérifie si l'utilisateur connecté a les permissions d'administrateur
        $this->middleware('admin');

        // Récupération de l'utilisateur à modifier
        $user = User::findOrFail($id);

        // Affichage du formulaire de modification
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified user in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Vérifie si l'utilisateur connecté a les permissions d'administrateur
        $this->middleware('admin');

        // Récupération de l'utilisateur à modifier
        $user = User::findOrFail($id);

        // Validation des champs de la requête
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8',
        ]);

        // Modification de l'utilisateur
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();

        // Redirection vers la page de liste des utilisateurs
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Vérifie si l'utilisateur connecté a les permissions d'administrateur
        $this->middleware('admin');

        // Récupération de l'utilisateur à supprimer
        $user = User::findOrFail($id);

        // Sup
    }
}