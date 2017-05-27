<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use App\User;

class ConfigController extends Controller
{
        /**
     * Create a new controller instance.
     protected $redirectTo = '/home';
     *
     * @return void
     */

     protected $redirectTo = '/config';
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __invoke()
    {
        return view('config');
    }

    public function update_profile(Request $request)
    {
        $id = Auth::id();
        $user = new User;
        $user =User::findOrFail($id);

        $archivo = $request->file('userprofile_picture');
        $filename = str_replace(" ", "_", $archivo->getClientOriginalName());
        $realFileName = $id.rand().$filename;
        $request->file('userprofile_picture')->move(public_path("assets/images/user/"), $realFileName);
        $trueFile = "../assets/images/user/".$realFileName;
   
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->userDescription = $request->description;
        $user->userAvatarPath = $trueFile;

        $user->save();

      return back(); return redirect()->back();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
}
