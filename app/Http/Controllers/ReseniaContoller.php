<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Resenia;
use Illuminate\Support\Facades\Auth;
use DB;
class ReseniaContoller extends Controller
{
    public function __invoke($id)
    {
         return view('resenia', ['resenia' => Resenia::findOrFail($id)]);
    }

     public function create_resenia(Request $request)
    {
    	$id = Auth::id();
    	$resenia= new Resenia;
   
        $resenia->idUser = $id;
        $resenia->idDrama = $request->idDrama;
        $resenia->reseniaTxt =$request->reseniaTxt;
       

        $resenia->save();
        $idResenia= $resenia->id;


        return view('resenia', ['resenia' => $resenia]);
    }

        public function update_resenia($idResenia,$reseniaTxt)
    {
    	$id = Auth::id();
    	
    	$resenia =Resenia::findOrFail($idResenia);
        $resenia->reseniaTxt =$reseniaTxt;
        $resenia->save();


    }

    public function delete_resenia($idResenia)
    {
    	
    	
    	DB::table('resenia')->where('id', '=', $idResenia)->delete();

        return view('list');


    }
}
