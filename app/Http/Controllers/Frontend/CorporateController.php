<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CorporateController extends Controller
{
    public function index()
    {
        return view('frontend.corporate.index');
    }
}
