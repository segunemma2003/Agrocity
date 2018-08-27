<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FarmersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "phone"=>"required",
            "gender"=>"required",
            "town"=>"required",
            "state"=>"required",
            "lga"=>"required",
            "support"=>"required",
            "group"=>"required",
            "land"=>"required",
            "ward"=>"required",
            "crop"=>"required",
            "bank"=>"required",
            "accountno"=>"required",
            "bvn"=>"required",
            "rname"=>"required",
            "raddress"=>"required",
            "rphone"=>"required",
            //uploads
            "nepareferee"=>"image|max:500",
            "pixreferee"=>"image|max:500",
            "passport"=>"image|max:500",
            "certificates"=>"image|max:500",
            "regcert"=>"image|max:500",
            "idcard"=>"image|max:500"

        ];
    }
}
