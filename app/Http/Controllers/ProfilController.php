<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProfil()
    {
        $profils = Profil::all();
        return view('profils.listProfil', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProfil()
    {
        return view('profils.addProfil');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProfil(Request $request)
    {
        $profil = new Profil();
        $profil->profilName = $request->nameProfil;
        $profil->save();

        return redirect('profils');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function showProfil(Profil $profil)
    {
        $prof = Profil::find($profil);
        return view('profils.updateProfil', compact('prof'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function editProfil(Profil $profil, $id)
    {
        $profils = Profil::find($id);
        return view('profils.updateProfil',['profils'=>$profils]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function updateProfil(Request $request, Profil $profil)
    {
        $profil = Profil::find($request->id);
        $profil->profilName = $request->nameProfil;
        $profil->save();

        return redirect('profils');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroyProfil(Profil $profil)
    {
        //
    }
}
