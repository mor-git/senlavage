<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\DetailsService;
use App\Models\Produit;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexService()
    {
        $details = DetailsService::all();
        return view('servicesPages.listService',['details' => $details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createService()
    {
        $produits = Produit::all();
        return view('servicesPages.addService',['produits'=>$produits ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeService(Request $request)
    {
        $t1 = $request->request->all();
    
        // if($request->ajax()){
        //     $t1 = $request->request->all();
        //     dd($t1);
        // }
        
        $service = new Service();
        $service->laDate       = date("Y-m-d-H-i-s");
        $service->prenomClient = $t1["prenom"];
        $service->nomClient    = $t1["nom"];
        $service->phone        = $t1["phone"];
        $service->user_id      = $t1["user"];
        $service->statut       = $t1["statut"]; 

        $service->save();
        $idService = $service->id;

        for($i=0; $i < count($t1["tab"]); $i++){

            $details = new DetailsService();
            $details->produit_id = $t1["tab"][$i][0];
            $details->service_id = $idService;
            $details->taille     = $t1["tab"][$i][1];
            $details->montant    = $t1["tab"][$i][2];
            $details->total      = $t1["montantTotal"];

            $details->save();
        }
        
        return view('servicesPages.listService');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function showService(Service $service)
    {
        $services = Service::find($service);
        return view('servicesPages.listService', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function editService(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function updateService(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroyService(Service $service)
    {
        //
    }
}
