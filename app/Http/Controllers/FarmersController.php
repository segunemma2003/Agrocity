<?php

namespace App\Http\Controllers;
use App\Farmers;
use Auth;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;
use App\VerifyUser;
use App\Http\Requests\FarmersRequest;
class FarmersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function api_create(Request $request )
    {
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        // dd($user->id);
        $verifyuser=new VerifyUser;
        $verifyuser->user_id=$user->id; 
        $verifyuser->token=sha1(time());
        if($verifyuser->save()){
            Mail::to($user->email)->send(new VerifyMail($user));  
            return response()->json([
            "status"=>200,
            "message"=>"you have successfully registered, visit your mail for verification"

            ]);  
        }else{
            return response()->json([
                "status"=>501,
                "message"=>"error while trying to register"
            ]);
        }
    }
    public function api_login(Request $request){
        $user=User::whereEmail($request->email)->wherePassword(Hash::make($request->password))->first();
        // dd(Hash::make($request->password));
        if($user){
            // dd($user->verified);
            if($user->verified){
                return response()->json([
                    "status"=>200,
                    "message"=>"account is authenticated and verified"
                ]);    
            }
            else{
                return response()->json([
                    "status"=>301,
                    "message"=>"account is authenticated but not verified"
                ]);
            }

            
        }
        else{
            return response()->json([
                    "status"=>500,
                    "message"=>"There is no account for this user"
                ]);
        }
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

    public function get_pictures($picture, FarmersRequest $request){
        if($request->hasFile($picture)){
            $filename=$request->file($picture)->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file($picture)->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            $request->file($picture)->storeAs('public/upload',$filenameToStore);
            return $filenameToStore;
        }
        else{
            return 'noimage.jpg';
        
        }
    }
    public function store(FarmersRequest $request)
    {
        // $this->validate($request,[
        //      "phone"=>"required",
        //     "gender"=>"required",
        //     "town"=>"required",
        //     "state"=>"required",
        //     "lga"=>"required",
        //     "town"=>"required",
        //     "support"=>"required",
        //     "group"=>"required",
        //     "land"=>"required",
        //     "ward"=>"required",
        //     "crop"=>"required",
        //     "bank"=>"required",
        //     "accountno"=>"required",
        //     "bvn"=>"required",
        //     "rname"=>"required",
        //     "rphone"=>"required",
        //     //uploads
        //     "raddress"=>"required",
        //     "nepareferee"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
        //     "pixreferee"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
        //     "passport"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
        //     "certificates"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
        //     "regcert"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
        //     "idcard"=>"mimes:jpg,jpeg,png,gif,png|max:2048"
        // ]);
        // dd($request->all());
              $nepareferee=$this->get_pictures('nepareferee', $request);
        $pixreferee=$this->get_pictures('pixreferee', $request);
        $passport=$this->get_pictures('passport', $request);
        $certificates=$this->get_pictures('cerificates', $request);
        $regcert=$this->get_pictures('regcert', $request);
        $idcard=$this->get_pictures('idcard', $request);
        $farmers=new Farmers;
        $farmers->user_id=Auth::user()->id;
        $farmers->phone=$request->phone;
        $farmers->gender=$request->gender;
        $farmers->town=$request->town;
        $farmers->state=$request->state;
        $farmers->lga=$request->lga;
        $farmers->support=$request->support;
        $farmers->group=$request->group;
        $farmers->land=$request->land;
        $farmers->ward=$request->ward;
        $farmers->crop=$request->crop;
        $farmers->bank=$request->bank;
        $farmers->accountno=$request->accountno;
        $farmers->bvn=$request->bvn;
        $farmers->rname=$request->rname;
        $farmers->raddress=$request->raddress;
        $farmers->rphone=$request->rphone;
        $farmers->idcard=$idcard;
        // $farmers->regcert=$regcert;
        $farmers->certificates=$certificates;
        $farmers->passport=$passport;
        $farmers->pixreferee=$pixreferee;
        $farmers->nepareferee=$nepareferee;
        if($farmers->save()){
            Session::flash('msg',"you are welcome");
            return redirect("/farmers/dashboard");
        }
        else{
            Session::flash('msg','error while inputing data. Make sure you are logged in');
            return redirect()->back();
        }
  
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
