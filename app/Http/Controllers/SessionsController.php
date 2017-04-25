<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SessionsController extends Controller
{
    public function __construct(){
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function create(){
        return view ('welcome');

    }

      public function store(){
         $email=request('email');
        $password=request('password');
        $x=$password; 
            if (Auth::attempt(['email' => $email, 'password' => $x, 'isadmin' => 0])) {
                return redirect()->intended('studentprojects');
            }
           if (Auth::attempt(['email' => $email, 'password' => $x, 'isadmin' => 1])) {
               return redirect()->intended('adminprojects');
           }
       return back()->withErrors([
            'message' => 'Please check your credentials and try again.'.$x
        ]);
      }
          
   //     Attempt to authenticate user
    // $email=request('email');
    // $password=request('password');
    // $x=bcrypt($password);
    //     if(!auth()->attempt(request(['email',$x]))){

    //     return back()->withErrors([
    //         'message' => 'Please check your credentials and try again.'.$password
    //     ]);
    //     }

    //      return redirect('studentprojects');
    
    // }




    public function destroy(){
        Auth::logout();

        return redirect('/');

    }
    
}
