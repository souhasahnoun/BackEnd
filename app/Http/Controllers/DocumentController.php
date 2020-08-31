<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentController extends Controller
{

    public function archiver(Request $request, Document $document){ 
      $document->etat=1;
      $document->save();
        return $document;

    }
    public function desarchiver(Request $request, Document $document){ 
      $document->etat=0;
        $document->save();
        return $document;

    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Document::all(); 
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

        //return  $document = Document::create($request->all());
   
        return  $document = Document::create($request->all());
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Document::find($id);
        
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
        $columns=['num','etat_rs','fournisseur_id','date','date_prev','date_fin','etat_pay','login','etat','rs'];
        foreach ($columns as $input) {
         if(!is_null($request->$input)){
            $search[$input] = $request->$input;
         }
        }     
          
           
       return $documents= Document::where($search)->get(); 
 
       
       
      
    }
  public function imprimer(Request $request){     
        $columns=['client_id','date','etat_pay'];
        foreach ($columns as $input) {
         if(!is_null($request->$input)){
            $imprimer[$input] = $request->$input;
         }
        }     
          
           
       return $documents= Document::where($imprimer)->get(); 
 
       
       
      
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
        $document = Document::findOrFail($id);
        $document->update($request->all());
        return $document;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document= Document::findOrFail($id);
 
        $document->delete();
			return $document;  
    }
}
