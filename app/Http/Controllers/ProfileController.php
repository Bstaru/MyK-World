<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __invoke($id)
    {
        return view('profile', ['user' => User::findOrFail($id)]);
    }
}
