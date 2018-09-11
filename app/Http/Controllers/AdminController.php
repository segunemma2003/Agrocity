<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use  App\User;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users=User::all();
        $investors=User::whereUser_type('investor')->get();
        $farmers=User::whereUser_type('farmer')->get();
        return view('dashboard.admin.index',compact('users','investors','farmers'));
    }
    public function users()
    {
        $users=User::paginate(5);
        return view('dashboard.admin.users',compact('users'));
    }
    public function farmers(){
        $users=User::whereUser_type('farmer')->paginate(5);
        return view('dashboard.admin.farmers',compact('users'));
    }
    public function admin($id,$admin){
        $user=User::whereId($id)->first();
        $user->isAdmin=$admin;
        $user->save();
        Session::flash('success','Successfully Updated');
        return redirect()->back();
    }
    public function eachfarmers($id){
        $user=User::whereId($id)->first();
        return view('dashboard.admin.farmerdetails',compact('user'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
