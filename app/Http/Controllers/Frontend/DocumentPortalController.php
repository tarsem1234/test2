<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class DocumentPortalController extends Controller
{
    public function index()
    {
        return view('frontend.document_portal.index');
    }
}
