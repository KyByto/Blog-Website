<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    
     public function update(ProfileUpdateRequest $request): RedirectResponse
     {

         $user = $request->user();

         // Valider et remplir les données utilisateur
         $user->fill($request->validated());
         // Vérifiez et traitez la photo de profil
         if ($request->hasFile('profile_pic')) {
             $imagePath = $request->file('profile_pic')->store('profile_pics', 'public');
     
             // Supprimer l'ancienne image si elle existe
             if ($user->profile_pic) {
                 Storage::disk('public')->delete($user->profile_pic);
             }
     
             // Mettre à jour le chemin de la nouvelle image
             $user->profile_pic = $imagePath;
         }
     
         // Vérifiez si l'email a changé et réinitialisez l'email_verified_at si nécessaire
         if ($user->isDirty('email')) {
             $user->email_verified_at = null;
         }
     
         // Sauvegardez les modifications de l'utilisateur
         $user->save();
     
         // Rediriger avec un statut de succès
         return Redirect::route('profile.edit')->with('status', 'profile-updated');
     }




    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
   
}
