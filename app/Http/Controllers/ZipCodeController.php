<?php

namespace App\Http\Controllers;

use App\Helpers\Lang;
use App\Models\ZipCode;
use Illuminate\Http\Request;

class ZipCodeController extends Controller
{
    public function zipCode(Request $request,$zipCode)
    {
        $code=ZipCode::where(['zip_code'=>$zipCode]);
        if (! $code->first()) {
            return $this->response(Lang::get('api.not_code'), 404);
        }
        return $this->response($code->get(), 200);
    }
}
