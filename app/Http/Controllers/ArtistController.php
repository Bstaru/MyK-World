<?php

namespace App\Http\Controllers;
use App\Artist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class ArtistController extends Controller
{
	/**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
     public function __invoke($id)
    {
        return view('artist', ['artist' => Artist::findOrFail($id)]);
    }

    public function add_to_fav(Request $request)
    {

        $id = Auth::id();
        $user = new User;
        $user =User::findOrFail($id);
   
           
            
      

      if($request->typeArtist =="Idol"){
        $user->idArtist = $request->idArtist;
      }
      elseif($request->typeArtist =="Actor")
      {
        $user->idDramaArtist = $request->idArtist;
      }

       $user->save();
      return back(); return redirect()->back();
    }
}
