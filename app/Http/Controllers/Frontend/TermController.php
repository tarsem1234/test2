<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {

        return view('frontend.terms.index');
    }
}
