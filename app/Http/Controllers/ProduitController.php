<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Test; 
class ProduitController extends Controller
{
    
    public function archiver(Request $request, Produit $produit){ 
        $produit->etat=1;
        $produit->save();
        return $produit;

    }
    public function desarchiver(Request $request, Produit $produit){ 
        $produit->etat=0;
        $produit->save();
        return $produit;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produit::all(); 
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
        return  $produit = Produit::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Produit::find($id);
        
    }
    
    public function loadByIds($ids)
    {
        $ids=explode("_", $ids);
       
        return Produit::whereIn('id',$ids)->get();
        
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
       // $search=array();

        $columns=['ref_prod','famille_id','marque_id','etat'];
        foreach ($columns as $input) {
         if(!is_null($request->$input)){
            $search[$input] = $request->$input;
         }
        }   
         //return !array_key_exists('marque_id', $search)?'key not exist':$search['marque_id'];
       // User::where('name', 'LIKE', '%' . $term . '%');
       $result=array();
       $produits_by_ref_prod=collect();
       $produits_by_famille_id=collect();
       $produits_by_marque_id=collect();
       $produits_by_etat=collect();
	   $produits_by_nom_prod=collect();

       if(array_key_exists('ref_prod',$search))
         $produits_by_ref_prod= Produit::where('ref_prod', 'LIKE', '%' .$search['ref_prod'] . '%')->get();
        if(array_key_exists('famille_id',$search))       
        $produits_by_famille_id= Produit::where('famille_id', 'LIKE', '%' . $search['famille_id'] . '%')->get();
        if(array_key_exists('marque_id',$search))
        $produits_by_marque_id= Produit::where('marque_id', 'LIKE', '%' .$search['marque_id']. '%')->get();
        if(array_key_exists('etat',$search))
        $produits_by_etat= Produit::where('etat', 'LIKE', '%' .$search['etat']. '%')->get();
     if(array_key_exists('nom_prod',$search))
        $produits_by_etat= Produit::where('nom_prod', 'LIKE', '%' .$search['nom_prod']. '%')->get();
       $result=$produits_by_ref_prod->union($produits_by_famille_id);
       $result=$result->union($produits_by_marque_id);          
       $result=$result->union($produits_by_etat);
	    $result=$result->union($produits_by_nom_prod);
       return $result;
          
     
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
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());
        return $produit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
 
        $produit->delete();
			return $produit;  
    }
}
