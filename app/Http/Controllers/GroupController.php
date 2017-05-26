<?php

namespace App\Http\Controllers;

use App\Group;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class GroupController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    protected $redirectTo = '/group';
    public function __invoke($id)
    {
        return view('group', ['group' => Group::findOrFail($id)]);
    }

    public function add_Favorite(Request $request)
    {

        $id = Auth::id();
        $user = new User;
        $user =User::findOrFail($id);
   
           $user->idGroup = $request->id;
           

       $user->save();
       

      return back(); return redirect()->back();
        
    }

 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    
}
