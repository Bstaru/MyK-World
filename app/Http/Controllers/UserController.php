<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{       

    use RegistersUsers;
   //  protected $redirectTo = '/index';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected $redirectTo = '/index';
 /*   public function store(Request $request)
    {
              $username = $request->input('username');
      $email = $request->input('email');
      $password = $request->input('password');
      $name = $request->input('name');
      $lastname = $request->input('lastname');
      $birthday = $request->input('birthday');
      $gender = $request->input('gender');


      $user_id = DB::table('users')->insertGetId(
        [
        'userName' => $username, 
        'email' => $email,
        'password' =>$password , 
        'nameUser' => $name,
        'lastname' => $lastname, 
        'birthday' => $birthday,
        'gender' => $gender
        
        ]
    );
*/
      public function store(Request $request)
    {
        // Validate the request...

        $user = new User;

        $user->username = $request->username;
         $user->email = $request->email;
          $user->password = bcrypt($request->password);
           $user->name = $request->name;
            $user->lastname = $request->lastname;
             $user->birthday = $request->birthday;
             $user->gender = $request->gender;

        $user->save();

        return redirect()->route('index');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //insertar todo el modelo de usuario
       $user = App\User::find(1);

        $flight->name = 'New Flight Name';

        $flight->save();

        $user->username = $request->username;
         $user->email = $request->email;
          $user->password = bcrypt($request->password);
           $user->name = $request->name;
            $user->lastname = $request->lastname;
             $user->birthday = $request->birthday;
             $user->gender = $request->gender;

        $user->save();

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function logout()
    {
        Auth::logout();
    }
}
