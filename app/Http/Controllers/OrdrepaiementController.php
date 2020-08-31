<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordrepaiement;

class OrdrepaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrdrePaiement::all(); 
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
        return  $ordrepaiement = OrdrePaiement::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return OrdrePaiement::find($id);
        
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

     public function search(Request $request){     
        $columns=['date'];
        foreach ($columns as $input) {
         if(!is_null($request->$input)){
            $search[$input] = $request->$input;
         }
        }     
          
           
       return $ordrepaiements= Ordrepaiement::where($search)->get(); 
 
       
       
      
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
        $ordrepaiement = OrdrePaiement::findOrFail($id);
        $ordrepaiement->update($request->all());
        return $ordrepaiement;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ordrepaiement = OrdrePaiement::findOrFail($id);
 
        $ordrepaiement->delete();
			return $ordrepaiement;  
    }
}
