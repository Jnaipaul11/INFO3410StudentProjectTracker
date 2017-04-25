<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
     public function store(){
      // dd(request()->all());
       $post=new User;
       $post->fname=request('fname');
       $post->lname=request('lname');         
       $post->email=request('email');
       $post->password=request('password'); 
       $post->isadmin=(0);
       $post->save();
       return redirect('/');
    } //updateform
}
