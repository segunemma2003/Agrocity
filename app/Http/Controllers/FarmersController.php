<?php

namespace App\Http\Controllers;
use Farmers;
use Session;
use Illuminate\Http\Request;
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
              $neparefree=$this->get_pictures('nepareferee', $request);
        $pixreferee=$this->get_pictures('pixreferee', $request);
        $passport=$this->get_pictures('passport', $request);
        $certificates=$this->get_pictures('cerificates', $request);
        $regcert=$this->get_pictures('regcert', $request);
        $idcard=$this->get_pictures('idcard', $request);
        $farmers=new Farmers;
        $farmers->phone=$request->phone,
        $farmers->gender=$request->gender,
        $farmers->town=$request->town,
        $farmers->state=$request->state,
        $farmers->lga=$request->lga,
        $farmers->support=$request->support,
        $farmers->group=$request->group,
        $farmers->land=$request->land,
        $farmers->ward=$request->ward,
        $farmers->crop=$request->crop,
        $farmers->bank=$request->bank,
        $farmers->accountno=$request->accountno,
        $farmers->bvn=$request->bvn,
        $farmers->rname=$request->rname,
        $farmers->address=$request->raddress,
        $farmers->rphone=$request->rphone,
        $farmers->idcard=$idcard
        $farmers->regcert=$regcert
        $farmers->certificates=$certificates
        $farmers->passport=$passport
        $farmers->pixreferee=$pixreferee
        $farmers->nepareferee=$nepareferee
        if($farmers-?save()){
            Session::flash('msg',"you are welcome");
            return redirect("/farmers/dashboard");
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
