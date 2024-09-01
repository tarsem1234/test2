<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\State;
use App\Models\DocumentListing;

class PageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $pages = Page::latest()->get();
//
//        return view('backend.pages.index', ['pages' => $pages]);
//    }

    public function aboutUs()
    {
        $page = Page::where('title', 'About Us')->first();

        return view('frontend.pages.about_us', compact('page'));
    }

    public function corporate()
    {
        $page = Page::where('title', 'Corporate')->first();

        return view('frontend.pages.corporate', compact('page'));
    }

    public function termOfUse()
    {
        $page = Page::where('title', 'Term of Use & Limited Liability')->first();

        return view('frontend.pages.terms', compact('page'));
    }

    public function privacyPolicy()
    {
        $page = Page::where('title', 'Privacy Policy')->first();

        return view('frontend.pages.privacy_policy', compact('page'));
    }

    public function eSign()
    {
        $page = Page::where('title', 'E-Sign Act Disclosure')->first();

        return view('frontend.pages.e-sign_act_disclosure', compact('page'));
    }

    public function help()
    {
        $page = Page::where('title', 'Help')->first();

        return view('frontend.pages.help', compact('page'));
    }

    public function documentPortal()
    {
        $states = State::with('documents')->paginate(12);
        return view('frontend.pages.document_portal',compact('states'));
    }
    public function documentsList($stateId)
    {
        $documents = DocumentListing::where('state_id',$stateId)->paginate(5);
        return view('frontend.pages.documents_list',compact('documents'));
    }

    public function getPage($slug = null)
    {
        if (!$slug) {
            return redirect()->back();
        }

        if ($slug == "about-us") {
            return $this->aboutUs();
        }
        if ($slug == "corporate") {
            return $this->corporate();
        }
        if ($slug == "help") {
            return $this->help();
        }
        if ($slug == "privacy-policy") {
            return $this->privacyPolicy();
        }
        if ($slug == "term-of-use-&-limited-liability") {
            return $this->termOfUse();
        }
        if ($slug == "e-sign-act-disclosure") {
            return $this->eSign();
        }
        return redirect()->back();
    }
}