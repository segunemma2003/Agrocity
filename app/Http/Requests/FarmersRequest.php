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
            "town"=>"required",
            "support"=>"required",
            "group"=>"required",
            "land"=>"required",
            "ward"=>"required",
            "crop"=>"required",
            "bank"=>"required",
            "accountno"=>"required",
            "bvn"=>"required",
            "rname"=>"required",
            "rphone"=>"required",
            //uploads
            "raddress"=>"required",
            "nepareferee"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
            "pixreferee"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
            "passport"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
            "certificates"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
            "regcert"=>"mimes:jpg,jpeg,png,gif,png|max:2048",
            "idcard"=>"mimes:jpg,jpeg,png,gif,png|max:2048"

        ];
    }
}
