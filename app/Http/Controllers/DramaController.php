<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Drama;
use App\UserDrama;

class DramaController extends Controller
{
       /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    protected $redirectTo = '/drama';
    public function __invoke($id)
    {
        return view('drama', ['drama' => Drama::findOrFail($id)]);
    }

    public function add_to_list(Request $request)
    {

        $id = Auth::id();
        $userDrama = new UserDrama;
        $userDrama->idUser=$id;
        $userDrama->idDrama=$request->idDrama;
         $userDrama->episodesWatched=0;

       $userDrama->save();
       

      return back(); return redirect()->back();
        
    }

    public function add_to_fav_drama(Request $request)
    {

        $id = Auth::id();
        $user = new User;
        $user =User::findOrFail($id);
   
      
        $user->idDrama = $request->idDrama;
     

       $user->save();
      return back(); return redirect()->back();

      return $request->idDrama;
    }

 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
