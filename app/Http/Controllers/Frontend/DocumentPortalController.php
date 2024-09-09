<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class DocumentPortalController extends Controller
{
    public function index(): View
    {
        return view('frontend.document_portal.index');
    }
}
