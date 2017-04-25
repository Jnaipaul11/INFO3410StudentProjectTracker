<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    
   
    public function create(){

            return view('welcome');
    }

     public function store(){

           // Validate the form

           $this->validate(request(),[

               'fname' => 'required',
               'lname' => 'required',
               'email' => 'required|email',
               'password' => 'required|confirmed'


           ]);

           //create and save the user

           $user = User::create(request(['fname', 'lname', 'email', 'password', 'isadmin'=> 0, 'created_at', 'updated_at']));

           //sign them in

           auth::login($user);


           //Redirect
           if('isadmin'==1){
               return redirect('/adminprojects');
           }

           return redirect('/studentprojects');

     }
    


}
