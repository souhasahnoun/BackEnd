<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Famille;


class FamilleController extends Controller
{

     public function archiver(Request $request, Famille $famille){ 
       $famille->etat=1;
        $famille->save();
        return $famille;

    }
    public function desarchiver(Request $request, Famille $famille){ 
       $famille->etat=0;
      $famille->save();
        return $famille;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Famille::all(); 
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
        return  $famille = Famille::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Famille::find($id);
        
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
        $columns=['etat'];
        foreach ($columns as $input) {
         if(!is_null($request->$input)){
            $search[$input] = $request->$input;
         }
        }     
          
           
       return $familles= Famille::where($search)->get(); 
 
       
       
      
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
        $famille = Famille::findOrFail($id);
        $famille->update($request->all());
        return $famille;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $famille = Famille::findOrFail($id);
 
        $famille->delete();
			return $famille;  
    }
}
