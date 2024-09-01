<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ESignActDisclosureController extends Controller
{

    public function index()
    {
        return view('frontend.e-sign_act_disclosure.index');
    }

}
