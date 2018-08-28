<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type==null){
            return redirect('/decision');
        }else if(Auth::user()->user_type=="farmer"){
            return redirect('/farmers/dashboard');    
        }
        
        else if(Auth::user()->user_type=="investor"){
            return view('/farmers/dashboard');   
        }
        return redirect('/login');
    }
    public function decision(Request $request){
        $user =Auth::user();
        // dd($user->user_type);
        $user->user_type=$request->user_type;
        $user->save();

        if($request->user_type=="farmer"){
            
            
                Session::flash('msg',"Successfully a Farmer");
                return redirect('/farmers/forms')->with(["user"=>$user]);
        }
            else if($request->user_type=="investor"){
                Session::flash('msg',"Successfully an Investor");
                return redirect('/farmers/dashboard')->with("user",$user);   
            }
        
        else if(!$user->save()){
        Session::flash('warning',"Not Successful");
        return redirect()->back();
    }
                        // dd($user);
        // $request->user_type
    }
}
