<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('addproject');
    }//for form

       public function store(Request $request){
       // dd(request()->all());
       $path='null';
       $post=new Project;
       $post->projectname=request('projectname');
       $post->ccode=request('ccode');         
       $post->cname=request('cname');
       $post->year=request('year');
       $post->desc=request('desc');
       
       $post->github=request('github');
         $post->pimage=request('pimage');        
       $post->show=(0);
       $post->save();
       return redirect('/addproject');
    } //updateform

    public function changes($id){
        try{
            // $user=Project::where('cid','=',$id);
            $pro=Project::find($id);
            $pro->show=(1);
             $pro->save();
        }
        catch(ModelNotFoundException $err){
    
        //Show error page
        }
           return redirect('/adminprojects');
      
    }//approve projects

    public function readmore($id){
              try{
            $pro=Project::find($id);
            return view('projectinfo',compact('pro'));
        }
        catch(ModelNotFoundException $err){
    
        //Show error page
        }


    }//readmore
 
}
