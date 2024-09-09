<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    public function index(): View
    {
        return view('frontend.help.index');
    }
}
