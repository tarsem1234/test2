<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ESignActDisclosureController extends Controller
{
    public function index()
    {
        return view('frontend.e-sign_act_disclosure.index');
    }
}
