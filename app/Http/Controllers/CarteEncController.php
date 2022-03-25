<?php

namespace App\Http\Controllers;
use App\Models\CarteEtudiant;
use Illuminate\Http\Request;

class CarteEncController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cartesEtudiant = CarteEtudiant::all();
        return view('pages.index', compact('cartesEtudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.creation-carte');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $carteEtudiant = new CarteEtudiant();
        $carteEtudiant->nomEtudiant = $request->get('nomEtudiantFormulaire');

        /***
         * A COMPLETER POUR LE PRENOM ET L'EMAIL
         */
        $carteEtudiant->prenomEtudiant = $request->get('prenomEtudiantFormulaire');
        $carteEtudiant->email = $request->get('email');
        $carteEtudiant->date = $request->get('date');
        $carteEtudiant->tel = $request->get('tel');

        // Enregistrement dans la base de données

        $carteEtudiant->save();

        // redirection vers le dashboard

        return redirect('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
