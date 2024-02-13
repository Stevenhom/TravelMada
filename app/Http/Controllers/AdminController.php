<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Admins;
use App\Http\Requests\AdminStore;

class AdminController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function loginSave(AdminStore $request)
    {
        $valider = $request->validated();

        dd(Auth::attempt($valider));
    }

    public function index()
    {
        // Affiche la liste des ressources
    }

    public function create()
    {
        // Affiche le formulaire de création
    }

    public function show($id)
    {
            // Assurez-vous que l'utilisateur est authentifié
        if (Auth::check()) {
            $admin = Admins::find(Auth::id());
            return view('admins.dashboard', ['admin' => $admin]);
        } else {
            // Rediriger vers la page de connexion ou effectuer une autre action
            return redirect()->route('');
        }
    }

    public function edit($id)
    {
        // Affiche le formulaire d'édition
    }

    public function update(Request $request, $id)
    {
        // Traite la mise à jour de la ressource
    }

    public function destroy($id)
    {
        // Traite la suppression de la ressource
    }

}
