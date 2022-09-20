<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function home() {
        $docteurs = Medecin::all();
        return view('site.pages.index', compact('docteurs'));
    }

    public function consultation(Request $request) {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'address' => 'required'
        //     ]);
            $patient = new Patient();
            $patient->nom = $request->nom;
            $patient->prenom = $request->prenom;
            $patient->adresse = $request->adresse;
            $patient->age = $request->age;
            $patient->telephone = $request->telephone;
            $patient->mois_grossesse = $request->mois_grossesse;
            $patient->nombre_cpn = $request->nombre_cpn;
            $patient->email = $request->email;
            $patient->profession = $request->profession;
            $patient->date_du_rendez_vous = $request->date_du_rendez_vous;
            $patient->heure_du_rendez_vous = $request->heure_du_rendez_vous;
            $patient->medecin_id = $request->doctor_id;
            $patient->save();

        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('liste ', [
            'user' => User::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            return view('formulaire');
        }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            User::create([
            'id' => $request->id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'poste' => $request->poste,
            'telephone' => $request->telephone,
            'email' => $request->email,

         ]);
        return redirect()->route('gestion_user.index');
    }

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show', [
            'finds' => User::find($id),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit', [
            'finds' => User::find($id),
        ]);
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
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('gestion_user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect()->route('gestion_user.index');
    }
}

