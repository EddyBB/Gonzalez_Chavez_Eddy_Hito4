<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'profile']]);
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('user.profile', compact('user') );
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        request()->validate(User::$rules);

        $user = User::find($id);

        $user->update($request->all());

        return view('user.profile', compact('user') );
    }
}
