<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class ESignActDisclosureController extends Controller
{
    public function index(): View
    {
        return view('frontend.e-sign_act_disclosure.index');
    }
}
