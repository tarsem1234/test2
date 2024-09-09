<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Page;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $aboutUs = Page::where('title', 'About Us')->first();
        dd($aboutUs);

        return view('frontend.about_us.index', ['aboutUs' => $aboutUs]);
    }
}
