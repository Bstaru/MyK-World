<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDrama;
use Illuminate\Support\Facades\Auth;
use DB;

class ListController extends Controller
{
     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __invoke()
    {
        
       // return view('list', ['user' => User::findOrFail($id)]);
        return view('list');
    }

    public function getDramas()
    {
     
      return view('list');
    }

    
    public function update_drama_status(Request $request)
    {
        $id = Auth::id();

      $userDrama = new UserDrama;


    $userDrama = UserDrama::where('idUser', $id)
          ->where('idDrama', $request->idSelectedDrama)
          ->update(['dramaStatus' => $request->dramaStatus]);

      return back(); return redirect()->back();
       
    }

     public function delete_from_list($idDrama)
    {
        $id = Auth::id();

          $userDrama = new UserDrama;
          $userDrama = UserDrama::where('idUser', $id)
          ->where('idDrama', $idDrama);
          $userDrama->delete();
    }
   
    public function recharge_list()
    {
       $dramas= User::find(Auth::user()->id)->drama;

          

        return response()->json($dramas);
    }

    public function add_list($idDrama)
    {
      $id = Auth::id();

      DB::table('userdramas')->increment('episodesWatched')
      ->where([
          ['idUser', '=', $id],
          ['idDrama', '=', $idDrama]
        ]);
    }
}
