<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Drama;
use App\Group;
use App\User;
use DB;


class SearchController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __invoke(Request $request)
    {
       

        $dramas= $this->search_drama($request->search);
        $artists= $this->search_artist($request->search);
        $users= $this->search_user($request->search);
        $groups= $this->search_group($request->search);
       return view('search', ['Drama' => $dramas, 'Artist' => $artists, 'User' => $users, 'Group' =>  $groups]);
        
    }

    
    public function search_drama($search)
    {
       
		$dramas = DB::table('dramas')
                ->where('dramaName', 'like','%' .$search.'%')
                ->get();
       

      return $dramas;

       
    }

     public function search_artist($search)
    {
      
      $artists = DB::table('artists')
                ->where('artistFullName', 'like','%' .$search.'%')
                ->get();
       

      return $artists;
    }
     public function search_user($search)
    {
       
     $users = DB::table('users')
                ->where('username', 'like','%' .$search.'%')
                ->orwhere('name', 'like','%' .$search.'%')
                ->orwhere('lastname', 'like','%' .$search.'%')
                ->get();
       

      return $users;
    }

    public function search_group($search)
    {
      
     $groups = DB::table('groups')
                ->where('groupName', 'like','%' .$search.'%')
                ->get();
       

      return $groups;
    }
}
