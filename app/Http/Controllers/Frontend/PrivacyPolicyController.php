<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
    public function index(): View
    {
        return view('frontend.privacy_policy.index');
    }
}
