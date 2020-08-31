<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marque;

class MarqueController extends Controller
{

     public function archiver(Request $request, Marque $marque){ 
        $marque->etat=1;
        $marque->save();
        return $marque;

    }
    public function desarchiver(Request $request, Marque $marque){ 
        $marque->etat=0;
        $marque->save();
        return $marque;

    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return Marque::all(); 
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
        

      return  $marque = Marque::create($request->all());

      
    }

    

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Marque::find($id);

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
	 function RemoveSpecialChar($str) {
  
        // Using str_replace() function  
        // to replace the word  
        $res = str_replace( array( '\'', '"', 
        ',' , ';', '<', '>' ), ' ', $str); 
          
        // Returning the result  
        return $res; 
        }
     public function search(Request $request){     
        $columns=['etat'];
        foreach ($columns as $input) {
         if(!is_null($request->$input)){
            $search[$input] = $request->$input;
         }
        }     
          
           
       return $marques= Marque::where($search)->get(); 
 
       
       
      
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
        $marque= Marque::findOrFail($id);
        $marque->update($request->all());
        return $marque;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marque = Marque::findOrFail($id);
 
        $marque->delete();
			return $marque;   
    }
}
