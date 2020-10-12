<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class UserController extends Controller 
{
    use PasswordValidationRules;

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUser()
    {
        $users = User::all();
        return view('users.listUser',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser()
    {
        $profils = Profil::all();
        return view('users.register', ['profils'=>$profils]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        //  dd($request);
       
        $v = Validator::make($request->all(), [
            'prenom'=> 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => $this->passwordRules(),
            'password' => 'required|string|min:6',
            'profil'=> 'required',
        ]);
        if ($v->fails()) 
        {
            return redirect()->back()->withErrors($v->errors());
        }else{
            // dd($request);
            $user = new User();
            $user->firstName = $request->prenom;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->profil_id = $request->profil;
            $user->save();
        }      

        return redirect('users'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function showUser(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function editUser(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroyUser(User $User)
    {
        //
    }
}
