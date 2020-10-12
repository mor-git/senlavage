<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProduit()
    {
        $produits = Produit::all();
        return view('produits.listProduit',['produits'=>$produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduit()
    {
        return view('produits.addProduit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function storeProduit(Request $request)
    {
        $produit = new Produit();
        $produit->reference = $request->ref;
        $produit->nomProduit = $request->produit;
        $produit->save();

        return redirect('produits');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function showProduit(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function editProduit(Produit $produit)
    {
        $produit = Produit::find($produit);
        return view('produits.updateProduit', ['produit'=>$produit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function updateProduit(Request $request, Produit $produit)
    {
        $produit = Produit::find($produit);
        $produit->reference  = $request->ref;
        $produit->nomProduit = $request->produit;
        $produit->update();

        return redirect('produits');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroyProduit(Produit $produit)
    {
        //
    }
}
