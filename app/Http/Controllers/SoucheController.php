<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Souche;
class SoucheController extends Controller
{

      public function archiver(Request $request, Souche $souche){ 
        $souche->etat=1;
        $souche->save();
        return $souche;

    }
    public function desarchiver(Request $request, Souche $souche){ 
        $souche->etat=0;
        $souche->save();
        return $souche;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Souche::all(); 
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
        return  $souche= Souche::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Souche::find($id);
        
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
        $souche = Souche::findOrFail($id);
        $souche->update($request->all());
        return $souche;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $souche = Souche::findOrFail($id);
 
        $souche->delete();
			return $souche;  
    }
}
