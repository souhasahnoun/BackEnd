<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;

class FournisseurController extends Controller
{

  public function archiver(Request $request, Fournisseur $fournisseur){ 
       $fournisseur->etat=1;
       $fournisseur->save();
        return $fournisseur;

    }
    public function desarchiver(Request $request, Fournisseur $fournisseur){ 
       $fournisseur->etat=0;
        $fournisseur->save();
        return $fournisseur;

    }
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Fournisseur::all(); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return  Fournisseur::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Fournisseur::find($id);
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
        $fournisseur= Fournisseur::findOrFail($id);
        $fournisseur->update($request->all());
        return $fournisseur;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseur = Fournisseur::findOrFail($id);
 
        $fournisseur->delete();
			return $fournisseur;    }
}

