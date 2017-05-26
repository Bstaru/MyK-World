<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserInserController extends Controller
{
   /* public function insertform(){
      return view('stud_create');
   }*/

       public function insert(Request $request){
      $username = $request->input('username');
      $email = $request->input('email');
      $password =Hash::make( $request->input('password'));
      $name = $request->input('name');
      $lastname = $request->input('lastname');
      $birthday = $request->input('birthday');
      $gender = $request->input('gender');


      $id = DB::table('user')->insertGetId(
        [
        'userName' => $username, 
        'email' => $email,
        'userPassword' => $password, 
        'nameUser' => $name,
        'lastname' => $lastname, 
        'birthday' => $birthday,
        'gender' => $gender
        
        ]
    );

    return redirect()->route('start',['id' => $id]);
  
   }
  


	

}
